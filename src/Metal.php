<?php

namespace RauweBieten\HipHopGenerator;

use Faker\Provider\Base;

class Metal extends Base
{
    protected static $musicMetalArticles = [
        'The', 'My'
    ];

    protected static $musicMetalAdjective = [
        'Dark', 'Evil', 'Dead', 'Rotten', 'Black', 'Fallen', 'Damned', 'Morbid', 'Savage',
        'Lunatic', 'Hollow', 'Creepy', 'Possessed', 'Bloody', 'Medieval', 'Profane', 'Terminal',
        'Unholy', 'Iron', 'Bewitched', 'Vulgar', 'Ancient', 'Haunted', 'Decapitated', 'Divine', 'Vengeful',
        'Bestial', 'Nuclear', 'Necrophobic', 'Heavy', 'Sadistic', 'Brutal', 'Rotting', 'Desolate', 'Astral',
        'Sinister', 'Gloomy', 'Hidden', 'Buried', 'Cold', 'Deadly', 'Deceased', 'Foul', 'Frozen', 'Grim', 'Insolent',
        'Repulsive', 'Shocking', 'Undead', 'Vile',
    ];

    protected static $musicMetalNoun = [
        'Funeral', 'Sabbath', 'Grave', 'Church', 'Hell', 'Obituary', 'Satan', 'Lord', 'Gate', 'Coffin',
        'Witch', 'Murder', 'Creeper', 'Angel', 'Demon', 'Corpse', 'Annihilation', 'Cannibal', 'Jesus', 'Judas',
        'Destroyer', 'Goat', 'Feast', 'Carnage', 'Assault', 'Slaughter', 'Flesh', 'Doom', 'Throne', 'Lord',
        'Burial', 'Hound', 'Zombie', 'Shrine', 'Lobotomy', 'Cadaver', 'Death', 'Witchcraft', 'Blood', 'Scorn',
        'Parasite', 'King', 'Torture', 'Skull', 'Cemetary', 'Throat', 'Garden', 'Vomit', 'Conspiracy', 'Mass',
        'Mercy', 'Fate', 'Carcass', 'Gore', 'Ritual', 'Priest', 'Pentagram', 'Hammer', 'Saint', 'Terror', 'Castle',
        'Poison', 'Atrocity', 'Ghoul', 'Nightmare', 'Beast',
    ];

    protected static $musicMetalVerbs = [
        'Kill', 'Slaughter', 'Embrace', 'Decapitate', 'Hail', 'Oppress', 'Suffer', 'Obey', 'Mutilate',
        'Torture', 'Slay', 'Purge', 'Assault', 'Blast', 'Hunt', 'Destroy', 'Pester', 'Deface', 'Murder', 'Butcher'
    ];

    public function musicMetalArticle()
    {
        return static::randomElement(self::$musicMetalArticles);
    }

    public function musicMetalAdjective()
    {
        return static::randomElement(self::$musicMetalAdjective);
    }

    public function musicMetalNoun()
    {
        return static::randomElement(self::$musicMetalNoun);
    }

    public function musicMetalVerb()
    {
        return static::randomElement(self::$musicMetalVerbs);
    }

    public function musicMetalVerbContinuous()
    {
        $verb = $this->musicMetalVerb();
        $verb = str_replace('eing', 'ing', $verb . 'ing');
        return $verb;
    }

    protected static $artistFormats = [
        // funeral
        '{{musicMetalNoun}}',
        // the funeral
        '{{musicMetalArticle}} {{musicMetalNoun}}',
        // the bloody
        '{{musicMetalArticle}} {{musicMetalAdjective}}',
        // the bloody funeral
        '{{musicMetalArticle}} {{musicMetalAdjective}} {{musicMetalNoun}}',
        // bloody
        '{{musicMetalAdjective}}',
        // bloody funeral
        '{{musicMetalAdjective}} {{musicMetalNoun}}',
    ];

    protected static $albumFormats = [
        // kill the funeral
        '{{musicMetalVerb}} {{musicMetalArticle}} {{musicMetalNoun}}',
        // killing the funeral
        '{{musicMetalVerbContinuous}} {{musicMetalArticle}} {{musicMetalNoun}}',
        // kill the bloody funeral
        '{{musicMetalVerb}} {{musicMetalArticle}} {{musicMetalAdjective}} {{musicMetalNoun}}',
    ];

    public function musicMetalArtist()
    {
        $format = static::randomElement(self::$artistFormats);
        return $this->generator->parse($format);
    }

    public function musicMetalAlbum()
    {
        $format = static::randomElement(self::$albumFormats);
        return $this->generator->parse($format);
    }
}