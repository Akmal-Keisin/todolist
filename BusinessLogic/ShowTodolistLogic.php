<?php

/**
 * This code bellow is used to show list of all todo
 */
function showTodolist(): void
{
    global $todolist;
    echo "TODOLIST :" . PHP_EOL;

    foreach ($todolist as $key => $todo) {
        echo  "$key. " . $todo['title'] . PHP_EOL;
    }
}
