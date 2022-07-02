<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Andry");
addTodoList("Halomoan");
addTodoList("Ompusunggu");

var_dump($todoList);
