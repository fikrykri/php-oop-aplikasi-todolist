<?php

require_once '../view/ViewAddTodolist.php';
require_once '../BusinessLogic/ShowTodolist.php';
require_once '../BusinessLogic/AddTodolist.php';

addTodoList("Fikry");
addTodoList("Aziz");
addTodoList("Septian");
addTodoList("Aurel");
addTodoList("Saman");

viewAddTodoList();

showTodoList();
