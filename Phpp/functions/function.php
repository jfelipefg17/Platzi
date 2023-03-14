<?php
//* typical funtion with out parameters


function get_dog() {

  $numbers = rand(1, 5);

  switch ($numbers) {
    case 1:
      echo "cooper";
      break;
    
    case 2:
      echo "charlie";
      break;

    case 3:
      echo "ramona";
      break;

    default:
      echo "The dog is dead";
  }

}

get_dog();

echo "\n";

?>