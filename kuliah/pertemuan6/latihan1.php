<?php
$BINATANG = ['🦝', '🐺', '🐧', '🐨', '🐼'];
$MAKANAN = ['🍜', '🎂', '🍤', '🍣', '🍖'];
$NAMA = ['alfa','duckie',"beef","salmon","tuna"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>
<body>
  <h2> daftar mahasiswa</h2>

  <?php foreach($NAMA as $i => $N )  { ?>
  <ul>
    <li> Nama : <?= $N ?> </li>
    <li> Makanan  Favorit : <?=$MAKANAN [$i] ?> </li>
    <li> Peliharaan : <?=$BINATANG[$i]  ?> </li>
  </ul>
  <?php } ?>
</body>
</html>