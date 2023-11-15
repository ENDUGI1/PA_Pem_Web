<!-- untuk nampilkan kontak (kalau perlu) -->
<!-- belum pake session biar bisa langsung aja :) -->

<?php
require 'koneksi.php';

// Mendapatkan semua data dari tabel data_kontak
$result = mysqli_query($conn, "SELECT * FROM data_kontak");
$data_kontak = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
    <!-- Tambahkan stylesheet atau styling lainnya sesuai kebutuhan -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Data Kontak</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_kontak as $kontak) : ?>
                <tr>
                    <td><?php echo $kontak['id']; ?></td>
                    <td><?php echo $kontak['nama']; ?></td>
                    <td><?php echo $kontak['email']; ?></td>
                    <td><?php echo $kontak['nomor_hp']; ?></td>
                    <td><?php echo $kontak['pesan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
