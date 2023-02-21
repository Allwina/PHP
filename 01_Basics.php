<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php

use JetBrains\PhpStorm\ArrayShape;

        echo "Hello World & me"
        ?>
    </div>
     <!-- $ used for making variable -->
     <?php
   
   $variabl1=5;
    $variable2=8;
    echo $variabl1;
    echo $variable2;
    echo $variabl1+$variable2;
   
    // <!-- php not case sensitive -->
    // <!-- operators in php -->
    // <!-- arithmetic operators -->
    echo "<br>";
    echo "The value of variable1 + variable2 is";
    echo "<br>";
    echo $variabl1 + $variable2;
    echo "<br>";
    echo "The value of variable1 - variable2 is";
    echo "<br>";
    echo $variabl1 - $variable2;
    echo "<br>";
    echo "The value of variable1 * variable2 is";
    echo "<br>";
    echo $variabl1 * $variable2;
    echo "<br>";
    echo "The value of variable1 / variable2 is";
    echo "<br>";
    echo $variabl1 / $variable2;
    echo "<br>";
    // <!-- assignment operators -->
    $a=$variabl1;
    echo "new variable is ";
    echo $a;
    // <!-- comparison operators -->
    echo "<h1> Comparison OP </h1>";
    echo "the value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    // <!-- increment/decrement operators -->
    echo $variabl1++;
    echo "<br>";
    echo $variabl1--;
    echo "<br>";
    echo -- $variabl1;
    echo "<br>";
    echo ++$variabl1;
    echo "<br>";

    // <!-- logical operators -->
    echo "<h1> Logical OP </h1>";
    $myvar=(true) and (true);
    echo var_dump($myvar);
    echo "<br>";
    $myvar=(true) or (false);
    echo var_dump($myvar);
    echo "<br>";
    $myvar=(false) xor (false);
    echo var_dump($myvar);
    echo "<br>";

    ?>
    <?php 
    define('PI',3.14);
    //data types in php
    // 1.String
    // 2.Integer 
    // 3. Float 
    // 4. Boolean 
    // 5. Array 
    // 6. Object
    echo "<h1> Data Types </h1>";
    $var = "This is a string";
    echo var_dump($var);
    echo PI;
    ?>
</body>
</html>