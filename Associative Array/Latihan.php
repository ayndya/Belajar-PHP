<?php

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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan </title>
    <style>
        html{
            padding:0;
        }

        h2{
            color:blue;
        }
        
        li{
            list-style-type:none;
            background-color:blue;
            color:white;
            max-width:400px;
            padding: 5px;
        }
        
    </style>
</head>
<body>
    <h1>Latihan</h1>
    <h2>Spesifikasi Handphone</h2>

    <?php foreach ($spekhandphone as $shd): ?>
        <ul>
            <li><img src="../img/<?php echo $shd ["image"]?>" alt=""></li>
    <li>Merk : <?php  echo $shd [ "Merk"]?></li>
    <li>Type : <?php  echo $shd [ "Type"]?></li>
    <li>Warna : <?php  echo $shd [ "Warna"]?></li>
    <li>Keluaran : <?php  echo $shd [ "Keluaran"]?></li>
    <li>RAM : <?php  echo $shd [ "RAM"]?></li>
    <li>Harga : <?php  echo $shd [ "Harga"]?></li>
    <!-- kalau perlu bisa menambhakan gambar di array associative  -->
    </ul>
    <?php endforeach?>
    
</body>
</html>