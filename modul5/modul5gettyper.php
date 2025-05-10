<!DOCTYPE html>
<html>
<head>
    <title>Contoh gettype()</title>
</head>
<body>
    <h2>Cek Tipe Data Variabel di PHP</h2>
    <?php
        $nama = "Ardian";       // string
        $umur = 20;             // integer
        $tinggi = 170.5;        // double/float
        $isAktif = true;        // boolean

        echo "Tipe data \$nama: " . gettype($nama) . "<br>";
        echo "Tipe data \$umur: " . gettype($umur) . "<br>";
        echo "Tipe data \$tinggi: " . gettype($tinggi) . "<br>";
        echo "Tipe data \$isAktif: " . gettype($isAktif) . "<br>";
    ?>
</body>
</html>
