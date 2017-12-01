<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Classical($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Reggae($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\HipHop($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Metal($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Dance($faker));

echo $faker->musicClassicalArtist() . ' - ' . $faker->musicClassicalAlbum() . PHP_EOL;
echo $faker->musicReggaeArtist() . ' - ' . $faker->musicReggaeAlbum() . PHP_EOL;
echo $faker->musicHipHopArtist() . ' - ' . $faker->musicHipHopAlbum() . PHP_EOL;
echo $faker->musicMetalArtist() . ' - ' . $faker->musicMetalAlbum() . PHP_EOL;
echo $faker->musicDanceArtist() . ' - ' . $faker->musicDanceAlbum() . PHP_EOL;