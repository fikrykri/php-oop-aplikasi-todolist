<?php

require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Entity/Todolist.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
  $todolistRepository = new TodolistRepositoryImpl();
  $todolistRepository->todolist[1] = "Belajar  PHP";
  $todolistRepository->todolist[2] = "Belajar  PHP OOP";
  $todolistRepository->todolist[3] = "Belajar  PHP Database";

  $todolistService = new TodolistServiceImpl($todolistRepository);

  $todolistService->showTodolist();
}

testShowTodolist();
