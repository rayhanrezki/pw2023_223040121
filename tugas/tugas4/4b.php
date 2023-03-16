<?php
$hardware = ["motherboard", "processor", "hard disk", "pc cooler", "vga card", "ssd"];

?>
<html>
<head>
    <title>Tugas 4b</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    
    <ol>
        <?php foreach($hardware as $h) { ?>
        <li><?= $h ?></li>
        <?php } ?>
    </ol>
    
    <?php 
        array_push($hardware, "card reader", "modem");
        sort($hardware);
    ?>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php foreach($hardware as $h) { ?>
        <li><?= $h ?></li>
        <?php } ?>
    </ol>
</body>
</html>