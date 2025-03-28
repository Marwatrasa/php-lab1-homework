<?php

// number1


$input = 'aeeea aeea aea axa axxa axxxa';

// The regular expression pattern
$pattern = '/\ba(?:ee|x+?)a\b/';

preg_match_all($pattern, $input, $matches);

print_r($matches[0]);



echo "<br>";



// number2



$input = 'aaa * bbb ** eee * **';

// Replace single asterisks but not double ones
$output = preg_replace('/(?<!\*)\*(?!\*)/', '!', $input);

echo $output;



// number3

echo "<br>";

$input = 'aaa aaa aaa';

// Replace the last 'aaa' with '!'
$output = preg_replace('/aaa$/', '!', $input);

echo $output;



// number4

echo "<br>";     

$input = "2aaa'3'bbb'4'";

// Use preg_replace_callback to find numbers in quotes and double them
$output = preg_replace_callback(
    "/'(\d+)'/", 
    function($matches) {
        return "'" . ($matches[1] * 2) . "'";
    },
    $input
);

echo $output;

echo "<br>"; 
// number5



$input = 'aba aca aea abba adca abea';

// Regular expression to match abba and abea
preg_match_all('/\bab[a-z]a\b/', $input, $matches);
print_r($matches[0]);



?>