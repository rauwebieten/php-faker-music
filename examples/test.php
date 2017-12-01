<?php

$verbs = ['work','cut','loose','set','smoke'];

foreach ($verbs as $verb)
{
    // if ends on consonant/vowel/consonant
    $verb = preg_replace('/([^aeiou][aeiou])([^aeiou])$/', '$1$2$2', $verb);

    // remove trailing "e"
    $verb = preg_replace('/e$/','',$verb);

    $verb.= 'ing';

    print $verb.PHP_EOL;
}