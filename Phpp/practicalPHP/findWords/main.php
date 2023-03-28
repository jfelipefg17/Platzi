<?php 

$words = array("moon", "soccer", "playing");
$form = "<form action ='analysis.php'>";

//* makes messy words

for($i = 0; $i < count($words); $i++){
  $form .= "The word: " . str_shuffle($words[$i]) ." ". "<input type='text' name='word". $i ."'>" . "<br>";
}

$button = "<button type='submit'>Send</button>";
$formClose = "</form>";


echo $form . $button . $formClose;
?>