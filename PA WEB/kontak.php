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
require 'koneksi.php';

// Mendapatkan semua data dari tabel data_kontak
$result = mysqli_query($conn, "SELECT * FROM data_kontak");
$data_kontak = [];

while ($row = mysqli_fetch_assoc($result)){
    $data_kontak[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
    <!-- Tambahkan stylesheet atau styling lainnya sesuai kebutuhan -->
    <style>
         body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("./header-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .dashboard {
            display: flex;
           
        }

   

        .dash-container {
            flex: 1;
            padding: 20px;
            
            
        }

        .dash-side-bar img {
            width: 100px;
            margin-bottom: 20px;
        }

        .dash-side-bar ul {
            list-style: none;
            padding: 0;
        }

        .dash-side-bar ul li {
            padding: 10px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dash-side-bar ul li:hover {
            background-color: #555;
        }

        .settings {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .settings img {
            width: 20px;
            margin-right: 10px;
        }

        .dash-nav-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .dash-nav-icon {
            display: flex;
            align-items: center;
        }

        .dash-nav-icon svg {
            margin-right: 10px;
        }

        .dash-account {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .dash-account img {
            width: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        h1, p {
            color: #333;
        }

        .dash-main {
            background-color: #fff;
            padding: 20px;
            border-radius:5px
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .leading-btn {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            gap: 1rem;
        }

        .add-btn, .history-btn {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            gap: 0.5em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-btn:hover, .history-btn:hover {
            background-color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        thead {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action {
            display: flex;
            justify-content: center;
        }

        .edit-btn, .delete-btn {
            padding: 5px 10px;
            margin: 0 5px;
            cursor: pointer;
            background-color: #333;
            color: #fff;
            border: none;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #555;
        }

            /* Media Queries Responsif */


                    @media (max-width: 1366px) {
            html {
                font-size: 75%;
            }
        }



        @media (max-width: 768px) {
        html {
            font-size: 62.5%; /* Mengatur ulang ukuran font */
        }

        /* Mengubah tampilan sidebar */
        .dash-side-bar {
            display: none;
        }

        /* Mengatur tata letak utama untuk menyesuaikan lebar layar */
        .dash-container {
            width: 100%;
            padding: 10px;
        }

        /* Mengubah tampilan tombol untuk tata letak vertikal */
        .leading-btn {
            flex-direction: column;
        }
    }

    /* Media query untuk layar dengan lebar kurang dari atau sama dengan 450px */
    @media (max-width: 450px) {
        html {
            font-size: 55%; /* Mengatur ulang ukuran font untuk layar yang lebih kecil */
        }

        /* Menampilkan kembali gambar di dalam tabel pada layar kecil */
        table td img {
            display: block;
            max-width: 100%; /* Membuat gambar tidak melebihi lebar parent */
            height: auto; /* Menjaga aspek rasio gambar */
        }
    }


    </style>
</head>
<body>
<div class="dashboard">
        <nav class="dash-side-bar">
            <img src="" alt="">
        </nav>
        <main class="dash-container">
            <section class="dash-nav-bar">
                <div class="dash-account">
                    <img src="" alt="">
            </section>
            <section class="dash-main">
                <h1>Admin Endugi Clothes</h1>
                <?php
                date_default_timezone_set('Asia/Makassar');?>
                <p>Today: <?php echo date("l, d F Y, H:i:s T"); ?></p>
                <hr><br>
                <div class="leading-btn">
                    <a href = "dashboard.php"><button class="add-btn">Kembali</button></a>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Hp</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($data_kontak as $data_kontak) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $data_kontak["nama"] ?></td>
                            <td><?php echo $data_kontak["email"] ?></td>
                            <td><?php echo $data_kontak["nomor_hp"] ?></td> 
                            <td><?php echo $data_kontak["pesan"] ?></td>                     
                            <td class="action">
                                <a href="hapus_pesan.php?id=<?php echo $data_kontak["id"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
                
            </section>
        </main>
        
    </div>
    
</body>

</body>
</html>
