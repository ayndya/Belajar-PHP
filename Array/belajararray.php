<?php

// Penulisan array 

$hari = ["Senin","Selasa","Rabu"];
$bulan = ["Januari", "Februari","Maret"];
$nama = ["Muhamad", "Nurul","Awalin"];

// Pemanggilan Array 
// var_dump($bulan);
// echo "<br>";

// print_r($hari);
// echo "<br>";

// echo $bulan [2];
// echo "<br>";

// echo $nama [1];
// echo "<br>";

// Menambahkan Baru Array
var_dump($hari);
$hari []="Kamis";
$hari []="Jum'at";
$hari []="Sabtu";
$hari []="Minggu";
echo "<br>";
var_dump($hari);


?>