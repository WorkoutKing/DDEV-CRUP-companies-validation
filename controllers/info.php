<?php

use ToDo\Task;
use ToDo\Database;
use ToDo\Request;
$connection=Database::connect();
$tasks=new Task($connection); 
$id = intval(basename(Request::uri()));

require "views/pages/info.view.php";