<?php
// Load config
require_once 'config/config.php';
// Load helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// Autoload Core libraries 
spl_autoload_register(function($classname){
  require_once 'libraries/' . $classname . '.php';
});

// Load libraries - no longer needed due to Autoload function
// This means each new library doesn't mean another line added here
// require_once 'libraries/Core.php';
// require_once 'libraries/Database.php';
// require_once 'libraries/Controller.php';