<?php

function RemoveTodoList (int $number) : bool {
    global $todoList;

    if ($number <= sizeof($todoList)) {

        for ($i= $number; $i < sizeof($todoList); $i++) { 
            $todoList[$i] = $todoList[$i + 1];
        }
        unset($todoList[sizeof($todoList)]);
        return true;
    } else {
        return false;
    }
}