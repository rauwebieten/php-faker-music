# PHP Faker music

A pop music provider for 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)

## Usage

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\HipHopGenerator\Metal($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Dance($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Classical($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\Reggae($faker));
$faker->addProvider(new \RauweBieten\HipHopGenerator\HipHop($faker));

echo $faker->musicHipHopArtist() .' - ' . $faker->musicHipHopAlbum();
```

See the examples folder for more information

## Example result

See [examples/output/example.md](examples/output/example.md) for
- 100 generated metal artists/albums
- 100 generated dance artists/albums
- 100 generated classical artists/albums
- 100 generated reggae artists/albums
- 100 generated hiphop artists/albums

## Why do you needs this?

To fill a e-commerce database with fake data?
See 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)