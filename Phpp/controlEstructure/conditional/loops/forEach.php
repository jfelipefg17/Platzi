/**
* *this is the loop more useful in php and for the associative array 
* *its the best one  because you can get the key and the value 
* *in this loop you can also use break and continue 
*/

<?php
/**
 * *usual foreach
 */
$coffeShop = array (
  "americano" => 20,
  "Capuccino" => 21,
  "Reheated" => 10,
  "latte" => 17,
  "mocca" => 24,
);

foreach ($coffeShop as $price) {
  echo "The coffes cost $$price USD \n";
}

echo "\n";
/**
 * *break
 */
foreach ($coffeShop as $coffe => $price) {

  echo "Now the loop is in coffe $coffe \n";
  
  if ($coffe == "latte") {
    echo "We found your latte \n";
    break;
  }
}

echo "\n";
/**
 * *continue
 */
foreach ($coffeShop as $coffe => $price) {
  
  if ($coffe == "Reheated") {
    continue;
  }
  echo "The coffe $coffe es muy rico \n";
}

echo "\n";
?>
