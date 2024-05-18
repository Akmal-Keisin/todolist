<?php

/**
 * This code bellow is used to remove todolist
 */
function removeTodolist(int $number): bool
{
    global $todolist;
    
    if ($number > sizeof($todolist)) {
        return false;
    }

    if ($number <= 0) {
        return false;
    }

    
    for ($i = $number; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[sizeof($todolist)]);

    return true;
}
