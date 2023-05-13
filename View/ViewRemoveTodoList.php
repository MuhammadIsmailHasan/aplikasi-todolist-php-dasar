<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Logic/RemoveTodoList.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";

function ViewRemoveTodoList () {
    echo "MENU REMOVE | x untuk kembali" . PHP_EOL;
    $input = Input("Masukan nomor todo");

    if ($input == "x") {
        echo "Batal menghapus" . PHP_EOL;
    } else {
        $remove = RemoveTodoList($input);
        if (!$remove) {
            echo "Gagal menghapus" . PHP_EOL;
        }
    }
}