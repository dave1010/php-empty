<?php

$app = require_once __DIR__ . '/../application.php';

$foo = $app['foo'];

$bar = $foo->bar() ? 'true' : 'false';


$uri = $_SERVER['REQUEST_URI'];
echo '<h1>' . $bar . ' ' . htmlspecialchars($uri) . '</h1>';
