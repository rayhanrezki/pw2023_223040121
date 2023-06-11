<?php include('../partial/header.php'); ?>
<?php include('../partial/nav.php'); ?>
<?php require 'function.php' ?>

<?php 
$books =query("SELECT * FROM books")
?>

<main>
    </div>

    <br><br>
<div class="row">
<?php $i = 1;?>
<?php foreach ($books as $row): ?>

  
   <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-dark"><?= $row['pelajaran']; ?></strong>
          <h3 class="mb-0"><?= $row['judul']; ?></h3>
          <div class="mb-1 text-body-secondary"><?= $row['pengarang']; ?></div>
          <p class="card-text mb-auto"><?= $row['deskripsi']; ?></p>
        <p><a class="btn btn-light" href="<?= $row['link']; ?>">Link &raquo;</a></p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="../assets/img/<?= $row['gambar']; ?>" width="180" height="220">
        </div>
      </div>
    </div>
    
  
  
  
   
    <?php $i++;?>
<?php endforeach;?>
  
</div>
   
</main>
<?php include('../partial/footer.php'); ?>