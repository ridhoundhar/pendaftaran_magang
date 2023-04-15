<!DOCTYPE html>
<html>

<head>
  <title>Tambahkan Data</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>Formulir Pendaftaran</h1>
  <form method="POST" action="simpanadmin.php" enctype="multipart/form-data">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="nama" required><br><br>
    <label for="alamat">Alamat:</label>
    <textarea name="alamat" rows="5" cols="30" required></textarea><br><br>
    <label for="no_telp">Nomor Telepon:</label>
    <input type="tel" name="no_telp" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="nim">NIM:</label>
    <input type="text" name="nim" required><br><br>
    <label for="jurusan">Jurusan:</label>
    <input type="text" name="jurusan" required><br><br>
    <label for="sekolah_pt">Sekolah/Perguruan Tinggi:</label>
    <input type="text" name="sekolah_pt" required><br><br>
    <label for="pas_foto">Pas Foto:</label>
    <input type="file" name="pas_foto" required><br><br>
    <label for="surat_pengantar">Surat Pengantar:</label>
    <input type="file" name="surat_pengantar" required><br><br>
    <label for="surat_aktif">Surat Keterangan Aktif:</label>
    <input type="file" name="surat_aktif" required><br><br>
    <label for="cv">CV:</label>
    <input type="file" name="cv" required><br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>