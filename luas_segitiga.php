<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
       <h1>Menghitung Luas Segitiga</h1>
        <table>
            <tr>
                <td>Alas
                </td>
                <td>
                    : <input type="text" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>

                    Tinggi:


                </td>

                <td>
                    : <input type="text" name="tinggi" require>
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
    $alas = isset($_POST['alas']) ? ($_POST['alas']) : 0;
    $tinggi = isset($_POST['tinggi']) ? ($_POST['tinggi']) : 0;
    $luas = $alas * $tinggi * 0.5;
    echo "Luas Segitiga : $luas";

    ?>

    <br>
    <br>
    <br>
    <a href="keliling_lingkaran.php">>>Keliling Lingkaran</a> <br>
    <a href="persegi_panjang.php">>>Luas Persegi Panjang</a> <br>
    <a href="konversiAngkaHuruf.php">>>Konversi Angka Ke Huruf</a>
</body>

</html>