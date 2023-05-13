<?php

require_once __DIR__ . "/../Logic/AddTodoList.php";

global $todoList;
var_dump($todoList);

AddTodoList("belajar php");
AddTodoList("belajar java");
AddTodoList("belajar javascript");
var_dump($todoList);