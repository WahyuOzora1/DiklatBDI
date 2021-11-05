<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Program Menghitung Keliling Lingkaran</h1>
        <table>
            <tr>
                <td>jari_jari
                </td>
                <td>
                    : <input type="text" name="jari_jari" require>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Hitung Keliling" name="hitungKeliling">

                </td>
            </tr>
        </table>
    </form>

    <h1>Hasil</h1>
    <?php
    $jari_jari = isset($_POST['jari_jari']) ? ($_POST['jari_jari']) : 0;
    $keliling = 2 * 3.14 * $jari_jari;
    echo "Keliling Lingkaran : $keliling";
    ?>

    <br>
    <br><br>
    <a href="luas_segitiga.php">>>Luas Segitiga</a> <br>
    <a href="persegi_panjang.php">>>Luas Persegi Panjang</a> <br>
    <a href="konversiAngkaHuruf.php">>>Konversi Angka Ke Huruf</a>

</body>

</html>