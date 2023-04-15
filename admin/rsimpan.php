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
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'pendaftaranOnline';
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // memeriksa apakah tombol submit telah ditekan
    if (isset($_POST['submit'])) {
        // mengambil data dari form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // membuat perintah SQL untuk menyimpan data ke tabel users
        $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";

        // menjalankan perintah SQL dan memeriksa apakah berhasil
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data berhasil disimpan');";
            echo "if(confirm('Apakah Anda ingin login sekarang?')){";
            echo "window.location.href = '../login.php';";
            echo "}</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "')</script>";
        }

    }


    // menutup koneksi
    mysqli_close($conn);
    ?>

</body>

</html>