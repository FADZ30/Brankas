<?php
    include ("config.php");
    $var1 = $_GET['data1'];
    $var2 = $_GET['data2'];
    mysqli_query($koneksi, "INSERT INTO user(NIM,Pass) VALUES('$var1','$var2')");
?>
