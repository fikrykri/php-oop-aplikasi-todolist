<?php

namespace View {

  use Helper\InputHelper;
  use Service\TodolistService;

  class TodolistView
  {
    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
      $this->todolistService = $todolistService;
    }

    function showTodolist(): void
    {
      while (true) {
        $this->todolistService->showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Hapus Todo" . PHP_EOL;

        $pilihan = InputHelper::input("Pilih");

        if ($pilihan == 1) {
          $this->addTodolist();
        } else if ($pilihan == 2) {
          $this->removeTodolist();
        } elseif ($pilihan == "x") {
          break;
        } else {
          echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
      }

      echo "Sampai Jumpa Lagi" . PHP_EOL;
    }

    function addTodolist(): void
    {
      echo "MENAMBAH TODO" . PHP_EOL;

      $todo = InputHelper::input("Todo (x untuk batal) ");

      if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
      } else {
        $this->todolistService->addTodolist($todo);
      }
    }

    function removeTodolist(): void
    {
    }
  }
}
