<?php 

//cek apakah tombol sudah ditekan atau belum
include ('../partial/header_admin.php');
require 'function.php';

if ( isset($_POST["submit"]) ){

  if(tambah($_POST) > 0){

      echo "
            <Script>
              alert ('data berhasil ditambahkan!');
              document.location.href = 'dashboard_view.php';
            </Script>
      ";
  } else {
    echo "
          <Script>
            alert ('data gagal ditambahkan!');
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
  <h1>Tambah Data Buku</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 w-25">
          <label for ='judul' class="form-label"> judul:</label>
          <input type="text" name="judul" id="judul" class="form-control">
        </div>
        <div class="mb-3" class="form-label">
        <label for="pelajaran">Pelajaran:</label>
          <select id="pelajaran" name="pelajaran" class="form-control">
            <option value="mathematics" >mathematics</option>
            <option value="physics">physics</option>
            <option value="chemistry">chemistry</option>
            <option value="biology" >biology</option>
          </select>
        </div>
        <div class="mb-3">
          <label for ='pengarang'class="form-label"> pengarang:</label>
          <input type="text" name="pengarang" id="pengarang" class="form-control" >
        </div>
        <div class="mb-3">
        <label for ='deskripsi' class="form-label" > deskripsi:</label>
          <textarea class="white-space :pre-wrap; form-control" type="text" name="deskripsi" id="deskripsi" size="200" ></textarea>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <div>
        <label for ="link" class="form-label"> link:</label>
          <input type="text" name="link" id="link" class="form-control">
        </div>
        <button class="btn btn-primary my-3" type="submit" name="submit">Add Data</button>
      </form>
    </div>
  </div>

</div>
                    </div>         
                </div>         
            </div>         
</section>


<?php include ('../partial/footer_admin.php'); ?>