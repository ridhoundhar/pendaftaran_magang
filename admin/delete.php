<?php
    // koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pendaftaranOnline";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // cek apakah pengguna yakin ingin menghapus data
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM pendaftaran WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $nama = $row['nama'];
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }

    // jika pengguna yakin ingin menghapus data, lakukan penghapusan
    if (isset($_POST['konfirmasi_hapus'])) {
        $sql = "DELETE FROM pendaftaran WHERE id=$id";
        mysqli_query($conn, $sql);

        // tutup koneksi ke database
        mysqli_close($conn);

        // redirect kembali ke halaman admin
        header("Location: halamanadmin.php");
        exit();
    }

    // tutup koneksi ke database
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Penghapusan Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Konfirmasi Penghapusan Data</h1>

    <p>Apakah Anda yakin ingin menghapus data pendaftaran magang dengan nama <strong><?php echo $nama; ?></strong>?</p>

    <form method="POST" action="">
        <input type="submit" name="konfirmasi_hapus" value="Ya, hapus data">
        <a href="halamanadmin.php"><input type="button" value="Tidak, kembali"></a>
    </form>
</body>
</html>

