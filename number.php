<?php
// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; 
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators

$a += $b; echo $a.'<br>'; // $a = 9
$a -= $b; echo $a.'<br>'; // $a = 1
$a *= $b; echo $a.'<br>'; // $a = 20
$a /= $b; echo $a.'<br>'; // $a = 1.25
$a %= $b; echo $a.'<br>'; // $a = 1

// Increment operator
echo $a++ . '<br>';
echo ++$a . '<br>';

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

//conversion
$number= "5.7";
$ConvNumber= (float)$number;
$ConvNumber2= (int)$number;
$ConvNumber3= intval($number); // function call convert
$ConvNumber4= doubleval($number);
var_dump($ConvNumber,$ConvNumber2,$ConvNumber3,$ConvNumber4);

// Number functions
echo "abs(-15) " . abs(-15) . '<br>'; //(absolute (positive) value of a number.)
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>'; //round->(dawon<.5 > Up)
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';
echo "9-Decimal to binary =" . decbin(9).'<br>';  //dechex(9) , decoct(9) 
echo " Log10(100) =". log10(100). "<br>"; // log, log10
echo "tan 45 = ". tanh(45)."<br>"; //sine,sinh,cos,cosh,tan
//More practice https://www.php.net/manual/en/ref.math.php

// Formatting numbers
$Fnumber=10570.250;
echo number_format($Fnumber,2,".",", ")."<br>";  

$hexadecimal = 'a37334';
echo base_convert($hexadecimal, 16, 2)."<br>"; 

?>