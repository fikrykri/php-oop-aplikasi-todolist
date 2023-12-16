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
      return true;
    }

    function findAll(): array
    {
      return $this->todolist;
    }
  }
}
