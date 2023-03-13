<?php

function felipe() {

  $random = rand(1, 3);
  $frase ="";

  switch($random){
    case 1:
      $frase = "Sobe cabeza. \n";
      break;

    case 2:
      $frase = "Chao con pan. \n";
      break;

    case 3:
      $frase = "A no chao. \n";
      break;


    }

return $frase;

  }

echo felipe();

echo "\n";
?>