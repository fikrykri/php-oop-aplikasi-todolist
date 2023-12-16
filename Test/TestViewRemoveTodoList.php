<?php

require_once '../Model/TodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../View/ViewRemoveTodoList.php';

addTodoList("Fikry");
addTodoList("Aziz");
addTodoList("Septian");
addTodoList("Aurel");
addTodoList("Saman");

showTodoList();

viewRemoveTodoList();

showTodoList();
