<?php

 //constant

define ('PI','123');
echo "My Value ". PI;


// Ternary Operator in PHP  (condition) ? value_if_true : value_if_false;

$age = 20;

echo ($age >= 18) ? "Adult" : "Minor";



$n= 3;

for($i=$n, $factorial=1; $i>1; $i--){
    $factorial = $factorial * $i ;

}

printf("Factorial %d is %d",$n,$factorial);




?>