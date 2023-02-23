<?php 
$jmlh_angkot = 10;
$rusak = 4;
$angkot = 1  ; 
while  ($angkot <= $jmlh_angkot - $rusak ) {
    echo "Angkot no.  $angkot beroperasi dengan baik. <br>" ;
    $angkot += 1 ;
}
for ($angkot; $angkot <= $jmlh_angkot; $angkot++){
    echo "Angkot no.  $angkot sedang rusak. <br>" ;
}

?>