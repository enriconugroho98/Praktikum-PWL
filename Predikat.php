<?php
    $laporan = $_GET['laporan'];
    $uas = $_GET['uas'];
    $uts = $_GET['uts'];

    function rata2(){
        $laporan = $_GET['laporan'];
        $uas = $_GET['uas'];
        $uts = $_GET['uts'];

        $hasil = ($laporan*0.2 + $uas*0.5 + $uts*0.3);
        return $hasil;
    }

    echo rata2();
    echo "<br />";

    $predikat = rata2();
    if ($predikat >= 81 && $predikat <= 100) {
        echo "A";
    } else if ($predikat >= 61 && $predikat <= 80) {
        echo "B";
    } else {
        echo "Goblok Lu";
    }
?>