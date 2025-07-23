<link rel="stylesheet" href="css/style.css">
<?php
include 'config/koneksi.php';
session_start();
$user = $_SESSION['user'];
$id = $user['id'];

$result = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE user_id = $id");
?>

<h2>Selamat datang, <?= $user['nama'] ?>!</h2>
<a href="order.php">+ Pesan Laundry</a> | <a href="logout.php">Logout</a>
<h3>Pesanan Anda:</h3>
<table border="1">
    <tr><th>Layanan</th><th>Berat</th><th>Tanggal</th><th>Status</th></tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['jenis_layanan'] ?></td>
        <td><?= $row['berat_kg'] ?> kg</td>
        <td><?= $row['tanggal'] ?></td>
        <td><?= $row['status'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
