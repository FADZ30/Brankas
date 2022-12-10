<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "esp8266";

    $koneksi = mysqli_connect($server, $user, $password, $db);

    if($koneksi!=false){
        echo "berhasil";
    }else{
        echo "gagal";
    }
?>