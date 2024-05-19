<?php

/**
 * This code bellow is used to show detail todolist
 */
function detailTodolist(int $number): array
{
    global $todolist;

    if ($number > sizeof($todolist)) {
        return [];
    }

    if ($number <= 0) {
        return [];
    }

    return $todolist[$number];
}