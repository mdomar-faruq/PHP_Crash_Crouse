<?php

// Create array
$fruits=["Apple","Mango","orange","banana"];
// Print the whole array
echo "<pre>"; 
var_dump($fruits);
echo "</pre>";
// The <pre> tag in HTML is used to define the block of preformatted text which preserves the text spaces, line breaks, tabs, and other formatting characters which are ignored by web browsers.

// Get element by index
echo $fruits[1]."<br>";
// Set element by index
$fruits[3]="WaterMalon";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Check if array has element at index 2
isset($fruits[3]); //0->true, 5->false
// Append element
$fruits[]="banana";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Print the length of the array
echo count($fruits)."<br>";
// Add element at the end of the array
array_push($fruits, "foo");
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Remove element from the end of the array
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Add element at the beginning of the array
array_unshift($fruits,"first_element");
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Remove element from the beginning of the array
array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Split the string into an array
$string= "array,c#,java,PHP";
 print_r(explode(",",$string))."<br>"; 
// Combine array elements into string
echo implode("&",$fruits)."<br>";
// Check if element exist in the array
var_dump($fruits);
echo "<pre>";
var_dump(in_array("Apple",$fruits)); //Apple->true,lethie->false
echo "</pre>";

// Search element index in the array

echo "<pre>";
var_dump(array_search("Mango",$fruits)); 
echo "</pre>";
// Merge two arrays
$vegitable=["potatu","onion","chile"];
var_dump([...$vegitable,...$fruits]); //only support 7.4 or Up
//var_dump(array_merge($vegitable,$fruits));
// Sorting of array (Reverse order also)
sort($fruits);
echo "<pre>";
var_dump($fruits);
//var_dump(rsort($fruits)); //reverse
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person=[
"Name"=>"shakil",
"age"=>"22",
"hobbie"=>["Cricket","fotball","ches"],
"village"=>"chordukhiea"
];
echo"<pre>";
var_dump($person);
echo "</pre>";
// Get element by key
echo $person["Name"]."<br>";
// Set element by key
$person["phone"]="809808098";
echo"<pre>";
var_dump($person);
echo "</pre>";
// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person)){
//  $person["Adress"]= "Unknown";
// };
//$person["Adress"]= $person["Adress"] ?? "Unknown"; 
$person["Adress"] ??= "Unknown";//suport 7.4 or up
echo"<pre>";
var_dump($person);
echo "</pre>";

// Check if array has specific key

// Print the keys of the array
echo"<pre>";
var_dump(array_keys($person));
echo "</pre>";
// Print the values of the array
echo"<pre>";
var_dump(array_values($person));
echo "</pre>";
// Sorting associative arrays by values, by keys
ksort($person); //key short
echo"<pre>";
var_dump($person);
echo "</pre>";
//--a sort
asort($person);
echo"<pre>";
var_dump($person);
echo "</pre>";
// Two dimensional arrays
$TD=[
["title1"=> "todo title 1","complite"=>"true"],
["title2"=> "todo title 2","complite"=>"false"]
];
echo"<pre>";
var_dump($TD);
echo "</pre>";
?>