<?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
$routes = [];
$route      = explode('&',str_replace('r=', '', $_SERVER['QUERY_STRING']))[0]; //http://localhost/help-desk-api/index.php?r=/api/pcinfo
$method = $_SERVER['REQUEST_METHOD'];