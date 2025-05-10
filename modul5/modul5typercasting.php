<!DOCTYPE html>
<html>
<head>
    <title>Contoh Type Casting PHP</title>
</head>
<body>
    <h2>Contoh Type Casting</h2>
    <?php
        $angka_string = "123.45abc"; // Tipe: string

        // Type casting ke integer
        $angka_integer = (int) $angka_string;

        // Type casting ke float
        $angka_float = (float) $angka_string;

        echo "Nilai asli (string): $angka_string<br>";
        echo "Setelah casting ke integer: $angka_integer<br>";
        echo "Setelah casting ke float: $angka_float<br>";
    ?>
</body>
</html>
