<?php

define('PRODUCTION', $_SERVER['SERVER_NAME'] == 'testing.ttvone.com');

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

$routes = [];
$route  = str_replace('/backend', '', $_SERVER['PATH_INFO']);
$method = $_SERVER['REQUEST_METHOD'];