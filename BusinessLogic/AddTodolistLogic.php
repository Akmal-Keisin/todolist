<?php

/**
 * This code bellow is used to add todolist
 */
function addTodolist($todo): void
{
    global $todolist;
    $number = sizeof($todolist) + 1;
    $todolist[$number] = $todo;
}