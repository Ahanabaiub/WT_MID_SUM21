<?php

    $length = 200;
    $width = 200;

    if($length == $width){
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "The shape is a square.";
        echo "Area : $area<br>Perimeter : $perimeter";
    }
    else{
        echo "The shape is not a square";
    }
?>