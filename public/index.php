<?php

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;





$model = new \App\Model\Model();

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

$host = getenv('DATABASE_SERVER');
$dbname = getenv('DATABASE_NAME');
$user = getenv('DATABASE_USER');
$password = getenv('DATABASE_PASSWORD');


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->query("SELECT * FROM users");
    $r = $query->fetchAll();

    foreach ($r as $item) {
        $user = new \App\Model\User($item['first_name'],$item['last_name'],$item['created_at'],$item['last_login'],);
        echo $user->getFullName();
    }
} catch (PDOException $e) {
     echo 'no co : ' . $e;
}




