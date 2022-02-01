<?php
use ToDo\Database;
use ToDo\Task;
use ToDo\Validation;
$validationErrors = [];
if(isset($_POST['save'])){
    $validationErrors = Validation::validate($_POST);

    if(empty($validationErrors)) {
        $task = new Task(Database::connect());
        $task->createTask($_POST);
    }
}
require 'views/pages/add-task.view.php';