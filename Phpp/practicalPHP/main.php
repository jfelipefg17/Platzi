<?php 

$palabras = array("sol", "luna", "cielo");
$palabrasDesordenadas= array();

for($i=0; $i<count($palabras); $i++){
    do{
        $palabrasDesordenadas[$i]=str_shuffle($palabras[$i]);
    }while($palabrasDesordenadas[$i]==$palabras[$i]);
    
}

echo "
  <input type='text' name='palabra0'>
  <input type='text' name='palabra1'>
  <input type='text' name='palabra2'>

";


echo "\n";
?>