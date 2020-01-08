<?php
$host= getenv('DB_HOST');
$user= getenv('DB_USER');
$pass= getenv('DB_PASS');
$name= getenv('DB_NAME');

// DB Params
define('DB_HOST', $host);
define('DB_USER', $user);
define('DB_PASS', $pass);
define('DB_NAME', $name);
// App root 
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'https://share-posts-php-mvc.herokuapp.com');
//Site name
define('SITENAME', 'SharePosts');
// App version
define('APPVERSION', '1.0.0');