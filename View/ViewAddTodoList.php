<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";

function ViewAddTodoList() {
    echo "MENU TAMBAH | x untuk kembali" . PHP_EOL;
    $input = Input("Masukan todo");

    if ($input == "x") {
        echo "Batal menambah" . PHP_EOL;
    } else {
        AddTodoList($input);
    }
}