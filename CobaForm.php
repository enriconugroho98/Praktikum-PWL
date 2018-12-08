<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    if ($username == "admin" && $password == "admin"){
        echo "Selamat anda telah login";
        header('Location:Nilai.html');
    }else{
        echo "Username atau Password salah";
    }
?>