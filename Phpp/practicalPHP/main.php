<?php 

$words = array("sol", "luna", "cielo");
$messyWords= array();

for($i=0; $i<count($words); $i++){
  $messyWords[$i] = str_shuffle($words[$i]);
}

print_r($messyWords);
echo "
<form action ='analysis.php'>
  <input type='text' name='palabra0'>
  <input type='text' name='palabra1'>
  <input type='text' name='palabra2'>
</form>
";

echo "\n";
?>