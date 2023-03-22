<?php



function espacios_correspondientes_en_la_bodega ($edades) {



        if(is_int($edades)) {
            if ($edades < 5) {
                echo "guarde sus juguetes en la parte inferior de la bodega.";
            } elseif ($edades >= 5 && $edades <= 7) {
                echo "guarde sus juguetes en la parte media de la bodega.";
            } else {
                echo "guarde sus juguetes en la parte alta de la bodega.";
            }
        } else {
            echo "<br>guarde sus juguetes en la bodega de al lado.";
        }
    
}

espacios_correspondientes_en_la_bodega ( $edades = (int) readline("ride your age: "));