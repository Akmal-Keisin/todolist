<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../View/ShowTodolistView.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/EditTodolistLogic.php';
require_once __DIR__ . '/../Helper/Input.php';

/**
 * View to edit todolist
 */
function editTodolistView(): void
{
    $loop = true;
    while($loop) {
        system('clear');
        echo "EDIT TODOLIST" . PHP_EOL;
    
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
    
        echo PHP_EOL;
        echo $todo['title'] . PHP_EOL;
        echo $todo['message'] . PHP_EOL;
        echo PHP_EOL;

        $newTitle = trim(inputCli('NEW TITLE'));
        $newMessage = trim(inputCli('NEW MESSAGE'));
        
        editTodolist($number, $newTitle, $newMessage);
        $loop = true;
    }
}