<?php

/*
 * This file is part of the Geek-Zoo Projects.
 *
 * @copyright (c) 2010 Geek-Zoo Projects More info http://www.geek-zoo.com
 * @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License
 * @author xuanyan <xuanyan@geek-zoo.com>
 *
 */

define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST']);
require 'api.php';

if (isset($_POST['url'])) {
    echo SITE_URL.'/'.end(explode('/', curt::cc($_POST['url'])));
}

?>