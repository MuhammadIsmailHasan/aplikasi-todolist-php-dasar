<?php

require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/Logic/ShowTodolist.php";
require_once __DIR__ . "/Logic/AddTodoList.php";
require_once __DIR__ . "/Logic/RemoveTodoList.php";
require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";

echo "APLIKASI TODOLIST" . PHP_EOL;
ViewShowTodoList();