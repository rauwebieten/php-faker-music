<?php

namespace RauweBieten\HipHopGenerator;


trait Util
{
    protected function conjugateContinuous($verb)
    {
        // if ends on consonant/vowel/consonant
        $verb = preg_replace('/([^aeiou][aeiou])([^aeiouwxy])$/', '$1$2$2', $verb);

        // remove trailing "e"
        $verb = preg_replace('/e$/','',$verb);

        $verb.= 'ing';

        return $verb;
    }
}