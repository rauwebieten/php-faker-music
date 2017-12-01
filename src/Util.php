<?php

namespace RauweBieten\HipHopGenerator;


trait Util
{
    /**
     * @param string $verb
     * @return mixed|string
     * @see https://www.ecenglish.com/learnenglish/lessons/present-continuous-spelling-rules/
     */
    protected function conjugateContinuous($verb)
    {
        // if ends on consonant/vowel/consonant(but not x y or w)
        $verb = preg_replace('/([^aeiou][aeiou])([^aeiouwxy])$/', '$1$2$2', $verb);

        // change ending ie into y
        $verb = preg_replace('/ie$/', 'y', $verb);

        // remove trailing "e"
        $verb = preg_replace('/e$/', '', $verb);

        $verb .= 'ing';

        return $verb;
    }
}