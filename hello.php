
 <?php
echo "My first PHP  script!";
 ?> 
<?php
define("pi", 3.14);
$R=4;

$a=2;
$b="2";
$c=$a+$b;
echo $c.'</br>';
$c = (string) $a.$b;
echo gettype($a).'</br>';
echo $c.'</br>';




?>

<?php


$a = 27;
$b = 12;
$c = sqrt($a * $a + $b * $b);
$c_rounded = round($c, 2);
echo "The value of the hypotenuse is: " . $c_rounded;


    echo"</br>";


$a = 27;
$b = 12;

$c = sqrt($a * $a - $b * $b);
$c_rounded = round($c, 2);
echo "the value of other leg is " .$c_rounded;

echo"</br>";


$a = 27;
$b = 23; 

$c = sqrt($a * $a - $b * $b);

$angle_radians = atan2($b, $c);
$angle_degrees = rad2deg($angle_radians);
$c_rounded = round($c, 2);
$angle_rounded = round($angle_degrees, 2);

echo "The value of the other leg is: " . $c_rounded . "\n";
echo"</br>";
echo "The value of the acute angle is: " . $angle_rounded . " degrees\n";

echo"</br>";



$a = 4.3;
$b = 7.7;
$c = '5.5';
$d = '3.4kg';


$c_numeric = (float)$c; 
$d_numeric = (float)$d; 


$a_floor = floor($a);
$a_ceiling = ceil($a);

$b_floor = floor($b);
$b_ceiling = ceil($b);

$c_floor = floor($c_numeric);
$c_ceiling = ceil($c_numeric);

$d_floor = floor($d_numeric);
$d_ceiling = ceil($d_numeric);

echo "Variable a = $a:\n";
echo "  Floor: $a_floor\n";
echo "  Ceiling: $a_ceiling\n\n";

echo "Variable b = $b:\n";
echo "  Floor: $b_floor\n";
echo "  Ceiling: $b_ceiling\n\n";

echo "Variable c = '$c':\n";
echo "  Floor: $c_floor\n";
echo "  Ceiling: $c_ceiling\n\n";

echo "Variable d = '$d':\n";
echo "  Floor: $d_floor\n";
echo "  Ceiling: $d_ceiling\n";



echo"</br>";




$a = 27;
$b = 12;


$c = sqrt($a*2 + $b*2);


$angleA = atan($a / $b); 
$angleB = atan($b / $a); 


$angleA_degrees = rad2deg($angleA);
$angleB_degrees = rad2deg($angleB);
$angleC_degrees = 90; 


echo "Angle A (opposite side a): " . round($angleA_degrees, 2) . " degrees\n";
echo "Angle B (opposite side b): " . round($angleB_degrees, 2) . " degrees\n";
echo "Angle C (right angle): " . $angleC_degrees . " degrees\n";









?>