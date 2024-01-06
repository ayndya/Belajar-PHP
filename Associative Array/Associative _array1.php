<?php
$mahasiswa = [
    ["anydya", "10222643", "Desain Komunikasi Visual", "Universitas Indonesia"],
    ["Yulia", "1022364", "Informatika", "Universitas Indonesia"],
    ["Diablo", "1312452", "Ilmu Politik", "Universitas Indonesia"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array 1</title>
    <style>

    </style>
</head>
<body>
    <h1>Associative Array 1</h1>
    <h2>Data Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs):?>
    <ul>
        <li>Nama : <?php echo $mhs [0]?></li>
        <li>NIM : <?php echo $mhs [1]?></li>
        <li>Jurusan : <?php echo $mhs [2]?></li>
        <li>Universitas: <?php echo $mhs [3]?></li>
    </ul>
    <?php endforeach?>
    
    
    
</body>
</html>