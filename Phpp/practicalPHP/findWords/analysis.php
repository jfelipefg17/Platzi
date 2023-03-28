<?php


$words = array("moon", "soccer", "playing");

for ($i=0; $i <count($words) ; $i++) { 
  if($_REQUEST["word" .$i] == $words[$i]) {
    echo "The word is correct. " . "<br>";
    
  }else {
    echo "The word is incorrect, the word is: " . $words[$i] . "<br>";
  }
}
?>