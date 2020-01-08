<?php
$user = getenv('USERNAME');
$pass = getenv('PASSWORD');
$data = getenv('DATABASE');

// DB Params
define('DB_HOST', 'remotemysql.com');
define('DB_USER', $user);
define('DB_PASS', $pass);
define('DB_NAME', $data);
// App root 
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'https://share-posts-php-mvc.herokuapp.com');
//Site name
define('SITENAME', 'SharePosts');
// App version
define('APPVERSION', '1.0.0');