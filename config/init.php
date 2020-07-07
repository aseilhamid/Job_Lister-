<?php
//start session
session_start();

//include config
require_once 'config.php';

// include helper
require_once 'helpers/system_helper.php';

//Auto loader

function __autoload($class_name){
    require_once 'lib/'. $class_name . '.php';
}

