<?php

function RemoveTodoList (int $number) {
    global $todoList;

    if ($number <= sizeof($todoList)) {
        $todoRemoved = $todoList[$number];
        for ($i= $number; $i < sizeof($todoList); $i++) { 
            $todoList[$i] = $todoList[$i + 1];
        }
        unset($todoList[sizeof($todoList)]);
        echo "Berhasil menghapus todo nomor $number yakni $todoRemoved" . PHP_EOL;
    } else {
        echo "Todo nomor $number tidak ada!" . PHP_EOL;
    }
}