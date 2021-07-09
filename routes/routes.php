<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', function() {
    return 'Hello world';
});

SimpleRouter::get('/todo/create',
    [\Pedruhbl\Todo\Code\Read\ReadController::class, 'getAllTodos']);