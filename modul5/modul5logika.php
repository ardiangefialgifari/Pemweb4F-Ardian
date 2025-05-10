<!DOCTYPE html>
<html>
<head>
    <title>Ardian</title>
</head>
<body>
    <h2>Contoh Logika AND dan OR</h2>
    <?php
        $umur = 20;
        $kewarganegaraan = "Indonesia";

        // Logika AND: dua kondisi harus benar
        if ($umur >= 18 && $kewarganegaraan == "Indonesia") {
            echo "Anda boleh membuat KTP.<br>";
        } else {
            echo "Anda belum memenuhi syarat membuat KTP.<br>";
        }

        $nilai = 70;
        $lulus_teori = true;

        // Logika OR: cukup salah satu kondisi benar
        if ($nilai >= 75 || $lulus_teori) {
            echo "Anda dinyatakan lulus.<br>";
        } else {
            echo "Anda tidak lulus.<br>";
        }
    ?>
</body>
</html>

