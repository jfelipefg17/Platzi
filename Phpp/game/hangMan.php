<?php

//* clean the screen 
//* PHP_OS to know what operative system have the person that is play
//* system to ride in his terminal that commands
function clear() {

  if (PHP_OS == "WINNT"){
    system("clear");
  }
  else {
    system("clear");
  }
}

$possible_words = ["zapato", "perro", "gallo", "comida", "amar", "besar", "soplar", "sobar" ];

define("MAX_ATTEMPS", 6);
echo "The HangMan Game \n\n";

//* initialize the game

$choosen_word = $possible_words[ rand (0, 7) ];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discover_letters = str_pad("", $word_length, "_");
$attempts = 0;

//*showing how many letters the hidden word has
do {
echo "This word have $word_length letters \n\n";
echo $discover_letters . "\n\n";


//*we if the user please ride information 
$player_letter = readline("Ride a letter: ");
$player_letter = strtolower($player_letter);

if ( str_contains($choosen_word, $player_letter) ) {

  //*how many times the letter appear  
  $offset = 0;
  while (($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false ) {

    $discover_letters [$letter_position] = $player_letter;
    $offset = $letter_position + 1;
    
  } 
}
else {
  clear();
  $attempts++;
  echo "incorrect letter te quedan " . (MAX_ATTEMPS - $attempts) . "  attempts.";
  sleep(2);

}
clear();

//*when the word is discovered, finish the game and show message

}while($attempts < MAX_ATTEMPS && $discover_letters != $choosen_word);

clear();

if ($attempts < MAX_ATTEMPS) {
  echo "LETS GOOOOOOO, YOU DID IT \n";
  echo "THE WORD WAS $choosen_word\n";
}
else {
  echo "YOU TRASH \n";
  echo "THE WORD WAS $choosen_word\n";
}

echo "\n";
?>