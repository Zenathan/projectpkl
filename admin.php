<!DOCTYPE html>
<html lang="en">
<head>


    <?php 
     require 'function.php';
        $admin = query("select * from tb_karyawan"); 

        session_start();
        if (!isset($_SESSION['username'])) {
            header("location: index.php");
        }else {
            $username = $_SESSION['username'];  
        }
         ?>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Fontface CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="adminstyles.css">
</head>
<body class="animsition">
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
                            <a href="#">
                                <i></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="data-user.php">
                            <i></i>Data Admin</a>
                        </li>
                        <li>
                            <a href="data-absen.php">
                            <i></i>Data Presensi</a>
                        </li>
                        <li>

    </div>

    <div class="data">
        <div class="isi">
        <a href="admin-form.php" target="_blank">Tambah</a>
        <table>
            <tr class="tr1">
                <td>NIP</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>No Hp</td>
                <td>Tanggal Lahir</td>
                <td>Aksi</td>
              </tr>
               <?php $i =1 ?>
               <?php foreach ($admin as $row):?>
              <tr>
                <td><?= $row['id_karyawan']?> </td>
                <td><?= $row['nama']?></td>
                <td><?= $row['jeniskel']?></td>
                <td><?= $row['alamat']?></td>
                <td><?= $row['ntelp']?></td>
                <td><?= $row['tanglahir']?></td>
                <td><a href="edit.php">Edit</a>&nbsp|&nbsp<a href="#">Hapus</a></td>
              </tr>
              <?php $i++ ?>
              <?php endforeach ?>
      </table>
    </div>
    </div>

</body>
</html>
