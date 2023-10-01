<!DOCTYPE html>
<html lang="en">
<head>

<!-- $admin = query("select * from admin"); 

        session_start();
        if (!isset($_SESSION['username'])) {
            header("location: index.php");
        }else {
            $username = $_SESSION['username'];  
        } -->
    <?php 

     date_default_timezone_set('Asia/Jakarta'); 
         ?>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Title Page-->
    <title>Presensi Karyawan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="karyawan.css">
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
            <img src="<?php echo $_SESSION['fotosi'];?>">
            <br><br>
            <h2><?php echo $_SESSION['namasi']; ?></h2>
        </center>
        <br>
        <li class="active has-sub">
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
    </div>
 
    <?php
                                    $id = $_SESSION['idsi'];
                                    include '../function.php';
                                    $sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'";
                                    $query = mysqli_query($conn, $sql);
                                    $r = mysqli_fetch_array($query);

                                     ?>
    <div class="data">
        <div class="isi">
        <div class="duh">

    <table class="batong"> 
      <tr>
          <td> 
          <a href="?m=karyawan&s=keterangan"><button>Jika Tidak Hadir / Absen</button></a>
          </td>
      </tr>
      </table>



      </div>  
        <form action="dt_absen_sv.php" method="post">
                                <div class="form-group">
                                <table>
                                        
                                        <tbody>
                                            <tr>
                                                <td>NIP</td>
                                                <td>
                                                
                                                <input type="text" readonly="" class="form-control" name="id_karyawan" autocomplete="off" size="25px" maxlength="25px" value="<?php echo $_SESSION
                                                ['idsi'];?>">    
                                                
                                            </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" name="nama" autocomplete="off" readonly="" value="<?php echo $_SESSION['namasi']; ?>"></td>
                                            </tr>

                                             <tr>
                                                <td>Waktu</td>
                                                <td><input type="text" class="form-control" value="<?php echo date('l, d-m-Y h:i:s a' ); ?>" name="waktu" readonly="" ></td>
                                            </tr>

                                           <tr>
                                              
                                           </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                    
                                    <table class="batong2"> 
                                    <tr>
                                        <td> 
                                        <button type="submit" name="simpan">Present</button>
                                    </td>
                                    </tr>

                              </div>    
                          </div>
                      </div>
        </form>
    </div>
    
                
</body>
</html>
