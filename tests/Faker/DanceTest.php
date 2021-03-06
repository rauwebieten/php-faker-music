<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;
use RauweBieten\PhpFakerMusic\Dance;

class DanceTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Dance($faker));
        $this->faker = $faker;
    }

    public function testAlbumArtist(): void
    {
        $this->assertNotEmpty($this->faker->musicDanceArtist);
    }
}
