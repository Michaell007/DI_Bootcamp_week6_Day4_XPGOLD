<?php

    // Display Average Temperature
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    $arrTemp = explode(",", $month_temp);
    $lowset = $arrTemp[0];
    $higthest = $arrTemp[0];

    foreach ($variable as $value) {
        $lowset = $value < $lowset ? $value : $lowset;
        $higthest = $value > $higthest ? $value : $higthest;
    }

    // average temperature
    $moyTemp = (($lowset+$higthest) / 2);

    // sort array
    sort($arrTemp);

    // five lowest
    $arrFiveLowest = array_splice($arrTemp, 0, 5);
    var_dump($arrFiveLowest);

    // five highest 
    $arrFiveHighest  = array_splice($arrTemp, 20, 5);
    var_dump($arrFiveHighest);
    
?>