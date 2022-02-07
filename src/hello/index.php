<?php

const BR = '<br>';

$user = 'root';
$pass = 'secret';

try {
    $pdo = new PDO('mysql:host=mysql;dbname=tets', $user, $pass);
} catch (Throwable $exception) {
    echo $exception->getMessage() . BR;
}

echo 'Successfully connect to DB' . BR;

$redis = new Redis();
try {
    $redis->connect('redis_do', 6379);
} catch (Throwable $exception) {
    echo $exception->getMessage() . BR;
}

echo 'Successfully connect to Redis' . BR;