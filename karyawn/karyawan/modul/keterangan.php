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
    <title>Absensi Karyawan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./karyawan.css">
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
            <img src="<?php echo $_SESSION['fotosi'];?>" alt="">
            <br><br>
            <h2><?php echo $_SESSION['namasi']; ?></h2>
        </center>
        <br>
        <li class="active has-sub">
                        <li>
                            <a href="./index.php?m=admin">
                                <i></i>Dashboard</a>
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
                <form action="karyawan/modul/keterangan_sv.php" method="post" enctype="multipart/form-data">
                  <div class="form-group2">
                                <table>
                                        
                                        <tbody>
                                        <tr class="broke">
                                        <a href="./index.php?m=admin">Kembali</a>
                                                 <td colspan="2"><input type="text" readonly="" name="id"></td>
                                              </tr>
                                            <tr>
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
                                            	<td>Keterangan</td>
                                            	<td><select name="keterangan" required="">
                                            		<option></option>
                                            		<option>Sakit</option>
                                            		<option>Izin</option>
                                            	</select></td>
                                            </tr>

                                            <TR>
                                            	<td>Alasan</td>
                                            	<td><textarea name="alasan" class="form-control" required=""></textarea></td>
                                            </TR>

                                             <tr>
                                                <td>Waktu</td>
                                                <td><input readonly="" type="text" class="form-control" value="<?php echo date('l, d-m-Y h:i:s a' ); ?>" name="waktu"></td>
                                            </tr>

                                           <tr>
                                              <td>Foto Surat Keterangan</td>
                                              <td><input type="file" required="" name="bukti"></td>
                                           </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan" >Beri Keterangan</button></td>
                                                <td><input type="reset" name="" value="Batal" class="batong2"></td>
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>
 
                                       
                            
                                    
                                </div>    
                        </div>


</body>
</html>
