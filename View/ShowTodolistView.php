<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';
require_once __DIR__ . '/AddTodolistView.php';
require_once __DIR__ . '/../Helper/Input.php';

function showTodolistView(): void
{
    system('clear');
    showTodolist();

    echo PHP_EOL;
    echo 'MENU' . PHP_EOL;
    echo '1. Tambah Todolist' . PHP_EOL;
    echo '2. Edit Todolist' . PHP_EOL;
    echo '3. Hapus Todolist' . PHP_EOL;

    $input = inputCli('Pilih Angka');

    switch ($input) {
        case '1': 
            addTodolistView();
            break;
        case '2':
            break;
        case '3':
            break;
        default :
            echo "Invalid";
    }
}