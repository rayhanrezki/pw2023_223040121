<?php 
$film = [
  [
  'poster' => 'pirate.jpg',
  'judul' => 'Pirates of the Caribbean : The Curse of the Black Pearl', 
  'tahun' => '2003',
  'genre' => ['Action','Adventure','Fantasy'],
  'pemeran utama' => 'jack sparrow',
  'sutradara' => 'Gore Vebrinski',
  ],
  [
    'poster' => 'indiana.jpg',
    'judul' => 'Indiana Jones and the Raiders of the Lost Ark',
    'tahun' => '1981',
    'genre' => ['Action','Adventure'],
    'pemeran utama' => 'Indiana jones',
    'sutradara' => 'Steven Spielberg',
  ],
  [
    'poster' => 'charlie.jpg',
    'judul' => 'Charlie and the Chocolate Factory',
    'tahun' => '2005',
    'genre' => ['Adventure','Comedy'],
    'pemeran utama' => 'Willie Wonka',
    'sutradara' => 'Tim Burton',
  ],
  [
    'poster' => 'hunter.jpg',
    'judul' => 'Hunter x Hunter',
    'tahun' =>  '2011',
    'genre' => ['Action','Adventure'],
    'pemeran utama' => 'Gon',
    'sutradara' => 'Yoshiro Togashi',
  ],
  [
    'poster' => 'one.jpg',
    'judul' => 'One piece',
    'tahun' => '1999',
    'genre' => ['Action','Adventure'],
    'pemeran utama' => 'Luffy',
    'sutradara' => 'Echiro Oda',
    ],  
  ];

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>film</title>
</head>
<body>
  <h2> FILM FAVORIT</h2>

  <?php foreach ($film as $f) {?>
  <ul>
    <li> Poster : <img src= '<?=$f['poster']?>' > </li>
    <li> Judul : <?=$f['judul']?> </li>
    <li> tahun : <?=$f['tahun']?> </li>
    <li> Genre : 
      <?php foreach ($f['genre'] as $fm){
      echo $fm ;
    }?> 
    <li> pemeran utama : <?=$f['pemeran utama']?> </li>
    </li>
    <li> sutradara : <?=$f['sutradara']?> </li>
  </ul>
  <?php }?>
</body>
</html>