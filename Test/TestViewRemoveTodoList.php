<?php

require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Logic/ShowTodolist.php";

AddTodoList("belajar");
AddTodoList("ngaji");
AddTodoList("gym");
ShowTodolist();

ViewRemoveTodoList();
ShowTodolist();

ViewRemoveTodoList();
ShowTodolist();