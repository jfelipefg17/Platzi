<?php


$words = array("sol", "luna", "cielo");

if($_REQUEST["palabra0"] == $words[0]) {
  echo "The word is correct";
}else {
  echo "The word is incorrect, the word is: " . $words[0];
}

if($_REQUEST["palabra1"] == $words[1]) {
  echo "The word is correct";
}else {
  echo "The word is incorrect, the word is: " . $words[1];
}

if($_REQUEST["palabra2"] == $words[2]) {
  echo "The word is correct";
}else {
  echo "The word is incorrect, the word is: " . $words[2];
}
?>