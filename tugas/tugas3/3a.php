<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    // Rumus luas lingkaran = pi * r * r
    $luas = 3.14 * $r * $r;
    return $luas .  "cm" . "<sup>" . 2 . "</sup>";
   
}

echo "Jari-jari = 10 cm. </br>";

echo "Luas Lingkaran = " . hitungLuasLingkaran(10) . "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    //Keliling lingkaran = 2 x pi x r 
    $keliling = 2 * 3.14 * $r;
    return $keliling . " cm";
}
echo "Jari-jari = 20cm. </br> </br>";
echo "Keliling lingkaran = " . hitungKelilingLingkaran(20) . "<hr>";
?>