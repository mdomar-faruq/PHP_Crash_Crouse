<?php
// Magic constants
echo __FILE__."<br>";
echo __DIR__."<br>";
echo __LINE__."<br>";
// Create directory
//mkdir("test");
// Rename directory
//rename("test","test2");
// Delete directory
//rmdir("test2");
// Read files and folders inside directory
$fileScan= scandir("./");//Note: curentdirectory(./), parent directory(../)
echo "<pre>";
var_dump($fileScan);
echo "<pre>";
// file_get_contents, file_put_contents
echo file_get_contents("text.txt");
file_put_contents("sample.txt","Some text");
// file_get_contents from URL
// $userJeson=file_get_contents("https://jsonplaceholder.typicode.com/users");
// echo $userJeson;
// $user=json_decode($userJeson, true);
// echo "<pre>";
// var_dump($user);
// echo "<pre>";
// https://www.php.net/manual/en/book.filesystem.php
// Check if file exists or not
file_exists('sample.txt'); // true

// Get file size
filesize('sample.txt');

// Delete file
//unlink('sample.txt');

// is_dir
// filemtime
// filesize
// disk_free_space
// file

?>