<?php

namespace RauweBieten\HipHopGenerator;

use Faker\Provider\Base;

class HipHop extends Base
{
    use Util;

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
        'Throw', 'Live', 'Kill', 'Move', 'Rock', 'Follow', 'Bounce', 'Flip', 'Scratch', 'Rap', 'Break', 'Rock',
    ];

    protected static $musicHipHopWhens = [
        'Forever', 'All The Time', 'To Da Break O Dawn', 'All Day', 'All Night',
    ];

    protected static $musicHipHopArticles = [
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

    public function musicHipHopVerbContinuous()
    {
        $verb = static::randomElement(self::$musicHipHopVerbs);
        $verb = $this->conjugateContinuous($verb);
        $verb = preg_replace('/ing$/', "in'", $verb);
        return $verb;
    }

    public function musicHipHopWhen()
    {
        return static::randomElement(self::$musicHipHopWhens);
    }

    public function musicHipHopArticle()
    {
        return static::randomElement(self::$musicHipHopArticles);
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
        // get funky
        '{{musicHipHopVerb}} {{musicHipHopAdjective}}',
        // Funky Beat
        '{{musicHipHopAdjective}} {{musicHipHopNoun}}',
        // The Funky Beat
        '{{musicHipHopArticle}} {{musicHipHopAdjective}} {{musicHipHopNoun}}',
        // Throw The Beat
        '{{musicHipHopVerb}} The {{musicHipHopNoun}}',
        // Funky & Deadly
        '{{musicHipHopAdjective}} & {{musicHipHopAdjective}}',
        // Funky, Cool & Deadly
        '{{musicHipHopAdjective}}, {{musicHipHopAdjective}} & {{musicHipHopAdjective}}',
        // the beat
        '{{musicHipHopArticle}} {{musicHipHopNoun}}',
        // the beat is funky
        '{{musicHipHopArticle}} {{musicHipHopNoun}} is {{musicHipHopAdjective}}',
        // the funky beat
        '{{musicHipHopArticle}} {{musicHipHopAdjective}} {{musicHipHopNoun}}',
        // i'm funky
        '{{musicHipHopPronounWithVerb}} {{musicHipHopAdjective}}',
        // i'm funky, you're funky
        '{{musicHipHopPronounWithVerb}} {{musicHipHopAdjective}}, {{musicHipHopPronounWithVerb}} {{musicHipHopAdjective}}',
        // i'm rappin' funky
        '{{musicHipHopPronounWithVerb}} {{musicHipHopVerbContinuous}} {{musicHipHopAdjective}}',
        // i'm rappin' all day
        '{{musicHipHopPronounWithVerb}} {{musicHipHopVerbContinuous}} {{musicHipHopWhen}}',
        // I'm the beat
        '{{musicHipHopPronounWithVerb}} {{musicHipHopArticle}} {{musicHipHopNoun}}',
        // rappin' funky
        '{{musicHipHopVerbContinuous}} {{musicHipHopAdjective}}',
        // rappin' the beat
        '{{musicHipHopVerbContinuous}} {{musicHipHopArticle}} {{musicHipHopNoun}}',
        // rappin' the funky beat
        '{{musicHipHopVerbContinuous}} {{musicHipHopArticle}} {{musicHipHopAdjective}} {{musicHipHopNoun}}',
        // rappin' all day
        '{{musicHipHopVerbContinuous}} {{musicHipHopWhen}}',
    ];

    public function musicHipHopAlbum()
    {
        $format = static::randomElement(self::$albumFormats);
        return $this->generator->parse($format);
    }
}