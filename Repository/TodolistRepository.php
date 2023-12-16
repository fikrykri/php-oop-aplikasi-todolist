<?php

namespace Repository {

  use Entity\Todolist;

  interface TodoListRepository
  {
    function save(Todolist $todolist): void;

    function remove(int $number): bool;

    function findAll(): array;
  }

  class TodolistRepositoryImpl implements TodoListRepository
  {
    public array $todolist = array();

    function save(Todolist $todolist): void
    {
      $number = sizeof($this->todolist) + 1;

      $this->todolist[$number] = $todolist;
    }

    function remove(int $number): bool
    {
      $todolist = $this->todolist;
      if ($number > sizeof($todolist)) {
        return false;
      }

      for ($i = $number; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
      }

      unset($todoList[sizeof($todolist)]);

      return true;
    }

    function findAll(): array
    {
      return $this->todolist;
    }
  }
}
