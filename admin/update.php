<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pendaftaranOnline";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $sekolah_pt = $_POST['sekolah_pt'];

    // update data pendaftaran
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', no_telp='$no_telp', email='$email', nim='$nim', jurusan='$jurusan', sekolah_pt='$sekolah_pt' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // alert ketika data berhasil diupdate
    if ($query) {
        echo "<script>alert('Data berhasil diupdate.')</script>";
    } else {
        echo "<script>alert('Data gagal diupdate.')</script>";
    }

    // redirect kembali ke halaman daftar pendaftar
    echo "<meta http-equiv='refresh' content='0; url=halamanadmin.php'>";
    exit();
?>
