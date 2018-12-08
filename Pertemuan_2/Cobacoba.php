<?php

$nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($nilai as $angka){
    if ($angka%2==0) {
        echo $angka."<br/>";
    }
}

for ($nilai=1; $nilai<=10; $nilai++){
    if ($nilai%2==0){
        echo $nilai."<br/>";
    }
}
?>