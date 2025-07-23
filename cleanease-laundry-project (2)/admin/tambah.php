<link rel="stylesheet" href="css/style.css">
<?php
include '../config/koneksi.php';
if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $jenis = $_POST['jenis_layanan'];
    $berat = $_POST['berat_kg'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO pesanan (user_id, jenis_layanan, berat_kg, tanggal) 
              VALUES ('$user_id', '$jenis', '$berat', '$tanggal')";
    mysqli_query($koneksi, $query);
    header("Location: admin.php");
}
?>

<form method="POST">
    ID User: <input type="number" name="user_id"><br>
    Layanan: 
    <select name="jenis_layanan">
        <option>Cuci Kering</option>
        <option>Cuci Setrika</option>
    </select><br>
    Berat (kg): <input type="number" name="berat_kg"><br>
    Tanggal: <input type="date" name="tanggal"><br>
    <button type="submit" name="submit">Tambah</button>
</form>
