<?php

namespace RauweBieten\HipHopGenerator;

use Faker\Provider\Base;

class HipHop extends Base
{
    protected static $roles = [
        'MC', 'M.C.', 'Emcee', 'DJ', 'D.J.', 'Deejay', 'Master', 'Grandmaster', 'Grandwizard', 'Doctor', 'Dr.',
        'Daddy', 'Mixmaster', 'Grandmixer'
    ];

    protected static $adjectives = [
        'Grand', 'Marvelous', 'Slick', 'Cool', 'Kool', 'Ruff', 'Smooth', 'Fast', 'Jazzy', 'Chubby', 'Busy', 'Funky',
        'Raw', 'Cold', 'Dark', 'Lil\'', 'Little', 'Magnetic', 'Tuff', 'Tough', 'Fantastic', 'Fat', 'Classy',
        'Fresh', 'Furious', 'Chilly', 'Vicious', 'Incredible', 'Junior', 'Master', 'Magic', 'Nasty', 'Nice',
        'Special', 'Super', 'Tricky', 'Magnificent', 'Sweaty', 'Fabulous', 'Killer', 'Flexible', 'Smelly', 'Sweet',
        'Treacherous', 'Skinny', 'Fancy', 'Hot', 'Deadly', 'Dynamite', 'Dumb', 'Smart', 'Groovy'
    ];

    protected static $abbreviationPrefixes = [
        'Double-', 'Triple-'
    ];

    protected static $musicHipHopNouns = [
        'House', 'Doctor', 'Rhythm', 'Planet', 'Music', 'Beat', 'Business', 'Technician', 'Rapper', 'D.J.',
        'Flow', 'Groove', 'Script', 'Break'
    ];

    protected static $musicHipHopVerbs = [
        'Throw', 'Live', 'Kill', 'Move', 'Rock', 'Follow', 'Bounce', 'Flip', 'Scratch'
    ];

    protected static $musicHipHopVerbins = [
        'Throwin\'', 'Livin\'', 'Killin\'', 'Movin\'', 'Rockin\'', 'Scratchin\'', 'Rappin\'', 'Breakin\''
    ];

    protected static $hiphopWhens = [
        'Forever', 'All The Time', 'To Da Break O Dawn', 'All Day', 'All Night',
    ];

    protected static $hiphopArticles = [
        'The', 'This', 'Some',
    ];

    protected static $musicHipHopPronounWithVerbs = [
        'I\'m', 'You\'re', 'We\'re', 'It\'s'
    ];

    public function musicHipHopRole()
    {
        return static::randomElement(self::$roles);
    }

    public function musicHipHopAdjective()
    {
        return static::randomElement(self::$adjectives);
    }

    public function musicHipHopPrefixedAbbreviation()
    {
        return static::randomElement(self::$abbreviationPrefixes) . $this->generator->randomElement(range('A', 'Z'));
    }

    public function musicHipHopAbbreviation()
    {
        return implode('', $this->generator->randomElements(range('A', 'Z'), $this->generator->numberBetween(1, 2)));
    }

    public function musicHipHopNoun()
    {
        return static::randomElement(self::$musicHipHopNouns);
    }

    public function musicHipHopVerb()
    {
        return static::randomElement(self::$musicHipHopVerbs);
    }

    public function musicHipHopVerbins()
    {
        return static::randomElement(self::$musicHipHopVerbins);
    }

    public function musicHipHopWhen()
    {
        return static::randomElement(self::$hiphopWhens);
    }

    public function musicHipHopArticle()
    {
        return static::randomElement(self::$hiphopArticles);
    }

    public function musicHipHopPronounWithVerb()
    {
        return static::randomElement(self::$musicHipHopPronounWithVerbs);
    }

    protected static $artistFormats = [
        '{{musicHipHopRole}} {{firstName}}',
        '{{musicHipHopRole}} {{musicHipHopAbbreviation}}',
        '{{musicHipHopRole}} {{musicHipHopPrefixedAbbreviation}}',

        '{{firstName}} {{musicHipHopAbbreviation}}',
        '{{firstName}} {{musicHipHopPrefixedAbbreviation}}',

        '{{musicHipHopAdjective}} {{firstName}}',
        '{{musicHipHopAdjective}} {{musicHipHopAbbreviation}}',
        '{{musicHipHopAdjective}} {{musicHipHopPrefixedAbbreviation}}',

        '{{musicHipHopRole}} {{musicHipHopAdjective}} {{firstName}}',
        '{{musicHipHopPrefixedAbbreviation}} {{firstName}}',
    ];

    public function musicHipHopArtist()
    {
        $format = static::randomElement(self::$artistFormats);
        return $this->generator->parse($format);
    }

    protected static $albumFormats = [
        '{{musicHipHopVerb}} {{musicHipHopAdjective}}',                            // get funky
        '{{musicHipHopAdjective}} {{musicHipHopNoun}}',                                       // Funky Beat
        '{{musicHipHopArticle}} {{musicHipHopAdjective}} {{musicHipHopNoun}}',                     // The Funky Beat
        '{{musicHipHopVerb}} The {{musicHipHopNoun}}',                                        // Throw The Beat
        '{{musicHipHopAdjective}} & {{musicHipHopAdjective}}',                                // Funky & Deadly
        '{{musicHipHopAdjective}}, {{musicHipHopAdjective}} & {{musicHipHopAdjective}}',           // Funky, Cool & Deadly
        '{{musicHipHopArticle}} {{musicHipHopNoun}}',                                         // the beat
        '{{musicHipHopArticle}} {{musicHipHopNoun}} is {{musicHipHopAdjective}}',                  // the beat is funky
        '{{musicHipHopArticle}} {{musicHipHopAdjective}} {{musicHipHopNoun}}',                     // the funky beat
        '{{musicHipHopPronounWithVerb}} {{musicHipHopAdjective}}',                              // i'm funky
        '{{musicHipHopPronounWithVerb}} {{musicHipHopAdjective}}, {{musicHipHopPronounWithVerb}} {{musicHipHopAdjective}}', // i'm funky, you're funky
        '{{musicHipHopPronounWithVerb}} {{musicHipHopVerbins}} {{musicHipHopAdjective}}',            // i'm rappin' funky
        '{{musicHipHopPronounWithVerb}} {{musicHipHopVerbins}} {{musicHipHopWhen}}',                 // i'm rappin' all day
        '{{musicHipHopPronounWithVerb}} {{musicHipHopArticle}} {{musicHipHopNoun}}',                 // I'm the beat
        '{{musicHipHopVerbins}} {{musicHipHopAdjective}}',                                    // rappin' funky
        '{{musicHipHopVerbins}} {{musicHipHopArticle}} {{musicHipHopNoun}}',                       // rappin' the beat
        '{{musicHipHopVerbins}} {{musicHipHopArticle}} {{musicHipHopAdjective}} {{musicHipHopNoun}}',   // rappin' the funky beat
        '{{musicHipHopVerbins}} {{musicHipHopWhen}}',                                          // rappin' all day
    ];

    public function musicHipHopAlbum()
    {
        $format = static::randomElement(self::$albumFormats);
        return $this->generator->parse($format);
    }
}