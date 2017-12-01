<?php

namespace RauweBieten\HipHopGenerator;

use Faker\Provider\Base;

class Reggae extends Base
{
    use Util;

    protected static $musicReggaeRoles = [
        'King', 'Queen', 'Prince', 'Black',
    ];

    protected static $musicReggaeAdjective = [
        'African', 'Jamaican', 'Black', 'Original', 'Beautiful', 'Sweet', 'Free', 'Dynamite',
    ];

    protected static $musicReggaeNouns = [
        'Woman', 'Israel', 'Ganja', 'Africa', 'Oppression', 'Justice', 'Nature', 'Force', 'King', 'Peace', 'Babylon',
        'Lion', 'River', 'Dub', 'Bass', 'Soul', 'Rebel', 'Dread', 'Revolution', 'Roots', 'Wisdom', 'Spliff', 'Zion'
    ];

    protected static $musicReggaeVerbs = [
        'Rock', 'Wail', 'Smoke', 'Drift', 'Upset',
    ];

    public function musicReggaeRole()
    {
        return static::randomElement(self::$musicReggaeRoles);
    }

    public function musicReggaeNoun()
    {
        return static::randomElement(self::$musicReggaeNouns);
    }

    public function musicReggaeAdjective()
    {
        return static::randomElement(self::$musicReggaeAdjective);
    }

    public function musicReggaeVerb()
    {
        return static::randomElement(self::$musicReggaeVerbs);
    }

    public function musicReggaeVerbNoun()
    {
        $verb = $this->musicReggaeVerb();
        $verb = $this->conjugateContinuous($verb);
        return $verb;
    }

    protected static $artistFormats = [
        '{{musicReggaeRole}} {{firstName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}} & The {{musicReggaeVerbNoun}}',
    ];

    protected static $albumFormats = [
        '{{musicReggaeAdjective}} {{musicReggaeNoun}}',
        '{{musicReggaeAdjective}} {{musicReggaeVerbNoun}}',
        '{{musicReggaeAdjective}} & {{musicReggaeAdjective}} {{musicReggaeVerbNoun}}',
        '{{musicReggaeVerb}} the {{musicReggaeNoun}}',
    ];

    public function musicReggaeArtist()
    {
        $format = static::randomElement(self::$artistFormats);
        return $this->generator->parse($format);
    }

    public function musicReggaeAlbum()
    {
        $format = static::randomElement(self::$albumFormats);
        return $this->generator->parse($format);
    }
}