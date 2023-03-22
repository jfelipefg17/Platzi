<?php
//* and only true if they are both true 
//* or only false if both are false 
//* same as or but true true is false too  
//* not 
//* && same as and but precedence left to right 
//* || same as or but precedence left to right


$valueA = true;
$valueB = true;

$result =  $valueA and $valueB;
var_dump($result);

echo "\n";
?>