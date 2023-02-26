<?php
$Ndepan = "Rayhan";
$Nbelakang = "Rezki";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 5 == 0 and $angka % 3 == 0) {
        echo $Ndepan . $Nbelakang . "<br>";
    } elseif ($angka % 5 == 0) {
        echo $Ndepan . '<br>';
    } elseif ($angka % 3 == 0) {
        echo $Nbelakang . '<br>';
    } else {
        echo $angka . "<br>";
    }
}
