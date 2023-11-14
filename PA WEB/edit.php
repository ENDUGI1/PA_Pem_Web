<?php
session_start();
if (!isset($_SESSION['login'])){
    header('Location: index.php');
}
require "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM data_baju where id=$id");
$data_baju = [];

while ($row = mysqli_fetch_assoc($result)){
    $data_baju[] = $row;
}

$data_baju = $data_baju[0];







if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $warna = $_POST['warna'];
    $ukuran = $_POST['ukuran'];
    $gambar = $_POST['gambar'];
    
    //upload gambar
    $img = $_FILES['gambar']['name'];
    $explode = explode(',',$img);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date.$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp,'img/assets/'.$gambar_baru)) {
        $result = mysqli_query($conn, "UPDATE data_baju SET nama = '$nama', harga='$harga', warna='$warna', ukuran = '$ukuran', gambar='$gambar_baru' WHERE id = '$id' ");
            if ($result) {
                echo "
                <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'dashboard.php'
                </script>";
            }else {
                echo "
                <script>
                    alert('Data Gagal Diubah!');
                    document.location.href = 'tambah.php'
                </script>";
            
        }
    }
}

  
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
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
            margin: 0;
            padding: 0;
        }

        .add-data {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px; /* Menambahkan lebar 400px */
            text-align: center;
        }

        .add-form-container {
            text-align: center;
            border radius: 10px;
            /* box-shadow: 30px 30px 0 rgba(228, 153, 153, 0.6);
            overflow: hidden;
            position: relative; */
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        hr {
            border: 1px solid #ccc;
            margin-top: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .textfield {
            width: 80%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-btn {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $data_baju['nama']?>" class="textfield">
                <label for="harga">harga</label>
                <input type="text" name="harga" value="<?php echo $data_baju['harga']?>" class="textfield">
                <label for="warna">warna</label>
                <input type="text" name="warna" value="<?php echo $data_baju['warna']?>" class="textfield">
                <label for="ukuran">ukuran</label>
                <input type="text" name="ukuran" value="<?php echo $data_baju['ukuran']?>" class="textfield">
                <label for="gambar">Upload Gambar</label>
                <input type="file" name="gambar" value="<?php echo $data_baju['gambar']?>" class="textfield">
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>