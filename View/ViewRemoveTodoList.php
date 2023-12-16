<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList()
{
  echo "MENGHAPUS TODO" . PHP_EOL;

  $pilihan = input("Nomor (x untuk batalkan)");

  $success = removeTodoList($pilihan);

  if ($pilihan == "x") {
    echo "Batal menghapus todo" . PHP_EOL;
  } else {
    if ($success) {
      echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
    } else {
      echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
    }
  }
}
