<?php

// while
// Loop with $counter
$counter=0;
while($counter<0){
 echo $counter."<br>";
 // if($counter>=5){
 //  echo $counter;
 //  break;
 // }
 $counter++;
}
// do - while
do{
 echo $counter."<br>";//note: one time run without condition
 $counter++;
}while($counter<0);
// for
for($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    // if ($key === 'hobbies') {
    //     break;
    // }
    if(is_array($value)){
     echo $key.' '.implode(" ",$value).'<br>';
    }else
     echo $key . ' ' . $value . '<br>';
}
?>