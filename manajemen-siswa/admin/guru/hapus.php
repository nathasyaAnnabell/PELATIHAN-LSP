<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM guru WHERE id='$id'");
header("Location: index.php");
exit;
?>