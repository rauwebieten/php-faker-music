<?php

namespace RauweBieten\PhpFakerMusic;

use Faker\Provider\Base;

class Classical extends Base
{
    protected static $musicClassicalInstruments = [
        'Cello', 'Piano', 'Horn', 'Violin', 'Harpsichord', 'Flute', 'Clarinet', 'Trumpet', 'Viola',
        'Percussion', 'Harp'
    ];

    protected static $musicClassicalTypes = [
        'Symphony', 'Requiem', 'Concerto', 'Suite', 'Sonata', 'Etude', 'Overture', 'Prelude'
    ];

    protected static $musicClassicalScales = [
        '', 'Major', 'Minor'
    ];

    public function musicClassicalInstrument()
    {
        return static::randomElement(self::$musicClassicalInstruments);
    }

    public function musicClassicalType()
    {
        return static::randomElement(self::$musicClassicalTypes);
    }

    public function musicClassicalScale()
    {
        return $this->generator->randomElement(range('A', 'G')) . ' ' . static::randomElement(self::$musicClassicalScales);
    }

    protected static $artistFormats = [
        '{{firstName}} {{firstName}} {{lastName}}',
    ];

    protected static $albumFormats = [
        '{{musicClassicalInstrument}} {{musicClassicalType}}',
        '{{musicClassicalInstrument}} {{musicClassicalType}} in {{musicClassicalScale}}',
        '{{musicClassicalInstrument}} {{musicClassicalType}} No. {{randomDigitNotNull}}',
        '{{musicClassicalType}} for {{musicClassicalInstrument}} and {{musicClassicalInstrument}}',
        '{{musicClassicalType}} for {{musicClassicalInstrument}} No. {{randomDigitNotNull}}',
        '{{musicClassicalType}} for {{musicClassicalInstrument}} in {{musicClassicalScale}}',
    ];

    public function musicClassicalArtist()
    {
        $format = static::randomElement(self::$artistFormats);
        return $this->generator->parse($format);
    }

    public function musicClassicalAlbum()
    {
        $format = static::randomElement(self::$albumFormats);
        return $this->generator->parse($format);
    }
}