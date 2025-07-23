<link rel="stylesheet" href="css/style.css">
<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $status = $_POST['status'];
    mysqli_query($koneksi, "UPDATE pesanan SET status='$status' WHERE id=$id");
    header("Location: admin.php");
}
?>

<form method="POST">
    Status:
    <select name="status">
        <option <?= $data['status']=='Pending'?'selected':'' ?>>Pending</option>
        <option <?= $data['status']=='Diproses'?'selected':'' ?>>Diproses</option>
        <option <?= $data['status']=='Selesai'?'selected':'' ?>>Selesai</option>
    </select>
    <button type="submit" name="update">Update</button>
</form>
