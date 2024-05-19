<?php

require_once __DIR__ . '/../Model/Todolist.php';
require_once __DIR__ . '/../BusinessLogic/DetailTodolistLogic.php';
require_once __DIR__ . '/../BusinessLogic/AddTodolistLogic.php';

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

var_dump(detailTodolist(1));
var_dump(detailTodolist(0));
var_dump(detailTodolist(4));