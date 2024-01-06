<?php

// Superglobal type nya adalah Array Assosiatif

// $_GET

$spekhandphone = [
    [
        "Merk"=>"Samsung",
        "Type"=> "J2 Prime",
        "Warna"=>"Black",
        "Keluaran"=>"2019",
        "RAM"=>"2 GB",
        "Harga" => "Rp. 500.000,-",
        "image" => "100.jpg"
    ],
    [
        "Merk"=>"Xiaomi",
        "Type"=> "Redmi 7",
        "Warna"=>"White",
        "Keluaran"=>"2020",
        "RAM"=>"2 GB",
        "Harga" => "Rp. 900.000,-",
        "image" => "100.jpg"
    ],
    
    [
        "Merk" => "Oppo",
        "Type" => "Oppo Reno 4",
        "Warna" => "Blue",
        "Keluaran" => "2021",
        "RAM" => "4 GB",
        "Harga" => "Rp. 4.000.000,-",
        "image" => "100.jpg"
    ]

    ];
// $_POST

// $_SESSION
// $_COOKIE


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global PHP</title>
</head>
<body>
<h3>DAFTAR HANDPHONE</h3>

<?php foreach ($spekhandphone as $shd):?>
    <ul>
        <li>
        <a href="get2.php?Merk=<?= $shd ["Merk"];?>&Type=<?= $shd ["Type"]?>
        &Warna=<?= $shd ["Warna"]?>
        &Keluaran=<?= $shd ["Keluaran"]?>
        &RAM=<?= $shd ["RAM"]?>
        &Harga=<?= $shd ["Harga"]?>
        "><?= $shd ["Merk"];?></a>
        </li>
    </ul>

  

<?php endforeach?>
</body>
</html>