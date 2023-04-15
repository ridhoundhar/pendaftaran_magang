<!DOCTYPE html>
<html>

<head>
  <title>Formulir Pendaftaran</title>
  <link rel="stylesheet" href="css/.css">
  <link rel="shortcut icon" href="assets/image/faviconU.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="utama.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <style>
    body {
      background-image: linear-gradient(to top, #617578, #04a6c626);
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
    }

    .container {
      width: 700px;
      margin: 100px 0 0 300px;
      padding: 10px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      box-shadow: -1px 0 0 0;
      color: #000000;
    }

    #toggle-nav {
      position: absolute;
      top: 50px;
      right: 50px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: rgb(255, 255, 255);
      cursor: pointer;
      background-image: url('assets/image/faviconU.png');
      background-size: cover;
    }

    /* navbar */
    .nav {
      position: fixed;
      right: -100px;
      list-style: none;
      width: 60px;
      transition: opacity 0.3s ease, transform 0.3s ease;
    }


    .nav li {
      display: block;
    }

    .nav li a {
      display: block;
      padding: 20px 20px;
      color: #9a9a9a;
      text-decoration: none;
      transition: background-color 0.3s ease-in-out;
    }

    .nav li a:hover {
      color: #333;
      border-radius: 20px;
    }

    .nav-item a:before {
      content: attr(data-title);
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      background-color: #333;
      color: #fff;
      padding: 5px;
      border-radius: 5px;
      opacity: 0;
      transition: opacity 0.3s ease-in-out, left 0.3s ease-in-out;
    }

    .nav-item a:hover:before {
      opacity: 1;
      left: -120%;
    }

    .nav.show {
      display: block;
      position: fixed;
      right: 0;
      top: 250px;
      list-style: none;
      width: 60px;
      padding: 0;
      margin: 0;
      background-color: #f1f1f1;
      border-radius: 20px;
      display: block;
      transform: translateX(10px);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .nav.show .nav-item {
      margin-bottom: 10px;
    }


    h1 {
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    input[type="file"] {
      margin-top: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>

<body>


  <div class="togle">
    <button id="toggle-nav"></button>
    <ul class="nav">
      <li class="nav-item"><a href="hUtama.php" data-title="Home"><i class="fas fa-home"></i></a></li>
      <li class="nav-item"><a href="about.php" data-title="About"><i class="fas fa-user"></i></a></li>
      <li class="nav-item"><a href="contac.php" data-title="Contac"><i class="fas fa-envelope"></i></a></li>
      <li class="nav-item"><a href="login.php" data-title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
    </ul>
  </div>
  <h1>Formulir Pendaftaran</h1>
  <?php
  // Memeriksa apakah ada file yang diunggah pada form pendaftaran
  if (isset($_FILES['pas_foto']) || isset($_FILES['surat_pengantar']) || isset($_FILES['surat_aktif']) || isset($_FILES['cv'])) {
    // Mendapatkan nama file dari inputan form
    $pas_foto = $_FILES['pas_foto']['name'];
    $surat_pengantar = $_FILES['surat_pengantar']['name'];
    $surat_aktif = $_FILES['surat_aktif']['name'];
    $cv = $_FILES['cv']['name'];

    // Menampilkan gambar yang diunggah
    echo "<h2>Gambar yang diunggah:</h2>";
    echo "<img src='uploads/$pas_foto' width='200px'><br>";

    // Menampilkan file yang diunggah
    echo "<h2>File yang diunggah:</h2>";
    echo "<ul>";
    echo "<li><a href='uploads/$surat_pengantar'>$surat_pengantar</a></li>";
    echo "<li><a href='uploads/$surat_aktif'>$surat_aktif</a></li>";
    echo "<li><a href='uploads/$cv'>$cv</a></li>";
    echo "</ul>";
  }
  ?>
  <form method="POST" action="simpan.php" enctype="multipart/form-data">
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
    <input type="submit" value="Submit" id="daftar">
  </form>


  <script>

  </script>
</body>

</html>