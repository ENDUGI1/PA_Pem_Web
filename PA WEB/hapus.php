<?php
session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
}
require "koneksi.php";
$id = $_GET['id'];


$result = mysqli_query($conn,"DELETE FROM data_baju WHERE id = '$id'");

if ($result) {
    echo "
    <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'dashboard.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Hapus!');
        document.location.href = 'dashboard.php'
    </script>";
}

?>