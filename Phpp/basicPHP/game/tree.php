<?php

function tree($a) {
  
  for($i = 0; $i <= $a; $i++) {
    echo str_repeat("*", $i );
    echo "\n";
}
}

echo tree($a = readline("ingrese el numero de pisos del audio: "));

echo "\n";
?>