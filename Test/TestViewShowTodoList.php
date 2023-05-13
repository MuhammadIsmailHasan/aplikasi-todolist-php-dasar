<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";

AddTodoList("belajar");
AddTodoList("ngaji");
AddTodoList("gym");

ViewShowTodoList();