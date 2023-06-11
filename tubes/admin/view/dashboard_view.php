<?php
include '../partial/header_admin.php';
require 'function.php';

if (isset($_GET['button-search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM books
              WHERE judul LIKE '%$keyword%' OR
                    pelajaran LIKE '%$keyword%' OR
                    pengarang LIKE '%$keyword%' OR
                    deskripsi LIKE '%$keyword%' OR
                    link LIKE '%$keyword%'";
    $books = query($query);
} else {
    $books = query("SELECT * FROM books");
}
?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <section>
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Buku</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="tambah_view.php">
                                <button class="btn btn-primary">Add+</button>
                            </a>
                            <a href="print.php">
                                <button class="btn btn-primary" value="Print semua data">Print</button>
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="get">
                                        <div class="input-group my-3">
                                            <input type="search" class="form-control" placeholder="Search Student(s).." name="keyword" id="keyword" autofocus autocomplete="off">
                                            <button class="btn btn-primary" type="submit" name="button-search" id="button-search">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="search-container">
                                <?php if ($books): ?>
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Pelajaran</th>
                                                <th>Pengarang</th>
                                                <th>Deskripsi</th>
                                                <th>Link</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($books as $row): ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row['judul']; ?></td>
                                                    <td><?= $row['pelajaran']; ?></td>
                                                    <td><?= $row['pengarang']; ?></td>
                                                    <td><?= $row['deskripsi']; ?></td>
                                                    <td><?= $row['link']; ?></td>
                                                    <td>
                                                        <img src="../assets/img/<?= $row['gambar']; ?>" width="80" height="100">
                                                    </td>
                                                    <td>
                                                        <a class="badge text-bg-primary" href="ubah_view.php?id=<?= $row['id']; ?>">Update</a>
                                                        <a class="badge text-bg-danger" href="hapus_view.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus?');">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="alert alert-danger" role="alert">
                                                Book(s) not found!
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../partial/footer_admin.php'; ?>
