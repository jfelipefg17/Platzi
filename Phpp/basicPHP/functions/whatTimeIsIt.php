<?php

function obtener_hora() {
  date_default_timezone_set("America/Guatemala");
  return date("h:i a");
}

echo "Hola, me podrias decir que hora es? \n";
echo "Claro, son las ". obtener_hora();