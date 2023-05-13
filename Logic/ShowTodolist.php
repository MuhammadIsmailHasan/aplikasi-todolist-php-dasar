<?php

function ShowTodolist() {
    global $todoList;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL; 
    }
}