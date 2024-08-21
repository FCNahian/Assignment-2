<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    echo "Original String: $string, Vowel Count: " . countVowels($string) . ", Reversed String: " . reverseString($string) . "\n";
}

function countVowels($string)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

function reverseString($string)
{
    return strrev($string);
}