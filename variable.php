<!DOCTYPE html>
<html lean="en">
<head>
 
    <title>Variable</title>
</head>
<body>
      <?php
     /*
     1.What is variable?
     ->Variable (computer science), a symbolic name associated with a value 
       and whose associated value may be changed.
    php->A variable in PHP is a name of memory location that holds data.

    PHP->Data type
     PHP supports ten primitive types.

    a. Four scalar types:
        a. bool
        b. int
        c. float (floating-point number, aka double)
        d. string
    b. Four compound types:
        a. array
        b. object
        c. callable
        d. iterable
    c. And finally two special types:
        a. resource
        b. NULL

    -> These data types are used to construct variables. 

     */
    //Scaler type

     $name="Razu"; //string
     $age="25"; // numeric value
     $hight= 5.7; // float or double
     $salary= 120000;  // int
     $happy=null;   //null
     $married= true; // bool

     //variable checking function
     echo is_string($name)."<br>"; 
     echo is_int($salary)."<br>";
     echo is_bool($married)."<br>";
     echo is_float($hight)."<br>";

    
    
     //Check if variable is define
    isset($name);  //True
    isset($none); //false

    //Constent
    define("PI",3.1416);
    echo "PI= ".PI;

    //Using php buil-in constent
    echo  "<br>".SORT_ASC; 
    echo  "<br>".SORT_DESC;
    echo "<br>".PHP_INT_MAX;
    echo "<br>".PHP_INT_MIN;

     ?>
</body>
</html>