<link rel="stylesheet" href="css/style.css">
<?php
include 'config/koneksi.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";
    mysqli_query($koneksi, $query);
    header("Location: login.php");
}
?>

<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit" name="register">Daftar</button>
</form>
