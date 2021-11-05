<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1>Program Konversi Angka</h1>
        Masukkan Angka 0-100
        <table>
            <tr>
                <td>Angka
                </td>
                <td>
                    : <input type="text" name="angka" require>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Konversi" name="konversi">

                </td>
            </tr>
        </table>
    </form>

    <h1>Hasil</h1>
    <?php
    $angka = isset($_POST['angka']) ? ($_POST['angka']) : 101;
    if ($angka >= 0 && $angka <= 100) {

        if ($angka >= 0 && $angka <= 20) {
            echo "E";
        } elseif ($angka >= 21 && $angka <= 40) {
            echo "D";
        } elseif ($angka >= 41 && $angka <= 60) {
            echo "C";
        } elseif ($angka >= 61 && $angka <= 80) {
            echo "B";
        } elseIf ($angka >= 81 && $angka <= 100) {
            echo "A";
        }
    } else {
        echo "Masukkan angka dengan benar";
    }
    ?>
    <br>
    <br><br>
    <a href="luas_segitiga.php">>>Luas Segitiga</a> <br>
    <a href="keliling_lingkaran.php">>>Keliling Lingkaran</a> <br>
    <a href="persegi_panjang.php">>>Luas Persegi Panjang</a>

</body>

</html>