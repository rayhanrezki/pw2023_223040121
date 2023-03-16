<?php

//ARRAY
// Membuat Array

$HARI = array('senin', 'selasa', 'rabu'); //cara lama
$BULAN = ['januari', 'februari', 'maret']; //cara baru
$MyArray = ['Alfa', 19, false];
$BINATANG = ['🦝', '🐺', '🐧', '🐨', '🐼'];

echo $HARI[1] . " ";
echo $BULAN[2] . " ";
echo $MyArray[0] . " ";
echo $BINATANG[4] . " "; //cara menampilkan array
echo "<hr>";

//mencentak seluruh isi array
// var_dump, print_r (menggunakan)

var_dump($HARI);
echo "<br>";

print_r($BULAN);
echo "<br>";

var_dump($MyArray);
echo "<br>";

print_r($BINATANG);
echo '<hr>';

//Manipulasi isi array
// isi elemen menggunakan indexnya

$HARI[3] = 'kamis';
print_r($HARI);

echo "<br>";

//Menambahkan elemen di akhir array menggunakan
//index kosong[]

$HARI[] = 'jumat';
$HARI[] = 'sabtu';
print_r($HARI);
echo '<br>';

// menambahkan elemen baru diakhir array menggunakan
// array_push()

array_push($BULAN, "april", "mei", "juni", "juli");
print_r($BULAN);

echo "<hr>";

//Menambahkan elemen baru diawal array menggunakan
//array_unshift()

array_unshift($BINATANG, '🐍', '🐉');
print_r($BINATANG);

echo '<hr>';
//Menghapus akhir array menggunakan
//array_pop
//kekurangan hanya bisa satu persatu
array_pop($HARI);
array_pop($HARI);
print_r($HARI);
echo '<hr>';

//Menghapus elemen array di awal menggunakan
//array_shift
array_shift($HARI);
print_r($HARI);
