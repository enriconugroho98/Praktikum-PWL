<?php
    $namapembeli = $_GET['namapembeli'];
    $typemotor = $_GET['typemotor'];
    $aksesoris = $_GET['aksesoris'];
    $carapembayaran = $_GET['carapembayaran'];
    
    // function total(){
    //     $typemotor = $_GET['typemotor'];
    //     $aksesoris = $_GET['aksesoris'];
    //     $carapembayaran = $_GET['carapembayaran'];

    //     $totalpembayaran = ($typemotor + $aksesoris);
    //     return $totalpembayaran;
    // }

    // echo total();
    // echo "<br />";

    function hargaMotor ($typemotor){
     switch ($typemotor){
        case "Vario":
            echo "17.000.000";
        break;
        case "Beat":
            echo "16.000.000";
        break;
        case "Revo":
            echo "15.000.000";
        break;
     }
    };

    function hargaAksesoris ($aksesoris){
     switch ($aksesoris){
        case "Velg Racing":
            echo "450.000";
        break;
        case "Helm":
            echo "250.000";
        break;
        case "Jaket":
            echo "15.000.000";
        break;
     }
    };

    function caraPembayaran ($carapembayaran){
     switch ($carapembayaran){
        case "Tunai":
            # code...
        break;
        case "Kredit":
            # code...
        break;
     }
    };
     
?>