<?php
//cek apakah tombol sudah ditekan atau belum
require 'function.php';
include ('../partial/header_admin.php'); 

$id = $_GET["id"];

$bks = query("SELECT * FROM books WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {

        echo "
            <Script>
              alert ('data berhasil diubah!');
              document.location.href = 'dashboard_view.php';
            </Script>
      ";
    } else {
        echo "
          <Script>
            alert ('data gagal di ubah!');
            document.location.href = 'dashboard_view.php';
          </Script>
    ";
    }

}
?>

<section>
            <div class="row" id="main">
                <div class="col-12 col-xl-8">
                    <div class="card">
                    <div class="container mt-3">
  <h1>Update Data Buku</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$id;?>">
     <input type="hidden" name="gambarLama" value="<?=$bks["gambar"];?>">
        <div class="mb-3 w-25">
          <label for ='judul' class="form-label"> judul:</label>
          <input type="text" name="judul" id="judul" class="form-control" value="<?= $bks['judul']; ?>">
        </div>
        <div class="mb-3" class="form-label">
        <label for="pelajaran">Pelajaran:</label>
          <select id="pelajaran" name="pelajaran" class="form-control" value="<?= $bks['pelajaran']; ?>">
            <option value="mathematics" >mathematics</option>
            <option value="physics">physics</option>
            <option value="chemistry">chemistry</option>
            <option value="biology" >biology</option>
          </select>
        </div>
        <div class="mb-3">
          <label for ='pengarang'class="form-label"> pengarang:</label>
          <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= $bks['pengarang']; ?>" >
        </div>
        <div class="mb-3">
        <label for ='deskripsi' class="form-label" > deskripsi:</label>
          <textarea class="white-space :pre-wrap; form-control" type="text" name="deskripsi" id="deskripsi" size="200"  value="<?= $bks['deskripsi']; ?>"></textarea>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <div>
        <label for ="link" class="form-label"> link:</label>
          <input type="text" name="link" id="link" class="form-control" value="<?= $bks['link']; ?>">
        </div>
        <button class="btn btn-primary my-3" type="submit" name="submit">Update Data</button>
      </form>
    </div>
  </div>

</div>
                    </div>         
                </div>         
            </div>         
</section>


<?php include ('../partial/footer_admin.php'); ?>