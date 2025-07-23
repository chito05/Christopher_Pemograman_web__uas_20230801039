<link rel="stylesheet" href="css/style.css">
<?php
include '../config/koneksi.php';
$result = mysqli_query($koneksi, "SELECT pesanan.*, users.nama FROM pesanan JOIN users ON pesanan.user_id = users.id");
?>

<h2>Data Pesanan</h2>
<a href="tambah.php">+ Tambah</a>
<table border="1">
<tr><th>Nama</th><th>Layanan</th><th>Berat</th><th>Tanggal</th><th>Status</th><th>Aksi</th></tr>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['jenis_layanan'] ?></td>
    <td><?= $row['berat_kg'] ?> kg</td>
    <td><?= $row['tanggal'] ?></td>
    <td><?= $row['status'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
