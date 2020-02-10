<?php

ini_set('display_errors',1);


define('ADMIN_PATH','admin');
define('ADMIN_SCRIPT_PATH', ADMIN_PATH.'/scripts');



require_once 'config/database.php';
require_once ADMIN_SCRIPT_PATH.'/read.php'; 
require_once ADMIN_SCRIPT_PATH.'/signup.php';
require_once ADMIN_SCRIPT_PATH.'/functions.php';
?>