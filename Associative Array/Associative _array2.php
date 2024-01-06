<?php
// Array Numerik
$mahasiswa = [ 
// Array Associative
    [
        "Nama" => "Anydya", 
        "NIM" => "10222643", 
        "Jurusan" => "Desain Komunikasi Visual", 
        "Universitas" => "Universitas Indonesia",
        "image" => "100.jpg"
    ],
    [
        "Nama" => "Muhamad Nurul Awalin", 
        "NIM" => "10222149", 
        "Jurusan" => "Teknik Informatika", 
        "Universitas" => "Sekolah Tinggi Teknologi Cipasung",
        "image" => "101.png"
    ]
];

// key-nya adalah string yang kita buat sendiri
// Cara Pemanggilan

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array 2</title>
    <style>

    </style>
</head>
<body>
    <h1>Associative Array 1</h1>
    <h2>Data Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs):?>
    <ul>
        <img src="../img/<?php echo $mhs ["image"]?>" alt="">
        <li>Nama : <?php echo $mhs ["Nama"]?></li>
        <li>NIM : <?php echo $mhs ["NIM"]?></li>
        <li>Jurusan : <?php echo $mhs ["Jurusan"]?></li>
        <li>Universitas: <?php echo $mhs ["Universitas"]?></li>
    </ul>
    <?php endforeach?>
    
    
    
</body>
</html>