<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\HipHopGenerator\Metal($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Dance($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Classical($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Reggae($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\HipHop($faker));

$output = '';

foreach (['Metal', 'Dance', 'Classical', 'Reggae', 'HipHop'] as $genre) {
    // add title
    $output.= '# '.$genre . PHP_EOL . PHP_EOL;

    // generate table header
    $output .= "Artist | Album" . PHP_EOL;
    $output .= "--- | ---" . PHP_EOL . PHP_EOL;

    // generate 100 table rows with hiphop data
    foreach (range(1, 100) as $i) {
        $output .= $faker->{"music{$genre}Artist"}() . " | " . $faker->{"music{$genre}Album"}() . PHP_EOL;
    }
}

// put contents in md file
file_put_contents(__DIR__ . '/output/example.md', $output);