<?php 

$router->define([
    '/'=>'controllers/home.php',
    '/add-task'=>'controllers/add-task.php',
    '/delete-task'=>'controllers/delete-task.php',
    '/set-complete'=>'controllers/set-complete.php',
    '/table'=>'controllers/table.php',
    '404'=>'controllers/404.php',
    '/info' => 'controllers/info.php',

]);