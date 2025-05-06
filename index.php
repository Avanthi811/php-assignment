<?php
//php code ?>


<?php
#single line comment
/* multi line comment */

echo "Hello World!";     // output Hello World!

$var = "123"; // variable declaration
$int_var = (int) $var; // type casting to int
$float_var = (float) $var; // type casting to float 
// $bool_var = bool ($var); // type casting to boolean
// $null_var = null; // null variable  
// $int_var = 123; // integer variable
// $float_var = 123.45; // float variable
// $bool_var = true; // boolean variable
// $string_var = "Hello World!"; // string variable

echo $float_var; // output 123.45
// echo $bool_var; // output 1 (true)
// echo $string_var; // output Hello World!
// echo $null_var; // output nothing (null)
var_dump($var); // output variable type and value