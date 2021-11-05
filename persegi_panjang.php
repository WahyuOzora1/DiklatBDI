<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
        <h1>Menghitung Luas Persegi Panjang</h1>
        <table>
            <tr>
                <td>Panjang
                </td>
                <td>
                    : <input type="text" name="panjang" require>
                </td>
            </tr>
            <tr>
                <td>

                    Lebar:


                </td>

                <td>
                    : <input type="text" name="lebar" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Hitung Luas" name="hitungLuasPL">

                </td>
            </tr>
        </table>
    </form>

    <h1>Hasil</h1>
    <?php
    $panjang = isset($_POST['panjang'] )? ($_POST['panjang']) : 0;
    $lebar = isset($_POST['lebar'] )? ($_POST['lebar']) : 0;
    $luas = $panjang * $lebar;
    echo "Luas Persegi Panjang : $luas";

    ?>
     <br>
    <br><br>
    <a href="luas_segitiga.php">>>Luas Segitiga</a> <br>
    <a href="keliling_lingkaran.php">>>Keliling Lingkaran</a> <br>
    <a href="konversiAngkaHuruf.php">>>Konversi Angka Ke Huruf</a>
    </div>

</body>

</html>