<?php

// What is the word you want me to sort?
echo 'What is the word you want me to sort? ' . PHP_EOL;

 // Get user inputed word
    $string = trim(fgets(STDIN));

// Make that function!
function alphabet_soup($string) {

    // Convert user inputed string to array
    $array = str_split($string);

    // Sort array alphabetically
    sort($array);

    return $array;
}

// call the new array
$array = alphabet_soup($string);

// convert back to string
$new_word = implode($array);

// echo out new worded string
echo $new_word . PHP_EOL;

// a slightly imperfect Alphabet soup