<?php

require_once __DIR__ . '/../BusinessLogic/AddTodolistLogic.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/ShowTodolistView.php';

function addTodolistView(): void
{
    system('clear');
    echo "TAMBAH TODOLIST" . PHP_EOL;
    
    $todo['title'] = trim(inputCli('TITLE'));
    $todo['message'] = trim(inputCli('MESSAGE'));
    addTodolist($todo);

    showTodolistView();
}