<?php
/*
 * This file is part of the Geek-Zoo Projects.
 *
 * @copyright (c) 2010 Geek-Zoo Projects More info http://www.geek-zoo.com
 * @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License
 * @author quqiang <quqiang@geek-zoo.com>
 *
 */

// echo curt::cc('http://www.google.com');
// echo curt::preView('http://curt.cc/akz8b');

class curt
{
    const CURT_URL = 'http://curt.cc/service/generator.php?url=';
    const VIEW_URL = 'http://curt.cc/service/previewer.php?url=';

    public static function cc($url)
    {
        $url = self::CURT_URL.urlencode($url);
        $result = @json_decode(@file_get_contents($url), true);

        if (isset($result['url'])) {
            return $result['url'];
        }

        return '';
    }

    public static function preView($url)
    {
        $url = self::VIEW_URL.urlencode($url);
        $result = @json_decode(@file_get_contents($url), true);

        if (isset($result['url'])) {
            return $result['url'];
        }

        return '';
    }
}


?>