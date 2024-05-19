<?php

/**
 * This code bellow is used to edit todolist
 */
function editTodolist(int $number, string $title, string $message): bool
{
    global $todolist;

    if ($number > sizeof($todolist)) {
        return false;
    }

    if ($number <= 0) {
        return false;
    }

    $todolist[$number]['title'] = $title;
    $todolist[$number]['message'] = $message;
    return true;
}