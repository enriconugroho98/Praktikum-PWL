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
?>