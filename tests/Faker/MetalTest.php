<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;
use RauweBieten\PhpFakerMusic\Metal;

class MetalTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Metal($faker));
        $this->faker = $faker;
    }

    public function testAlbum(): void 
    {
        $this->assertNotEmpty($this->faker->musicMetalAlbum);
        $this->assertNotEmpty($this->faker->musicMetalAlbum());
    }

    public function testAlbumArtist(): void
    {
        $this->assertNotEmpty($this->faker->musicMetalArtist);
        $this->assertNotEmpty($this->faker->musicMetalArtist());
    }
}
