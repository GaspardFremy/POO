<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

echo getenv('DATABASE_SERVER');


$faker = Faker\Factory::create();

echo $faker->name;

echo $faker->address;

echo $faker->text;


try {
    $pdo = new PDO('mysql:host=' . getenv('DATABASE_SERVER') . ';dbname=' . getenv('DATABASE_NAME'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD'));
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

