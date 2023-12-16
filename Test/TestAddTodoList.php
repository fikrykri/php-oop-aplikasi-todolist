<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Fikry");
addTodoList("Aziz");
addTodoList("Septian");

var_dump($todoList);
