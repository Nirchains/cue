<?php defined('_JEXEC') or die(file_get_contents('index.html'));
/**
 * @package   Fox Contact for Joomla
 * @copyright Copyright (c) 2010 - 2015 Demis Palma. All rights reserved.
 * @license   Distributed under the terms of the GNU General Public License GNU/GPL v3 http://www.gnu.org/licenses/gpl-3.0.html
 * @see       Documentation: http://www.fox.ra.it/forum/2-documentation.html
 */

class FoxHtmlTemplateHelper
{
	
	public static function renderTemplate($root, $template)
	{
		ob_start();
		try
		{
			require "{$root}/components/com_foxcontact/layouts/{$template}.php";
		}
		catch (Exception $e)
		{
			ob_get_clean();
			throw $e;
		}
		
		return trim(ob_get_clean());
	}

}