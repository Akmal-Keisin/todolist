<?php

require_once __DIR__ . '/../View/DetailTodolistView.php';
require_once __DIR__ . '/../View/EditTodolistView.php';
require_once __DIR__ . '/../View/RemoveTodolistView.php';
require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';
require_once __DIR__ . '/AddTodolistView.php';
require_once __DIR__ . '/../Helper/Input.php';

/**
 * View to show all todolist
 */
function showTodolistView(): void
{
    system('clear');
    showTodolist();

    echo PHP_EOL;
    echo 'MENU' . PHP_EOL;
    echo '1. ADD Todolist' . PHP_EOL;
    echo '2. DETAIL Todolist' . PHP_EOL;
    echo '3. EDIT Todolist' . PHP_EOL;
    echo '4. DELETE Todolist' . PHP_EOL;

    $input = inputCli('SELECT NUMBER');

    switch ($input) {
        case '1': 
            addTodolistView();
            break;
        case '2':
            detailTodolistView();
            break;
        case '3':
            editTodolistView();
            break;
        case '4':
            removeTodolistView();
            break;
        default :
            echo "INVALID";
    }
}