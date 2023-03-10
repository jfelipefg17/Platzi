/**
**function with parameteres
*/

<?php

function platzi_legend($platzi_rank) {

  if ($platzi_rank >= 20000) {
    echo "you are a platzi legend";
  }
  else {
    echo "you are not a platzi legend because your points are lower than 20000";
  }
  echo "\n";
  echo "\n";
}

do {
$platzi_rank = (int) readline("Please enter your platzi rank: ");

platzi_legend($platzi_rank);
} while (true);

echo "\n";

?>