

<!-- login -->
<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM data_akun WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        var_dump($row);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            header('Location: dashboard.php');
            exit;
        }
    }
    $error = true;
}

?>



<!-- register -->
<?php
    require 'koneksi.php';

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $result = mysqli_query($conn, 'SELECT * FROM data_akun WHERE username = "$username"');

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username telah digunakan!');
                    document.location.href = 'login.php';
                </script>
            ";
        } else {
            // 92
            if($password === $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);

                $result = mysqli_query($conn, "INSERT INTO data_akun VALUES ('', '$username', '$password')");
                if(mysqli_affected_rows($conn) > 0){
                    echo "
                        <script>
                            alert('Registrasi Berhasil!');
                            document.location.href = 'login.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal!');
                            document.location.href = 'login.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Konfirmasi Password tidak sesuai!');
                        document.location.href = 'login.php';
                    </script>
                ";
            }
        }

    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN ENDUGI CLOTHES</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- boxicon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-box Register">
        <form action="" method="post">
          <div class="logo">
            <img src="./img/login/login.png" alt="" />
          </div>
          <div class="input-box">
            <i class="bx bx-user" style="color: #222"></i>
            <input type="text" id="username" name="username" required />
            <label for="username">Username</label>
          </div>
          <div class="input-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" id="password" name="password" required />
            <label for="password">Password</label>
          </div>
          <div class="input-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" id="password" name="cpassword" required />
            <label for="cpassword"> Confirm Password</label>
          </div>
          <button class="btn" name="register">Register</button>
          <a class="link" href="index.php">Back To Store</a>
          <i class="bx bx-right-arrow-alt LoginBtn"></i>
        </form>
      </div>
      <div class="form-box Login">
        <form action="" method="post">
          <div class="logo">
            <img src="./img/login/login.png" alt="" />
          </div>
          <div class="input-box">
            <i class="bx bx-user" style="color: #222"></i>
            <input type="username" id="username" name="username" required />
            <label for="username">Username</label>
          </div>
          <div class="input-box">
            <i class="bx bx-lock-alt"></i>
            <input type="password" id="password" name="password" required />
            <label for="password">Password</label>
          </div>
          <button class="btn" name="login">Login</button>
          <button class="btn">Forget Password ?</button>
          <a class="link" href="index.php">Back To Store</a><br/>
          <a class="link" href="dashboard.php">I'm Admin</a>
          <i class="bx bx-left-arrow-alt RegisterBtn"></i>
        </form>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>
