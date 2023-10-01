<!DOCTYPE html>
<html lang="en">
<head>
<?php 
 require 'function.php';
   $userz = query("select * from userz");

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="adminstyles.css">

    <title>Data Admin</title>
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
                            <a href="data-absen.php">
                            <i></i>Data Presensi</a>
                        </li>
                        <li>


    </div>

    <div class="data">
        <div class="isi">
        <a href="data-user-form.php" target="_blank">Tambah</a>
        <table>
            <tr class="tr1">
                <td>NO</td>
                <td>Username </td>
                <td>Password</td>
                <td>Aksi</td>
              </tr>
               <?php $i =1 ?>
               <?php foreach ($userz as $row):?>
              <tr>
                <td><?= $i ?> </td>
                <td><?= $row['username']?></td>
                <td><?= $row['showpassword']?></td>
                <td><a href="#">Edit</a>&nbsp|&nbsp<a href="#">Hapus</a></td>
              </tr>
              <?php $i++ ?>
              <?php endforeach ?>
      </table>
    </div>
    </div>


</body>
</html>
