<?php
//array Associative
//array yang indexnya adalah string yang kita buat sendiri

$MAHASISWA = [
    [
        'nama' => 'Alfa',
        'makanan' => ['🍜','🍕','🍣'],
        'hewan' => '🦝',
    ],

    [
        'nama' => 'duckie',
        'makanan' => ['🎂','🍕'],
        'hewan' => '🐺',
    ],

    [
        'nama' => "beef",
        'makanan' => ['🍤'],
        'hewan' => '🐧',
    ],

    [
        'nama' => "salmon",
        'makanan' => ['🍣'],
        'hewan' => '🐨',
    ],

    [
        'nama' => "tuna",
        'makanan' => [],
        'hewan' => '🐼',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3</title>
</head>
<body>
  <h2> Daftar Mahasiswa</h2>

  <?php foreach ($MAHASISWA as $M) {?>
  <ul>
    <li> Nama : <?=$M['nama']?> </li>
    <li> Makanan  Favorit : 
      <?php foreach ($M['makanan'] as $mkn){
      echo $mkn ;
    }?> 
    </li>
    <li> Peliharaan : <?=$M['hewan']?> </li>
  </ul>
  <?php }?>
</body>
</html>