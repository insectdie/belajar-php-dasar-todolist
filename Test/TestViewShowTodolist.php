<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Andry");
addTodoList("Halomoan");
addTodoList("Ompusunggu");

viewShowTodoList();
