<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2c.php</title>
  <style>
    .kotak{
      height: 60px;
      width: 60px;
      border: 1px solid black;
      background-color: salmon;
      text-align: center;
      line-height: 60px;

    }
  </style>
</head>
<body>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo '<div style = "display:flex">';
    for ($j = 1; $j <= 11 - $i; $j++) {
        echo '<div class ="kotak">' .'<b>'. $j . '</b>'  . '</div>';
    }
    echo '<br>';
    echo '</div>';
}
?>
  
</body>
</html>
