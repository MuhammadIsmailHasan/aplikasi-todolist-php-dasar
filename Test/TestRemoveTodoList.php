<?php
require_once __DIR__ . "/../Logic/RemoveTodoList.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";

AddTodoList("belajar php");
AddTodoList("belajar java");
AddTodoList("belajar javascript");
AddTodoList("belajar nodejs");
AddTodoList("belajar react");
var_dump($todoList);

RemoveTodoList(2);
var_dump($todoList);

RemoveTodoList(4);
var_dump($todoList);

RemoveTodoList(4);