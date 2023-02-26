<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .kotak{
      height: 80px;
      width: 80px;
      border: 1px solid black;
      text-align: center;
      line-height: 60px;
    }
  </style>
</head>
<body>

</body>
</html>

<?php
for ($i = 0; $i < 5; $i++) {
    echo '<div style = "display:flex">';
    for ($j = 0; $j < 5; $j++) {
        if ($i % 2 == 0) {

            if ($j % 2 == 0) {
                echo "<div class = 'kotak' style = 'background-color:black;'>" . " " . "</div>";
            } else {
                echo "<div class = 'kotak' style= 'background-color:white;'>" . "" . "</div>";
            }
        } else {
            if ($j % 2 == 1 ) {
                echo "<div class = 'kotak' style = 'background-color:black;'>" . " " . "</div>";
            } else {
                echo "<div class = 'kotak' style= 'background-color:white;'>" . " " . "</div>";
            }
        }

    }
    echo '</div>';

}
?>
