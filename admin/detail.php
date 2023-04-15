<!DOCTYPE html>
<html>
<head>
    <title>Detail Pendaftar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Detail Pendaftar</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pendaftaranOnline";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $id = $_GET['id'];

        $sql = "SELECT * FROM pendaftaran WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
    ?>
    <table>
        <tr>
            <td>Nama Lengkap:</td>
            <td><?php echo $row['nama']; ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><?php echo $row['alamat']; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><?php echo $row['no_telp']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td>NIM:</td>
            <td><?php echo $row['nim']; ?></td>
        </tr>
        <tr>
            <td>Jurusan:</td>
            <td><?php echo $row['jurusan']; ?></td>
        </tr>
        <tr>
            <td>Sekolah/Perguruan Tinggi:</td>
            <td><?php echo $row['sekolah_pt']; ?></td>
        </tr>
        <tr>
            <td>Pas Foto:</td>
            <td><a href="<?php echo $row['pas_foto']; ?>" target="_blank">Lihat</a></td>
        </tr>
        <tr>
            <td>Surat Pengantar:</td>
            <td><a href="<?php echo $row['surat_pengantar']; ?>" target="_blank">Lihat</a></td>
        </tr>
        <tr>
            <td>Surat Keterangan Aktif:</td>
            <td><a href="<?php echo $row['surat_aktif']; ?>" target="_blank">Lihat</a></td>
        </tr>
        <tr>
            <td>CV:</td>
            <td><a href="<?php echo $row['cv']; ?>" target="_blank">Lihat</a></td>
        </tr>
    </table>
</body>
</html>
