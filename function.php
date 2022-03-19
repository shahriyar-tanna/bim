<?php

function getBim($weight, $height){

    $get_bim = $weight / ($height * $height);

    if($get_bim){
        return "<h1>If your weigth is {$weight} kg & height is {$height} m than your BIM is {$get_bim}</h1>";
    }
}

?>