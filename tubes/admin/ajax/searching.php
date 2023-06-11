<?php
require '../view/function.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM
            books
            WHERE
            judul LIKE '%$keyword%' OR
            pelajaran LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            link LIKE '%$keyword%'
            ";
$books = query($query);

?>


                  
<?php if ($books) :  ?>
        <table class="table table-hover table-lg">
            <thead>
                <tr>
                <th>No.</th>
                <th>judul</th>
                <th>pelajaran</th>
                <th>pengarang</th>
                <th>deskripsi</th>
                <th>link</th>
                <th>gambar</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            <?php foreach ($books as $row): ?>
            <tr>
            <td><?=$i;?></td>
            <td><?=$row['judul'];?></td>
            <td><?=$row['pelajaran'];?></td>
            <td><?=$row['pengarang'];?></td>
            <td><?=$row['deskripsi'];?></td>
            <td><?=$row['link'];?></td>
            <td>
                <img src="../assets/img/<?=$row['gambar'];?>" width="80" >
            </td>
            <td>
                <a class="badge text-bg-primary" href="ubah_view.php?id=<?=$row['id'];?>">Update</a> 
                <a class="badge text-bg-danger" href="hapus_view.php?id=<?=$row['id'];?> " onclick="return confirm('apakah anda yakin akan menghapus ?');">Delete</a>
            </td>

            </tr>
            <?php $i++;?>
            <?php endforeach;?>
            </tbody>
        </table>
<?php else :  ?>
        <div class="row">
            <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                Book(s) not found!
            </div>
            </div>
        </div>
<?php endif; ?>




