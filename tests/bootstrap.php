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
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
], 'default');

$capsule->setAsGlobal();


$sql = \file_get_contents(__DIR__ . '/../sql/localhost.sql');

Capsule::connection()->getPdo()->exec($sql);
