<?php
echo "Hello World";

$a = 8;
$b = 5;
$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian =  $a / $b;
$modulus = $a % $b;
$boolean  = ($a < $b) ? "true" : "false";


echo "<br>";
echo "Penjumlahan :" . $a . " + " . $b . " = " . $penjumlahan . "<br>";
echo "Pengurangan :" . $a . " - " . $b . " = " . $pengurangan . "<br>";
echo "Perkalian :" . $a . " x " . $b . " = " . $perkalian . "<br>";
echo "Pembagian :" . $a . " : " . $b . " = " . $pembagian . "<br>";
echo "Modulus :" . $a . " % " . $b . " = " . $modulus . "<br>";
echo "Boolean :" . $a . " < " . $b . " = " . $boolean . "<br>";




echo "<==================================================================>" . "<br>";
echo "a = 6 <br>";
echo "b = 9 <br>";


$a = 6;
$b = 9;

if ($a < $b) {
    if ($a % 2) {
        echo "Nilai b lebih besar dari a dan genap";
    } else {
        echo "Nilai b lebih kecil dari a dan ganjil";
    }
}

// Menghitung luas persegi panjang
//menghitung luas segitiga
// keliling lingkaran
//Logika if bersarang untuk mnentukan nilai itu masuk kategori A B C D