<?php 
require 'function.php';

$id = $_GET["id"];

if(hapus ($id) > 0){

  echo "
      <Script>
        alert ('data berhasil dihapus!');
        document.location.href = 'dashboard_view.php';
      </Script>
      ";
} else {
  echo "
    <Script>
      alert ('data gagal dihapus!');
      document.location.href = 'dashboard_view.php';
    </Script>
    ";
}

?>