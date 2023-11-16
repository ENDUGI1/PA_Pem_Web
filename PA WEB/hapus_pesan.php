<?php
session_start();
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: index.php');
    exit();
}
require "koneksi.php";
$id = $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM data_kontak WHERE id = '$id'");

if ($result) {
    echo "
    <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'kontak.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Hapus!');
        document.location.href = 'kontak.php'
    </script>";
}

?>