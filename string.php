<?php
// double cotta vs single cotta
$check="variable check";
$string="double Cotta permison $check";
$string2='Single cotta does nott permission $check';

echo $string."<br>"; //output-> double Cotta permison variable check
echo $string2."<br>";//output-> Single cotta does nott permission $check

// String concatenation
echo "I"."am"."concatenation"."<br>";

// String functions
$string = "    Hello World      ";
echo "1 - " . strlen($string) . '<br>' . PHP_EOL;//PHP_EOL->'End Of Line'
echo "2 - " . trim($string) . '<br>' . PHP_EOL; 
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world , cese-sensitive
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;//Not cese-sensitive
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL; //ignor cese

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;
// note: PHP_EOL->  used to find the newline character in a cross-platform-compatible way
// Multiline text and line breaks
$longtest="
           My name is jake,
           I am not hero,
           I am bad boy";

echo $longtest."<br>";
echo nl2br($longtest)."<br>"; //Auto create newline 

// Multiline text and reserve html tags
$Longtest="
           My name is <b> jone </b>
           I am not <b>good</b>";
           
echo $Longtest."<br>";
echo nl2br($Longtest)."<br>"; 
echo htmlentities($Longtest)."<br>";
echo nl2br(htmlentities($Longtest))."<br>";
echo html_entity_decode(" &lt;b&gt; jone &lt;/b&gt"); //bold jone

// https://www.php.net/manual/en/ref.strings.php
?>