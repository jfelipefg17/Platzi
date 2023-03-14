<?php

$possible_words = ["zapato", "perro", "gallo", "comida", "amar", "besar", "soplar", "sobar" ];

define("MAX_ATTEMPS", 6);
echo "The HangMan Game \n\n";

//* initialize the game

$choosen_word = $possible_words[ rand (0, 9) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discover_letters = str_pad("", $word_length, "_");
$attempts = 0;

//*showing how many letters the hidden word has

echo "This word have $word_length letters \n\n";
echo $discover_letters . "\n\n";


//*we if the user please ride information 
$player_letter = readline("Ride a letter: ");
$player_letter = strtolower($player_letter);

if ( str_contains($choosen_word, $player_letter) ) {

  //*how many times the letter appear  
  $offset = 0;
  while ($letter_position = strpos($choosen_word, $player_letter, $offset) !== false ) {

    $discover_letters [$letter_position] = $player_letter;
    $offset = $letter_position + 1;
    
  } 
}
else {
  $attempts++;
  echo "incorrect letter te quedan " . (MAX_ATTEMPS - $attempts) . " attempts.";
}

echo "\n";
?>