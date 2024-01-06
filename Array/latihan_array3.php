<?php

$mahasiswa = [
    ["Muhamad Nurul Awalin", "10222149", "Informatika", "Sekolah Tinggi Teknologi Cipasung"],
    ["ayndya", "10222312", "Desain Komunikasi Visualisasi", "Universitas Pendidikan Indonesia"],
    ["Yulia Irawati", "1023625", "Teknik Elektro", "Insitut Teknologi Bandung"]
];

?>

<!-- Array Multidimensi -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 2</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) :?>
<ul>
    <li> Nama        : <?php echo $mhs[0]?></li>
    <li> NIM         :<?php echo $mhs[1]?></li>
    <li> Jurusan     :<?php echo $mhs[2]?></li>
    <li> Universitas :<?php echo $mhs[3]?></li>
</ul>
<?php endforeach ?>
</body>
</html>