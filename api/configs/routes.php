<?php

$routes['/api/member']['GET']       = './members/get.php';  
$routes['/api/member']['POST']      = './members/post.php'; 
$routes['/api/member']['PUT']       = './members/put.php';  
$routes['/api/member']['DELETE']    = './members/delete.php';  

$routes['/api/pcinfo']['POST']      = './account/login.php';  
$routes['/api/pcinfo']['GET']       = './pcinfo/get.php';  
$routes['/api/pcinfo']['POST']      = './account/logout.php';  