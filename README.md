# PHP Faker music

A pop music provider for 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)

## Installation

Install with composer.  
Add to your composer.json file:

```json
{
  "require": {
    "rauwebieten/php-faker-music": "^1.0"
  }
}
```

## Usage

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Metal($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Dance($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Classical($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Reggae($faker));
$faker->addProvider(new \RauweBieten\PhpFakerMusic\HipHop($faker));

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