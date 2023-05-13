<?php

require_once __DIR__ . "/../Logic/ShowTodolist.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";
require_once __DIR__ . "/../Logic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";

function ViewShowTodoList () {
    global $todoList;

    while (true) {
        echo "---------------" . PHP_EOL;
        echo ":: TODOLIST ::" . PHP_EOL;
        $home = ShowTodolist();
        echo PHP_EOL . "MENU" . PHP_EOL . "1. Tambah | 2. Hapus | x. Exit" . PHP_EOL;
        $menu = Input("Pilih Menu");

        if ($menu == 1) {
            ViewAddTodoList();
        } else if ($menu == 2) {
            ViewRemoveTodoList();
        } else if ($menu == "x") {
            break;
        } else {
            echo "Menu tidak ada" . PHP_EOL;
        }
    }

}