<?php

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';
require_once __DIR__ . '/Helper/InputHelper.php';

echo "Aplikasi Todolist" . PHP_EOL;

$todolistReposiroty = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistReposiroty);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
