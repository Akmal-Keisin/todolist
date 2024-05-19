<?php

require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';
require_once __DIR__ . '/../Model/Todolist.php';

$todolist = [
    [
        'title' => 'Todolist 1',
        'message' => 'Test Todolist 1'
    ],
    [
        'title' => 'Todolist 2',
        'message' => 'Test Todolist 2'
    ],
    [
        'title' => 'Todolist 3',
        'message' => 'Test Todolist 3'
    ],
];

showTodolist();