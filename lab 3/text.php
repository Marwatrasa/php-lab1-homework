<?php
// Print the array of lines
$file = 'test.txt';


$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

print_r($lines);




// 2

// Display the sum


$file = 'test.txt';


$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


$sum = 0;


foreach ($lines as $line) {
    $sum += (float)$line;
}

echo "The sum of the numbers in the file is: " . $sum;





// 3

// Check if the file exists all text

$file = 'test.txt';


if (file_exists($file)) {
    
    $content = file_get_contents($file);

  
    echo nl2br($content); 
} else {

    echo "The file does not exist.";}




    // 4


// Check if the file exists

$file = 'test.txt';

if (file_exists($file)) {
    echo "The file 'test.txt' exist we can see that.";
} else {
    echo "The file 'test.txt' does not exist in the root of the site.";
}





// 5


// Display the current count on the page




$file = 'count.txt';


if (!file_exists($file)) {
    file_put_contents($file, '0');
}


$currentCount = (int)file_get_contents($file);


$currentCount++;


file_put_contents($file, $currentCount);

echo "Page refresh count: " . $currentCount;




?>





