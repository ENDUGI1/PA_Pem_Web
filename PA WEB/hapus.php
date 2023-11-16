<?php
session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
    exit();
}
if (!isset($_SESSION['login']) || ($_SESSION['login'] !== true) || (isset($_SESSION['username']) && $_SESSION['username'] !== 'admin')){
    header('Location: home.php');
    exit();
}
require "koneksi.php";
$id = $_GET['id'];
$get_gambar = mysqli_query($conn, "SELECT gambar FROM data_baju WHERE id = $id");

$data_old = mysqli_fetch_array($get_gambar);
unlink("img/assets/".$data_old['gambar']);

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