<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;
use RauweBieten\PhpFakerMusic\Reggae;

class ReggaeTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Reggae($faker));
        $this->faker = $faker;
    }

    public function testAlbumArtist(): void
    {
        $this->assertNotEmpty($this->faker->musicReggaeArtist);
    }
}
