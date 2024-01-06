<?php

// Cek apakakah data ada di $_GET 
if (!isset($_GET["Merk"]) || 
!isset($_GET["Type"]) ||
!isset($_GET["Warna"]) ||
!isset($_GET["Keluaran"]) ||
!isset($_GET["RAM"]) ||
!isset($_GET["Harga"])){

    // Redirect
    header("Location:get.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spesifikasi</title>
</head>
<body>
    <h2>Spesifikasi Handphone</h2>
    <ul>
        <li><?=  $_GET ["Merk"] ;?></li>
        <li><?=  $_GET ["Type"] ;?></li>
        <li><?=  $_GET ["Warna"] ;?></li>
        <li><?=  $_GET ["Keluaran"] ;?></li>
        <li><?=  $_GET ["RAM"] ;?></li>
        <li><?=  $_GET ["Harga"] ;?></li>
    
    </ul>
    <h3><a href="get.php">Kembali</a></h3>
</body>
</html>