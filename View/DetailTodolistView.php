<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/DetailTodolistLogic.php';
require_once __DIR__ . '/../View/ShowTodolistView.php';

/**
 * View to show detail todolist
 */
function detailTodolistView(): void
{
    system('clear');
    echo "DETAIL TODOLIST" . PHP_EOL;

    showTodolist();

    echo PHP_EOL;
    echo "LEAVE EMPTY TO BACK" . PHP_EOL;

    $number = inputCli("SELECT NUMBER");    
    while (is_numeric($number)) {
        system('clear');

        $todo = detailTodolist($number);
        if (!$todo) {
            echo "TODOLIST NOT FOUND" . PHP_EOL;
        }
    
        echo "DETAIL TODOLIST" . PHP_EOL;
        showTodolist();

        echo PHP_EOL;
        echo $todo['title'] . PHP_EOL;
        echo $todo['message'] . PHP_EOL;

        echo PHP_EOL;
        echo "LEAVE EMPTY TO BACK" . PHP_EOL;
        $number = inputCli("SELECT NUMBER");
    }
    
    showTodolistView();
}