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
    private array $todolist = array();

    function save(Todolist $todolist): void
    {
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
