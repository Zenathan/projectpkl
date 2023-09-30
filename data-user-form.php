<?php
   require 'function.php';
    if(isset($_POST['submit']))
    
    if(tambah_admin($_POST)> 0 ) {
        echo " <script>
        alert('Data Berhasil Ditambahkan')
        document.location.href = 'data-user.php';   
        </script>";
    }

    session_start();
        if (!isset($_SESSION['username'])) {
            header("location: index.php");
        }else {
            $username = $_SESSION['username'];  
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="datauser.css">
    <title>Tambah Admin</title>
</head>
<body>
    <input type="checkbox" id="menu">
    <nav>
        <label>
            <img src="https://radartasik.id/wp-content/uploads/2023/07/Logo-Radar-Tasikmalaya-ID-Biru-420-120.png">  
    </label>
    </div>
        <ul>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <label for="menu" class="menu-bar">
            <i class="fa fa-bars"></i>
        </label>
    </nav>
    <div class="kiri">
        <center>
        <img src="admin.png" alt="">
            <br><br>
            <h2><?php echo $_SESSION['username']; ?></h2>
        </center>

        <br>
        <li class="active has-sub">
                        <li>
                            <a href="admin.php">
                            <i></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="data-user.php">
                            <i></i>Data Admin</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                            <i></i>Data Presensi</a>
                        </li>
                        <li>

    </div>

    <div class="data">
        <div class="isi">
            <div class="dataform">
                 <form method="POST">
                <h1>Tambah User</h1>
              <div class="box">
                <div class="bag1">
                <label for="username">Username</label>
                <input type="text"  name="username" />
                <label for="password">Password</label>
                <input type="password" name="password"/>
                <div class="boxbut">
                <button type="submit" name="submit">Simpan</button>
                </div>
                
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
