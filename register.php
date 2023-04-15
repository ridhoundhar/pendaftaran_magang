<!DOCTYPE html>
<html>

<head>
  <title>Halaman Register</title>
  <link rel="icon" href="assets/image/faviconU.png" type="image/x-icon">

  <style>
    .container_register {
      width: 30%;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .container_register .register {
      margin: auto;
      width: 500px;
      padding: 10px;
    }

    .register input {
      width: 100%;
      height: 38px;
      padding: 2px 0 0 20px;
      border: none;
      outline: none;
      border-radius: 10px;
      box-sizing: border-box;
      box-shadow: 1px 1px 1px;
    }

    .register button {
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

    .register button:hover {
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
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
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

    a {
      color: black;
      text-decoration: none;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <div class="container_register">
    <div class="register">
      <form action="admin/rsimpan.php" method="POST">
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Sig Up">
        <p>Sudah punya akun?</p>
        <a href="login.php">Register</a>
      </form>
    </div>


  </div>
</body>

</html>