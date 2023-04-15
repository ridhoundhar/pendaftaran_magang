<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
  <link rel="icon" href="assets/image/faviconU.png" type="image/x-icon">
  <link rel="stylesheet" href="css/.css">
  <style>
    .container_login {
      float: right;
      width: 30%;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
    }

    .container_login .login {
      margin: 150px 20px 0px 0px;
      width: 350px;
      padding: 10px;
      border-radius: 10px;
    }

    .login input {
      width: 100%;
      height: 38px;
      padding: 2px 0 0 20px;
      border: none;
      outline: none;
      border-radius: 10px;
      box-sizing: border-box;
      box-shadow: 1px 1px 1px;
    }

    .login button {
      width: 100%;
      height: 38px;
      border: none;
      outline: none;
      border-radius: 10px;
      box-sizing: border-box;
      box-shadow: 1px 1px 1px;
      background-color: #12c7f8;
      color: #fff;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .login button:hover {
      background-color: #fff;
      color: #12c7f8;
      box-shadow: 2px 2px 2px #12c7f8;
    }

    img {
      max-width: 50%;
      height: auto;
      float: left;
      left: 70px;
      position: fixed;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      height: 38px;
      padding: 2px 0 0 20px;
      border: none;
      outline: none;
      border-radius: 10px;
      box-sizing: border-box;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
      margin-bottom: 20px;
    }

    input[type="submit"] {
      width: 100%;
      height: 38px;
      border: none;
      outline: none;
      border-radius: 10px;
      box-sizing: border-box;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
      background-color: #12c7f8;
      color: #fff;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #fff;
      color: #12c7f8;
      box-shadow: 2px 2px 2px #12c7f8;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    a {
      color: black;
      text-decoration: none;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <img src="assets/image/bgLogin.jpg" alt="potos">
  <div class="container_login">

    <div class="login">

      <h2>Log In</h2><br>
      <?php
      if (isset($_POST['login'])) {
        // koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pendaftaranOnline";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // memeriksa tipe pengguna
        if ($_POST['tipe_pengguna'] == 'admin') {
          // memeriksa informasi login admin
          $username = $_POST['username'];
          $password = $_POST['password'];
          $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) == 1) {
            // login sukses, arahkan ke halaman admin
            header("Location: admin/halamanadmin.php");
            exit();
          } else {
            echo "Username atau password salah!";
          }
        } else if ($_POST['tipe_pengguna'] == 'user') {
          // memeriksa informasi login user
          $username = $_POST['username'];
          $password = $_POST['password'];
          $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) == 1) {
            // login sukses, arahkan ke halaman user
            header("Location: user/hUtama.php");
            exit();
          } else {
            echo "Username atau password salah!";
          }
        } else {
          echo "Silakan pilih tipe pengguna!";
        }
        if (mysqli_query($conn, $sql)) {
          // echo "Data berhasil disimpan";
        } else {
          echo "Terjadi kesalahan: " . mysqli_error($conn);
        }


        // tutup koneksi ke database
        mysqli_close($conn);
      }
      ?>
      <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <label>Tipe Pengguna:</label>
        <select name="tipe_pengguna">
          <option value="">-- Pilih --</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select><br><br>
        <button type="submit" name="login">Log In</button><br><br>
        <a href="gantipw.php">Lupa Password?</a>
        <a href="register.php">Register</a>
      </form>

    </div>
  </div>


</body>

</html>