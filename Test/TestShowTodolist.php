<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Logic/ShowTodolist.php";

$todoList['1'] = 'belajar php';
$todoList['2'] = 'belajar javascript';
$todoList['3'] = 'belajar java';

ShowTodolist();