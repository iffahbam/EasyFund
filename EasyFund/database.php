<?php

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', '');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'easyfund'); 

date_default_timezone_set('UTC');

// Connection
$mysqli = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

if (!$mysqli) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>
