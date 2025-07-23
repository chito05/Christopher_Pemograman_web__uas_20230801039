<link rel="stylesheet" href="css/style.css">
<?php
include 'config/koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['user'] = $user;
        if ($user['role'] == 'admin') {
            header("Location: admin/admin.php");
        } else {
            header("Location: dashboard.php");
        }
    } else {
        echo "Login gagal!";
    }
}
?>

<form method="POST">
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit" name="login">Login</button>
</form>
<a href="register.php">Daftar Akun</a>
