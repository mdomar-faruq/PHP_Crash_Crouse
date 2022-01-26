<?php
/*Get a Time
Here are some characters that are commonly used for times:

H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm) */

//make time(hour, minute, second, month, day, year)
$create= mktime(11,1,30,12,13,2021);
echo "Created date is-> " . date("Y-m-d h:i:sa", $create)."<br>";//strtotime()
// Print current date bd
date_default_timezone_set("Asia/Dhaka");
echo "The time is Dhaka-> " . date("F j Y,h:i:sa")."<br>";
// Print yesterday
echo "Previous day-> ".date("y-m-d, h:i:s",time()-60*60*24)."<br>";
// Different format: https://www.php.net/manual/en/function.date.php
 echo date("F j Y, h:i:s")."<br>";
 
 // Print current timestamp
 echo time()."<br>";

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString); 
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

 ?>