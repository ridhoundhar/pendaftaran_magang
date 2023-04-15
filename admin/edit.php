<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pendaftaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pendaftaranOnline";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $id = $_GET['id'];

        // ambil data pendaftaran berdasarkan id
        $sql = "SELECT * FROM pendaftaran WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
    ?>
    <h1>Edit Data Pendaftaran</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"><?php echo $row['alamat']; ?></textarea><br>
        <label for="no_telp">Nomor Telepon:</label><br>
        <input type="text" id="no_telp" name="no_telp" value="<?php echo $row['no_telp']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?php echo $row['nim']; ?>"><br>
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>"><br>
        <label for="sekolah_pt">Sekolah/Perguruan Tinggi:</label><br>
        <input type="text" id="sekolah_pt" name="sekolah_pt" value="<?php echo $row['sekolah_pt']; ?>"><br><br>
        <input type="submit" value="Update Data">
    </form>
</body>
</html>
