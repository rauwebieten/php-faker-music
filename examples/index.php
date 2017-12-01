<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\HipHopGenerator\Metal($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Dance($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Classical($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Reggae($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\HipHop($faker));

foreach (range(1,20) as $i) {
    echo $faker->musicHipHopArtist() .' - ' . $faker->musicHipHopAlbum(). PHP_EOL;
}