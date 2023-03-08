/**
* *it will repeat minimum one time 
* *it is very useful for search someone in database or check if some one its register or not.
*/
<?php

$users = ["pepito", "felipe", "carlos"];

do {
  $user = readline("Please, ride your name: ");

}while (in_array($user, $users));

echo "\n";
?>
