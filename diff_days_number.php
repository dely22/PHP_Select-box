<?php 

    $now = time(); 
    $your_date = strtotime("2022-01-01");
    $datediff = $now - $your_date;
    echo "The number of days between the start day of  bootcamp and this day is ";
    echo round($datediff / (60 * 60 * 24));
    echo " day "

?>