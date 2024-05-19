<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../BusinessLogic/EditodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/AddTodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodolistLogic.php';

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

showTodolist();
editTodolist(2, 'Todolist 2 Test', 'Todolist 2 Message Test');
showTodolist();