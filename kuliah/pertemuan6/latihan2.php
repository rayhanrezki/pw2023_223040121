<?php
//array multi dimensi
//array didalam array

$MAHASISWA = [
    ['Alfa', '🍜', '🦝'],
    ['duckie', '🎂', '🐺'],
    ["beef", '🍤', '🐧'],
    ["salmon", '🍣', '🐨'],
    ["tuna", '🍖', '🐼'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>
<body>
  <h2> Daftar Mahasiswa</h2>

  <?php foreach ($MAHASISWA as $M) {?>
  <ul>
    <li> Nama : <?=$M[0]?> </li>
    <li> Makanan  Favorit : <?=$M[1]?> </li>
    <li> Peliharaan : <?=$M[2]?> </li>
  </ul>
  <?php }?>
</body>
</html>