<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERURUTAN</title>
</head>
<body>
<center>
<table>

<H1>Input Nilai</H1>

<br>
    <form action="" method="post">
        <tr>
            <td><label for="username">Bil 1 </label></td>
            <td><input type="number" name="angka1" ></td>
        </tr>
        <tr>
            <td><label for="password">Bil 2 </label></td>
            <td><input type="number" name="angka2" ></td>
        </tr>
        <tr>
            <td><label for="password">Bil 3 </label></td>
            <td><input type="number" name="angka3" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>
</center>



<center>
<?php

if(isset($_POST["submit"])){


    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $angka3 = $_POST['angka3'];

    $max = $angka1;

    if($angka2 > $max) {
        $max = $angka2;
    }
    if ($angka3 > $max) {
        $max = $angka3;
    }
    echo "Angka terbesar adalah " . $max;
    echo "<br>";

// Menyimpan bilangan ke dalam array
$angka = array($angka1, $angka2, $angka3);

// Mengurutkan array dari nilai terkecil ke terbesar
sort($angka);

// Mencetak angka secara urut
echo "angka urut: ";
foreach ($angka as $b) {
    echo $b . " ";
}
}
?></center>

</body>
</html>