<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaranOnline";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// menyertakan file koneksi.php

$user_id = $_SESSION['user_id'];

$password_lama = mysqli_real_escape_string($conn, $_POST['password_lama']);
$password_baru = mysqli_real_escape_string($conn, $_POST['password_baru']);
$konfirmasi_password_baru = mysqli_real_escape_string($conn, $_POST['konfirmasi_password_baru']);

// Periksa apakah password lama benar
$sql = "SELECT password FROM register WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$password_hash = $row['password'];

if (!password_verify($password_lama, $password_hash)) {
    $error_message = 'Password lama salah.';
    header('Location: confirmpw.php?error_message=' . urlencode($error_message));
    exit;
}

// Periksa apakah password baru dan konfirmasi password baru sama
if ($password_baru !== $konfirmasi_password_baru) {
    $error_message = 'Password baru dan konfirmasi password baru tidak sama.';
    header('Location: confirmpw.php?error_message=' . urlencode($error_message));
    exit;
}

// Update password baru ke database
$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

$sql = "UPDATE register SET password = '$password_hash' WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
}

$success_message = 'Password berhasil diubah.';
header('Location: confirmpw.php?success_message=' . urlencode($success_message));
exit;

?>