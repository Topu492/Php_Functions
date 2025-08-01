<?php


// convert string to array
 $array = explode(', ','a, b, c, d');
                //delimeter

 var_dump($array);


// delete value from associative array

$person = array ('Fname' => 'Saiful','Lname'=> ' Islam');

unset($person['Lname']);
print_r($person);