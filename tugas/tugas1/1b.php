<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1b</title>
</head>
<body>
  <?php 
    $value=21;
  ?>
  Aku adalah angka <b><?=$value;?></b><br>
  <?php $value = $value*5; ?>
  Jika aku dikali 5, maka aku sekarang menjadi <b><?=$value;?></b><br>
  <?php $value = $value/2; ?>
  Jika aku dibagi 2, maka aku sekarang menjadi <b><?=$value;?></b><br>
  <?php $value = $value+75; ?>
  Jika aku ditambah 75, maka aku sekarang menjadi <b><?=$value;?></b><br>
  <?php $value-=20; ?>
  Jika aku dikurang 20, maka aku sekarang menjadi <b><?=$value;?></b><br>
  

</body>
</html>