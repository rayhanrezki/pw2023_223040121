<?php
$conn = mysqli_connect("localhost", "root", "", "seed_database");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $pelajaran = htmlspecialchars($data["pelajaran"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $link = htmlspecialchars($data["link"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO books
                VALUES
                (NULL, '$judul', '$pelajaran', '$pengarang', '$deskripsi','$gambar','$link')
                ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
    alert('yg anda upload bukan gambar');
    </script>";
        return false;
    }

    if ($ukuranFIle > 100000000) {
        echo "<script>
    alert('yg anda upload terlalu besar');
    </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);
    
    return $namaFile;

}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{

    global $conn;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $pelajaran = htmlspecialchars($data["pelajaran"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $link = htmlspecialchars($data["link"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE books SET
                judul = '$judul',
                pelajaran = '$pelajaran',
                pengarang = '$pengarang',
                deskripsi = '$deskripsi',
                link = '$link',
                gambar = '$gambar'


                WHERE id = $id
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}

function registrasi($data)
{

    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $repeatpassword = mysqli_real_escape_string($conn, $data["repeatpassword"]);

    $result = mysqli_query($conn, "SELECT username FROM user
        WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert ('username sudah terdaftar')
            </script>";
        return false;
    }

    if ($password !== $repeatpassword) {
        echo "<script>
                alert ('konfimasi password tidak sesuai');
            </script>";

        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES (null,'$username','$password')");

}
