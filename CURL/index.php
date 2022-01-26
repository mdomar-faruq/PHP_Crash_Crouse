<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource=curl_init($url);
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true);// i want to get server respon 
$result=curl_exec($resource);
// echo "<pre>";
// var_dump(json_decode($result));
// echo "<pre>";
curl_close($resource);
echo $result;//check the result
// Get response status code
$code=curl_getinfo($resource,CURLINFO_HTTP_CODE);//lot of information getinfo
echo "<pre>";
var_dump($code);
echo "<pre>";

$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$ch = curl_init($url);

//This function sets the multiple options for the cURL session.
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json') //specify tell them content is json
]);
$result = curl_exec($ch);
curl_close($ch);
var_dump ($result);

?>