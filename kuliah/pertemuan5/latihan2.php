 <?php
$BINATANG = ['🦝', '🐺', '🐧', '🐨', '🐼'];
$MAKANAN = ['🍜', '🎂', '🍤', '🍣', '🍖'];
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

<hr>

  <h2>Daftar Bintang</h2>
  <ul>
    <?php for ($i = 0; $i < count($BINATANG); $i++) {?>
  <li> <?php echo $BINATANG[$i]; ?> </li>
    <?php }?>

  </ul>

  <h2>Daftar Makanan</h2>
  <ul>
    <?php for ($i = 0; $i < count($MAKANAN); $i++) {?>
  <li> <?php echo $MAKANAN[$i]; ?> </li>
    <?php }?>
  </ul>

  <hr>

  <h2>Daftar Binatang</h2>
  <ol>
    <?php foreach ($BINATANG as $B) {?>
    <li> <?=$B;?> </li>
    <?php }?>
  </ol>

  <h2>Daftar Makanan</h2>
  <ol>
    <?php foreach ($MAKANAN as $M) {?>
    <li> <?=$M;?> </li>
    <?php }?>
  </ol>

  <h2>Daftar Makanan</h2>
  <ol>
    <?php foreach ($MAKANAN as $i => $M) {?>
    <li> index: <?=$i;?>  value: <?=$M;?> </li>
    <?php }?>
  </ol>

</body>
</html>

