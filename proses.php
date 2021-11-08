<?php 

if(isset($_POST['submit'])){

// print_r($data);

$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = htmlspecialchars($_POST['email']);
$kampus = $_POST['kampus'];
$asal_kota = $_POST['asal_kota'];
$jk = $_POST['jk'];
$foto = $_FILES['foto']['name']; //nama file
$tmp = $_FILES['foto']['tmp_name']; //extension


$foto_baru = "tugas".$foto; //dirubah namanya saat mau disimpan
$path = "images/".$foto; //disimpan folder apa
$link_foto = $path;



if(!move_uploaded_file($tmp, $path)){
    echo "Upload File Failed";
}

include ("hasil.php");
}
