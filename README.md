# PHP Faker music

A pop music provider for 
[fakerphp/faker](https://fakerphp.github.io/)

[![Latest Stable Version](https://poser.pugx.org/rauwebieten/php-faker-music/v)](//packagist.org/packages/rauwebieten/php-faker-music) [![Total Downloads](https://poser.pugx.org/rauwebieten/php-faker-music/downloads)](//packagist.org/packages/rauwebieten/php-faker-music) [![Latest Unstable Version](https://poser.pugx.org/rauwebieten/php-faker-music/v/unstable)](//packagist.org/packages/rauwebieten/php-faker-music) [![License](https://poser.pugx.org/rauwebieten/php-faker-music/license)](//packagist.org/packages/rauwebieten/php-faker-music) [![Build Status](https://www.travis-ci.com/rauwebieten/php-faker-music.svg?branch=master)](https://www.travis-ci.com/rauwebieten/php-faker-music)

## Installation

Install with composer.  

```
composer require rauwebieten/php-faker-music
```

Or add directly to your composer.json file:

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

# For Classical Genre Artists & Albums
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Classical($faker));
echo $faker->musicClassicalArtist . ' - ' . $faker->musicClassicalAlbum . PHP_EOL;

# For Reggae Genre Artists & Albums
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Reggae($faker));
echo $faker->musicReggaeArtist . ' - ' . $faker->musicReggaeAlbum . PHP_EOL;

# For HipHop Genre Artists & Albums
$faker->addProvider(new \RauweBieten\PhpFakerMusic\HipHop($faker));
echo $faker->musicHipHopArtist . ' - ' . $faker->musicHipHopAlbum . PHP_EOL;

# For Metal Genre Artists & Albums
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Metal($faker));
echo $faker->musicMetalArtist . ' - ' . $faker->musicMetalAlbum . PHP_EOL;

# For Dance Genre Artists & Albums
$faker->addProvider(new \RauweBieten\PhpFakerMusic\Dance($faker));
echo $faker->musicDanceArtist . ' - ' . $faker->musicDanceAlbum . PHP_EOL;
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

To fill your project (E-Commerce, Analytics, Any) database with fake data?
See 
[fakerphp/faker](https://fakerphp.github.io/)

## LICENSE

[MIT](LICENSE)