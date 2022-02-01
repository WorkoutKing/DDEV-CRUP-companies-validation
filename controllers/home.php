<?php
use ToDo\Task;
use ToDo\Database;


require "views/pages/home.view.php";

if(isset($_POST['submit'])) {
    $connection = Database::connect();
    $task = new Task($connection);
    $task->search($_POST);
}