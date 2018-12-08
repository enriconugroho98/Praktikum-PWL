<?php
    $nilai = 29.9999999;
    if(($nilai >= 85) && ($nilai <= 100)){
        $index = "A";
    } else if($nilai >= 70) {
        $index = "B";
    } else if($nilai >= 50) {
        $index = "C";
    } else if($nilai >= 30){
        $index = "D";
    } else {
        $index = "E";
    }
    echo "Nilai anda adalah : ".$nilai;
    echo "<br />";
    echo "Dengan index : ".$index;
?>