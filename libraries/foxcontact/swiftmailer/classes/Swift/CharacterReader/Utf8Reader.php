<?php defined('_JEXEC') or die;
/**
 * @package   Fox Contact for Joomla
 * @copyright Copyright (c) Fox Labs, all rights reserved.
 * @license   Distributed under the terms of the GNU General Public License GNU/GPL v3 http://www.gnu.org/licenses/gpl-3.0.html
 * @see       Documentation: http://www.fox.ra.it/forum/2-documentation.html
 */

class Swift_CharacterReader_Utf8Reader implements Swift_CharacterReader
{
	private static $length_map = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 6, 6, 0, 0);
	private static $s_length_map = array(' ' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, "\t" => 1, "\n" => 1, "\v" => 1, "\f" => 1, "\r" => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, '' => 1, "\033" => 1, '' => 1, '' => 1, '' => 1, '' => 1, ' ' => 1, '!' => 1, '"' => 1, '#' => 1, '$' => 1, '%' => 1, '&' => 1, '\'' => 1, '(' => 1, ')' => 1, '*' => 1, '+' => 1, ',' => 1, '-' => 1, '.' => 1, '/' => 1, '0' => 1, '1' => 1, '2' => 1, '3' => 1, '4' => 1, '5' => 1, '6' => 1, '7' => 1, '8' => 1, '9' => 1, ':' => 1, ';' => 1, '<' => 1, '=' => 1, '>' => 1, '?' => 1, '@' => 1, 'A' => 1, 'B' => 1, 'C' => 1, 'D' => 1, 'E' => 1, 'F' => 1, 'G' => 1, 'H' => 1, 'I' => 1, 'J' => 1, 'K' => 1, 'L' => 1, 'M' => 1, 'N' => 1, 'O' => 1, 'P' => 1, 'Q' => 1, 'R' => 1, 'S' => 1, 'T' => 1, 'U' => 1, 'V' => 1, 'W' => 1, 'X' => 1, 'Y' => 1, 'Z' => 1, '[' => 1, '\\' => 1, ']' => 1, '^' => 1, '_' => 1, '`' => 1, 'a' => 1, 'b' => 1, 'c' => 1, 'd' => 1, 'e' => 1, 'f' => 1, 'g' => 1, 'h' => 1, 'i' => 1, 'j' => 1, 'k' => 1, 'l' => 1, 'm' => 1, 'n' => 1, 'o' => 1, 'p' => 1, 'q' => 1, 'r' => 1, 's' => 1, 't' => 1, 'u' => 1, 'v' => 1, 'w' => 1, 'x' => 1, 'y' => 1, 'z' => 1, '{' => 1, '|' => 1, '}' => 1, '~' => 1, '' => 1, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 0, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 2, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 3, '?' => 4, '?' => 4, '?' => 4, '?' => 4, '?' => 4, '?' => 4, '?' => 4, '?' => 4, '?' => 5, '?' => 5, '?' => 5, '?' => 5, '?' => 6, '?' => 6, '?' => 0, '?' => 0);
	
	public function getCharPositions($string, $startOffset, &$currentMap, &$ignoredChars)
	{
		if (!isset($currentMap['i']) || !isset($currentMap['p']))
		{
			$currentMap['p'] = $currentMap['i'] = array();
		}
		
		$strlen = strlen($string);
		$charPos = count($currentMap['p']);
		$foundChars = 0;
		$invalid = false;
		for ($i = 0; $i < $strlen; ++$i)
		{
			$char = $string[$i];
			$size = self::$s_length_map[$char];
			if ($size == 0)
			{
				$invalid = true;
				continue;
			}
			else
			{
				if ($invalid == true)
				{
					$currentMap['p'][$charPos + $foundChars] = $startOffset + $i;
					$currentMap['i'][$charPos + $foundChars] = true;
					++$foundChars;
					$invalid = false;
				}
				
				if ($i + $size > $strlen)
				{
					$ignoredChars = substr($string, $i);
					break;
				}
				
				for ($j = 1; $j < $size; ++$j)
				{
					$char = $string[$i + $j];
					if ($char > '' && $char < '?')
					{
					}
					else
					{
						$invalid = true;
						continue 2;
					}
				
				}
				
				$currentMap['p'][$charPos + $foundChars] = $startOffset + $i + $size;
				$i += $j - 1;
				++$foundChars;
			}
		
		}
		
		return $foundChars;
	}
	
	
	public function getMapType()
	{
		return self::MAP_TYPE_POSITIONS;
	}
	
	
	public function validateByteSequence($bytes, $size)
	{
		if ($size < 1)
		{
			return -1;
		}
		
		$needed = self::$length_map[$bytes[0]] - $size;
		return $needed > -1 ? $needed : -1;
	}
	
	
	public function getInitialByteSize()
	{
		return 1;
	}

}