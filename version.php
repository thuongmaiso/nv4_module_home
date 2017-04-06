<?php

/**
 * @Project NUKEVIET 4.x
 * @Author THƯƠNG MẠI SỐ VIỆT NAM (info@thuongmaiso.com.vn)
 * @Copyright (C) 2014 THƯƠNG MẠI SỐ VIỆT NAM. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 07/04/2017
 */

if (! defined('NV_ADMIN') or ! defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$module_version = array(
    'name' => 'Home Page',
    'modfuncs' => 'main',
    'is_sysmod' => 0,
    'virtual' => 1,
    'version' => '4.0.29',
    'date' => 'Friday, 07 April 2016 00:00:00 GMT',
    'author' => 'THƯƠNG MẠI SỐ VIỆT NAM (info@thuongmaiso.com.vn)',
    'note' => '',
    'uploads_dir' => array( $module_upload )
);
