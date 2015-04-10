#!/usr/bin/env php
<?php

$app = require_once __DIR__ . '/application.php';

$foo = $app['foo'];

$bar = $foo->bar() ? 'true' : 'false';

echo "$bar\n";
