<!DOCTYPE html>
<html>
<head>
    <title>Hitung Volume Tabung</title>
</head>
<body>
    <h2>Volume Tabung</h2>
    <?php
       
        $r = 7; 
        $t = 20; 
        $phi = 3.14;

      
        $volume = $phi * $r * $r * $t;

        
        echo "Jari-jari (r): $r cm<br>";
        echo "Tinggi (t): $t cm<br>";
        echo "Volume tabung: " . $volume . " cm³";
    ?>
</body>
</html>
