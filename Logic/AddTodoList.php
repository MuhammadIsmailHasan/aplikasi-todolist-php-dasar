<?php

function AddTodoList (string $todo) {
    global $todoList;

    if (!empty($todoList)) {
        $todoList[sizeof($todoList) + 1] = $todo;
    } else {
        $todoList['1'] = $todo;
    }

    if (in_array($todo, $todoList)) {
        echo "Berhasil menambahkan data!" . PHP_EOL;
    } else {
        echo "Gagal menambahkan data!" . PHP_EOL;
    }

}