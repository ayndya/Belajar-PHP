<?php

$mahasiswa = ["Muhamad Nurul Awalin", "10222149", "Informatika", "Sekolah Tinggi Teknologi Cipasung"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 2</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <!-- Cara Manual -->
        <ul>
            <li>Muhamad Nurul Awalin</li>
            <li>10222149</li>
            <li>Informatika</li>
            <li>Sekolah Tinggi Teknologi Cipasung</li>
        </ul>

<!-- Cara Pemanggilan 1  -->
        <ul>
            <li><?php echo $mahasiswa [0]?></li>
            <li><?php echo $mahasiswa [1]?></li>
            <li><?php echo $mahasiswa [2]?></li>
            <li><?php echo $mahasiswa [3]?></li>
        </ul>

<!-- Cara Pemanggilan 2  -->
<!-- Menggunakan Foreach -->
<ul>
<?php foreach ($mahasiswa as $mhs) :?>
<li><?= $mhs ?></li>
<?php endforeach ?>
</ul>

</body>
</html>