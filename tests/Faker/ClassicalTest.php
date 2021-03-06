<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;
use RauweBieten\PhpFakerMusic\Classical;

class ClassicalTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Classical($faker));
        $this->faker = $faker;
    }

    public function testAlbum(): void 
    {
        $this->assertNotEmpty($this->faker->musicClassicalAlbum);
        $this->assertNotEmpty($this->faker->musicClassicalAlbum());
    }

    public function testAlbumArtist(): void
    {
        $this->assertNotEmpty($this->faker->musicClassicalArtist);
        $this->assertNotEmpty($this->faker->musicClassicalArtist());
    }
}
