<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Metal($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Dance($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Classical($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Reggae($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\HipHop($faker));

foreach (range(1,20) as $i) {
    echo $faker->musicHipHopArtist() .' - ' . $faker->musicHipHopAlbum(). PHP_EOL;
}