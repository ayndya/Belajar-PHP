<?php

// Pengulangan pada array 
// for / foreach

$number = [1,2,3,4,5,]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
</head>
<body>
    <style>
        div {
            width: 100px;
            height: 100px;
            background-color: yellow;
            text-align : center;
            line-height: 100px;
            margin : 3px;
            float : left;
        }

    </style>
</body>
</html>

<?php
for ($i = 0; $i < count($number) ; $i++){?>
    <div class="kotak"><?php echo $number[$i]; ?></div>
<?php } ?>

<!-- Menggunakan Foreach   -->

<?php
foreach ($number as $a){?>
    <div><?php echo $a; ?></div>
<?php }  ?>

 <!-- Menggunakan endforeach   -->

<?php
echo "<br>";
foreach($number as $a) :?>
<div><?php echo $a?></div>
<?php endforeach;?>


