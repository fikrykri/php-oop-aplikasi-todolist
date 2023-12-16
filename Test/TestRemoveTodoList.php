<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Fikry");
addTodoList("Aziz");
addTodoList("Septian");
addTodoList("Aurel");
addTodoList("Saman");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(5);
var_dump($success);

showTodoList();
