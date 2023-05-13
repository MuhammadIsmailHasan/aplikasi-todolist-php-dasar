<?php

function AddTodoList (string $todo) : bool {
    global $todoList;

    if (!empty($todoList)) {
        $todoList[sizeof($todoList) + 1] = $todo;
    } else {
        $todoList['1'] = $todo;
    }

    if (in_array($todo, $todoList)) {
        return true;
    } else {
        return false;
    }

}