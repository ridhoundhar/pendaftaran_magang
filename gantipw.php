<!DOCTYPE html>
<html>

<head>
    <title>Halaman Konfirmasi Ganti Password</title>
</head>

<body>
    <h1>Halaman Konfirmasi Ganti Password</h1>

    <?php if (isset($success_message)): ?>
        <p style="color: green;">
            <?php echo $success_message; ?>
        </p>
    <?php endif; ?>

    <?php if (isset($error_message)): ?>
        <p style="color: red;">
            <?php echo $error_message; ?>
        </p>
    <?php endif; ?>

    <form action="#" method="POST">
        <label for="password_lama">Password Lama:</label>
        <input type="password" id="password_lama" name="password_lama" required><br>

        <label for="password_baru">Password Baru:</label>
        <input type="password" id="password_baru" name="password_baru" required><br>

        <label for="konfirmasi_password_baru">Konfirmasi Password Baru:</label>
        <input type="password" id="konfirmasi_password_baru" name="konfirmasi_password_baru" required><br>

        <input type="submit" name="submit" value="Ganti Password">
    </form>
</body>

</html>