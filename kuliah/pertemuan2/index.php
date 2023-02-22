<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    
   <h1>
    <?php echo 'Hello World!'; ?>
   </h1>

<h3>
<?php echo 'Pemrograman Web'; ?>
</h3>

<p>
    <?php Echo "Jum'at"; ?>
    <?php echo '"semua"'; ?>
</p>
<p>
    <?php echo "\"PENGUMUMAN HARI\" : Hari Jum'at Libur "; ?>
</p>
<p>
    <?php echo '"PENGUMUMAN HARI" : Hari Jum\'at Libur '; ?>
</p>
<p>
    <?php echo '"PENGUMUMAN HARI"' . ": Hari Jum\'at Libur" ; ?>
</p>
   
<hr>

<?php 
    $nama_depan = "Alfa";
    $nama_belakang = "Rezki";
?>

<h2>
    <?php echo "Hello, $nama_depan $nama_belakang!"; ?>
</h2>


    </body>
    </html>