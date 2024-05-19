<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/DetailTodolistLogic.php';

/**
 * View to remove todolist
 */
function removeTodolistView(): void
{    
    $loop = true;
    while($loop) {
        system('clear');
        echo "REMOVE TODOLIST" . PHP_EOL;
    
        showTodolist();
        
        echo PHP_EOL;
        echo "LEAVE EMPTY TO BACK" . PHP_EOL;
        
        $number = inputCli("SELECT NUMBER");
        if (!is_numeric($number)) {
            showTodolistView();
        };

        $todo = detailTodolist($number);
        if (!$todo) {
            echo "TODOLIST NOT FOUND" . PHP_EOL;
        }
    
        removeTodolist($number);
        $loop = true;
    }
}