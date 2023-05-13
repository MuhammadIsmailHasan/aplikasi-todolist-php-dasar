<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Logic/ShowTodolist.php";

ShowTodolist();

$todoList['1'] = 'belajar php';
$todoList['2'] = 'belajar javascript';
$todoList['3'] = 'belajar java';

ShowTodolist();