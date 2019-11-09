<?php
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true,
    'debug' => true,
    'whoops.editor' => 'sublime',
    "db" => [
        'driver' => 'sqlite',
        'database' => __DIR__.'/../database/database.sqlite',
        'prefix' => ''
    ],
]];
?>