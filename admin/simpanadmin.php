<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // koneksi ke database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'pendaftaranOnline';
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // cek koneksi
    if (!$conn) {
        die('Koneksi gagal: ' . mysqli_connect_error());
    }

    // simpan data ke database
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $sekolah_pt = $_POST['sekolah_pt'];

    // simpan file ke server dan ambil pathnya
    $pas_foto = 'uploads/' . $_FILES['pas_foto']['name'];
    move_uploaded_file($_FILES['pas_foto']['tmp_name'], $pas_foto);

    $surat_pengantar = 'uploads/' . $_FILES['surat_pengantar']['name'];
    move_uploaded_file($_FILES['surat_pengantar']['tmp_name'], $surat_pengantar);

    $surat_aktif = 'uploads/' . $_FILES['surat_aktif']['name'];
    move_uploaded_file($_FILES['surat_aktif']['tmp_name'], $surat_aktif);

    $cv = 'uploads/' . $_FILES['cv']['name'];
    move_uploaded_file($_FILES['cv']['tmp_name'], $cv);

    // query untuk menyimpan data ke database
    $sql = "INSERT INTO pendaftaran (nama, alamat, no_telp, email, nim, jurusan, sekolah_pt, pas_foto, surat_pengantar, surat_aktif, cv)
        VALUES ('$nama', '$alamat', '$no_telp', '$email', '$nim', '$jurusan', '$sekolah_pt', '$pas_foto', '$surat_pengantar', '$surat_aktif', '$cv')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan!";
        echo "<script>
            var r = confirm('Kembali ke halaman admin?');
            if (r == true) {
                window.location.href = 'halamanadmin.php';
            } else {
                window.location.href = 'tambahdata.php';
            }
          </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);


    ?>

    <a href="../admin/halamanadmin.php">kembali</a>
</body>

</html>