<?php

$kabupaten = array(
    array("Kabupaten Badung", "Badung"),
    array("Kabupaten Bangli", "Bangli"),
    array("Kabupaten Buleleng", "Singaraja"),
    array("Kabupaten Gianyar", "Gianyar"),
    array("Kabupaten Jembrana", "Negara"),
    array("Kabupaten Karangasem", "Karangasem"),
    array("Kabupaten Klungkung", "Klungkung"),
    array("Kabupaten Tabanan", "Tabanan"),
);

$totalKabupaten = count($kabupaten);


$kota = array(
    array("Kota Denpasar", "Sesuai ketetapan pemerintah"),
);


echo $kabupaten[0][0] . " pusat pemerintahannya berada di " . $kabupaten[0][1] . "<br>";
echo $kabupaten[1][0] . " pusat pemerintahannya berada di " . $kabupaten[1][1] . "<br>";
echo $kabupaten[2][0] . " pusat pemerintahannya berada di " . $kabupaten[2][1] . "<br>";
echo $kabupaten[3][0] . " pusat pemerintahannya berada di " . $kabupaten[3][1] . "<br>";

echo $kota[0][0]." Pusat Pemerintahannya " .$kota[0][1]."<br>"; 
echo "================================================ <br>";

for($row = 0; $row<$totalKabupaten; $row++){
    echo " <br> Data Kabupaten di Provinsi Bali <br>";
    echo "============== <br>";
    for ($col=0; $col < 2; $col++) { 
    echo $kabupaten[$row][$col];
    }
}
