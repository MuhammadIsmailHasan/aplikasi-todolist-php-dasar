<?php

function ShowTodolist() {
    global $todoList;
    
    if (!empty($todoList)) {
        foreach ($todoList as $number => $value) {
            echo "$number. $value" . PHP_EOL; 
        }    
    } else {
        echo "Belum ada todolist" . PHP_EOL;
    }
}