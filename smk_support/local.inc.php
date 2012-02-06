<?php
// Copyright (c) 2012 Secure Media Keepers - All Rights Reserved.
/*
 * define: ROOT_PATH, BASE_DIR, ROOT_DIR, INCLUDE_DIR
 */
if(!strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__)))
        die('not for your consumption');

if(!defined('ROOT_PATH'))
    define('ROOT_PATH','./');


define('ROOT_DIR',
        str_replace('\\\\', '/',
                realpath(dirname(dirname(__FILE__))))."/");
define('IDIR',ROOT_DIR.'phpinc/');

?>
