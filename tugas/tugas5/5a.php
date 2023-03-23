<?php 
$film = [
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Rayhan', 
  'nrp' => '121' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Rizza', 
  'nrp' => '123' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Daffa', 
  'nrp' => '113' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Salman', 
  'nrp' => '108' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Faris', 
  'nrp' => '126' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Fawwas', 
  'nrp' => '114' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Naufal', 
  'nrp' => '131' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://edlink.id/assets/img/default-male.svg',
  'nama' => 'Rizal', 
  'nrp' => '125' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://storage.googleapis.com/assets-edlink/p/thumb-b51ddc72304c9cb201e5909690791151d11989d0214fe9a8e36033334b0b3931-img-20230205-195500-4076372486254517280.jpg',
  'nama' => 'Anin', 
  'nrp' => '109' ,
  'jurusan' => 'Informatika' ,
  
  ],
  [
  'poster' => 'https://storage.googleapis.com/assets-edlink/p/thumb-2ab06e9372dd1cb6efb12460fc55bb144ca9da8f72d76f5b78fa2a6742f99efb-img-20220927-145943-8319485288310128818.jpg',
  'nama' => 'Humaira', 
  'nrp' => '107' ,
  'jurusan' => 'Informatika' ,
  
  ],
  
  ];

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h2> Daftar Mahasiswa</h2>

  <?php foreach ($film as $f) {?>
  <ul>
    <li> <img src= '<?=$f['poster']?>' > </li>
    <li> Nama : <?=$f['nama']?> </li>
    <li> NRP : 223040<?=$f['nrp']?> </li>
    <li> Jurusan : <?=$f['jurusan']?> </li>
    <li> Email : <?=$f['nama']?>@gmail.com </li>
   
  </ul>
  <?php }?>

</body>
</html>