<?php

require_once __DIR__ . '/../View/RemoveTodolistView.php';
require_once __DIR__ . '/../BusinessLogic/AddTodolistLogic.php';
require_once __DIR__ . '/../Model/Todolist.php';

addTodolist([
    'title' => 'Todolist 1',
    'message' => 'Test Todolist 1'
]);
addTodolist([
    'title' => 'Todolist 2',
    'message' => 'Test Todolist 2'
]);
addTodolist([
    'title' => 'Todolist 3',
    'message' => 'Test Todolist 3'
]);
removeTodolistView();