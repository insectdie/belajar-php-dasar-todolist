<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Andry");
addTodoList("Halomoan");
addTodoList("Ompusunggu");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(5);
var_dump($success);
