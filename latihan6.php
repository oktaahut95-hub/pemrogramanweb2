php
<?php

$angka = [];
$angka[0] = 10;
$angka[1] = 20;
$angka[2] = 30;
$angka[3] = 40;

$jumlah = count($angka);
print "Jumlah array angka = $jumlah<br>";
// variabel $jumlah akan bernilai 4

$produk = [];
$produk["makanan"] = "Nasi Goreng";
$produk["minuman"] = "Es Teh";
$produk["snack"] = "Kentang Goreng";
$produk["dessert"] = "Puding";
$produk["buah"] = "Apel";

$jumlah = sizeof($produk);
print "Jumlah array produk = $jumlah<br>";
// variabel $jumlah akan bernilai 5

?>

Output:
text
Jumlah array angka = 4
Jumlah array produk = 5
