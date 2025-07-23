<?php
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pesanan WHERE id=$id");
header("Location: admin.php");
