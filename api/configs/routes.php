<?php

$routes['/api/set']['GET']       = './set/get.php';  
$routes['/api/set']['POST']      = './set/post.php'; 

$routes['/api/member']['PUT']       = './members/put.php';  
$routes['/api/member']['DELETE']    = './members/delete.php';  

$routes['/api/pcinfo']['POST']      = './account/login.php';  
$routes['/api/pcinfo']['GET']       = './pcinfo/get.php';  
$routes['/api/pcinfo']['POST']      = './account/logout.php';  