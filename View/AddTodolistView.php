<?php

require_once __DIR__ . '/../BusinessLogic/AddTodolistLogic.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/ShowTodolistView.php';

/**
 * View to add todolist
 */
function addTodolistView(): void
{
    system('clear');
    echo "ADD TODOLIST" . PHP_EOL;
    echo "LEAVE EMPTY TO BACK" . PHP_EOL;
    
    $todo['title'] = trim(inputCli('TITLE'));
    $todo['message'] = trim(inputCli('MESSAGE'));

    if ($todo['title'] && $todo['message']) {
        addTodolist($todo);
    }

    showTodolistView();
}