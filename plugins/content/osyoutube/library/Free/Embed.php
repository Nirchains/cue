<?php
/**
 * @package   OSYouTube
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright 2016 Joomlashack.com, All rights reserved
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

namespace Alledia\OSYouTube\Free;

use Joomla\Registry\Registry;

defined('_JEXEC') or die();

abstract class Embed
{
    /**
     * @param Registry $params
     * @param array    $query
     * @param string   $videoCode
     *
     * @return array
     */
    protected static function buildUrlQuery($params, $query, $videoCode = null)
    {
        // Converts the query in an associative array
        $queryAssoc = array();

        if (!empty($query)) {
            foreach ($query as $key => $value) {
                if (is_numeric($key)) {
                    $value = explode('=', $value);

                    if (!isset($value[1])) {
                        $queryAssoc[$value[0]] = 'true';
                    } else {
                        $queryAssoc[$value[0]] = $value[1];
                    }
                }
            }
        }

        return $queryAssoc;
    }

    /**
     * @param Registry $params
     * @param string   $videoCode
     * @param array    $query
     * @param string   $hash
     *
     * @return string
     */
    public static function getUrl($params, $videoCode, $query = array(), $hash = null)
    {
        $url = 'https://www.youtube.com/embed/' . $videoCode . '?wmode=transparent';

        $query = static::buildUrlQuery($params, $query, $videoCode);

        if (!empty($query)) {
            $url .= '&' . http_build_query($query);
        }

        if (!empty($hash)) {
            $url .= $hash;
        }

        return $url;
    }
}
