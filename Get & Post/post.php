<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <style>
form{
    Color:Blue;
}

input{
    border-radius :5px;
    color:blue;
}
    </style>
</head>
<body>
    <h1>Hallo Selamat Datang <?= $_POST ["Type"] ;?></h1>
    <form action ="" method="post">
        Masukan Nama :
        <input type="text" name="Type">
        <br>
        <button type ="submit" name="Kirim">Kirim</button>
    </form>
    
</body>
</html>


<!-- Lanjut Nonton Menit 42:38 -->