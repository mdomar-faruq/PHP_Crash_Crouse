<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello I am Zura<br>';
}

hello();
hello();
hello();

// Function with argument
//function hello($name)
//{
//    echo "Hello I am $name";
//}

// Create sum of two functions
// function sum($a, $b)
// {
//     return $a + $b;
// }

// echo sum(4,5);
// echo sum(9,10);

// Create function to sum all numbers using ...$nums
//function sum(...$nums)
//{
//    $sum = 0;
//    foreach ($nums as $num) $sum += $num;
//    return $sum;
//}
//echo sum(1, 2, 3, 4, 6);
//
// Arrow functions
function sum(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => $carry + $n);//carry->first value,n-> Second value
                                /* 1+2=3
                                   3+3=6
                                   6+4=10
                                   10+5=15
                                   15+6=21, output =21*/
}
echo sum(1, 2, 3, 4,5, 6);