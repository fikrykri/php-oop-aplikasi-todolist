<?php

namespace Service {

  use Entity\Todolist;
  use Repository\TodoListRepository;

  interface TodolistService
  {
    function showTodolist(): void;

    function addTodolist(string $todo): void;

    function removeTodolist(int $number): void;
  }

  class TodolistServiceImpl implements TodolistService
  {
    private TodoListRepository $todolistRepository;

    public function __construct(TodoListRepository $todolistRepository)
    {
      $this->todolistRepository = $todolistRepository;
    }

    function showTodolist(): void
    {
      echo "TODOLIST" . PHP_EOL;

      $todolist = $this->todolistRepository->findAll();
      foreach ($todolist as $number => $value) {
        echo "$number. " . $value->getTodo() . PHP_EOL;
      }
    }

    function addTodolist(string $todo): void
    {
      $todolist = new Todolist($todo);
      $this->todolistRepository->save($todolist);
      echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
    }

    function removeTodolist(int $number): void
    {
    }
  }
}
