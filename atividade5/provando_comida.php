<?php
    $gosto_comida = false;

    do {
        echo "Mordi a comida";
        $gosto_comida = true;

        if($gosto_comida) {
            echo "Gostei da comida";
        }
    } while ($gosto_comida != true);
?>