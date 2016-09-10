<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../config.php';

$capsule = new Capsule();
$capsule->addConnection([
    'driver' => DB_TYPE,
    'host' => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASS,
], 'default');

$capsule->setAsGlobal();
