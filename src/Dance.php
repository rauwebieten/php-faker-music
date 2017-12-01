<?php

namespace RauweBieten\PhpFakerMusic;

use Faker\Provider\Base;

class Dance extends Base
{
    use Util;

    protected static $musicDanceRoles = [
        'DJ', 'D.J.', 'Deejay', 'M.C.'
    ];

    protected static $musicDanceArticles = [
        'The', 'My'
    ];

    protected static $musicDanceAdjective = [
        'Hot', 'Sweaty', 'Funky', 'Groovy', 'Deep', 'Wild', 'Sexy', 'Seductive', 'Sizzling', 'Warm', 'Burning',
        'Jazzy',
    ];

    protected static $musicDanceNoun = [
        'Beach', 'Sun', 'Summer', 'Disco', 'Club', 'Groove', 'Beat', 'Love', 'Space', 'Time', 'Party',
        'Sunshine', 'Sky', 'Devotion', 'Lust', 'Passion', 'Respect', 'Emotion', 'Delight', 'Fever', 'Dancefloor',
        'House'
    ];

    protected static $musicDanceVerbs = [
        'Dance', 'Sing', 'Groove', 'Adore', 'Feel', 'Work', 'Need', 'Love', 'Spread', 'Taste', 'Spin',
        'Kiss', 'Burn', 'Touch', 'Grab', 'Start', 'Control'
    ];

    public function musicDanceRole()
    {
        return static::randomElement(self::$musicDanceRoles);
    }

    public function musicDanceArticle()
    {
        return static::randomElement(self::$musicDanceArticles);
    }

    public function musicDanceAdjective()
    {
        return static::randomElement(self::$musicDanceAdjective);
    }

    public function musicDanceNoun()
    {
        return static::randomElement(self::$musicDanceNoun);
    }

    public function musicDanceVerb()
    {
        return static::randomElement(self::$musicDanceVerbs);
    }

    public function musicDanceVerbContinuous()
    {
        $verb = $this->musicDanceVerb();
        $verb = $this->conjugateContinuous($verb);
        return $verb;
    }

    protected static $artistFormats = [
        '{{firstName}} {{lastName}}',
        '{{musicDanceRole}} {{firstName}}',
    ];

    protected static $albumFormats = [
        // the beat
        '{{musicDanceArticle}} {{musicDanceNoun}}',
        // the beat of love
        '{{musicDanceArticle}} {{musicDanceNoun}} of {{musicDanceNoun}}',
        // kiss the beat
        '{{musicDanceVerb}} {{musicDanceArticle}} {{musicDanceNoun}}',
        // kissing the beat
        '{{musicDanceVerbContinuous}} {{musicDanceArticle}} {{musicDanceNoun}}',
        // kiss the funky beat
        '{{musicDanceVerb}} {{musicDanceArticle}} {{musicDanceAdjective}} {{musicDanceNoun}}',
        // the beat is funky
        '{{musicDanceArticle}} {{musicDanceNoun}} is {{musicDanceAdjective}}',
        // the beat is grooving
        '{{musicDanceArticle}} {{musicDanceNoun}} is {{musicDanceVerbContinuous}}',
    ];

    public function musicDanceArtist()
    {
        $format = static::randomElement(self::$artistFormats);
        return $this->generator->parse($format);
    }

    public function musicDanceAlbum()
    {
        $format = static::randomElement(self::$albumFormats);
        return $this->generator->parse($format);
    }
}