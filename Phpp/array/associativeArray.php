//*associative array

<?php
$edades = array(
  "carlos" => 18,
  "felipe" => 34,
  "andres" => 24,
  "simon" => 13,
);

echo "la edad de carlos es " . $edades["carlos"];
echo "\n"
?>

//*array inside another array 


<?php
$personas = array(

  "felipe" => array(
    "edad" => 20,
    "apellido" => "florez",
  ),

  "andres" => array(
    "edad" => 34,
    "apellido" => "giraldo",
  ),
);



echo "la edade de andres es " . $personas["andres"]["edad"] . " y su apellido es " . $personas["andres"]["apellido"];
echo "\n"
?>