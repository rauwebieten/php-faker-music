<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;
use RauweBieten\PhpFakerMusic\HipHop;

class HipHopTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new HipHop($faker));
        $this->faker = $faker;
    }

    public function testAlbum(): void 
    {
        $this->assertNotEmpty($this->faker->musicHipHopAlbum);
        $this->assertNotEmpty($this->faker->musicHipHopAlbum());
    }

    public function testAlbumArtist(): void
    {
        $this->assertNotEmpty($this->faker->musicHipHopArtist);
        $this->assertNotEmpty($this->faker->musicHipHopArtist());
    }
}
