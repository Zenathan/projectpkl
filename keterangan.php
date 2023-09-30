<!DOCTYPE html>
<html lang="en">
<head>


    <?php 
     require 'function.php';
        $admin = query("select * from tb_absen"); 

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
    <!-- Title Page-->
    <title>Keterangan</title>

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
                            <a href="admin.php">
                                <i></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="data-user.php">
                                <i></i>Data Admin</a>
                        </li>
                        <li>
                            <a href="data-absen">
                                <i></i>Data Presensi</a>
                        </li>
                        <li>

    </div>

    <div class="data">
        <div class="isi">
        <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">

                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                        <tr class="tr1">
                                 <td>No</td>   
                                 <td>NIP</td>
                                 <td>Nama</td>
                                 <td>Keterangan</td>
                                 <td class="text-right">Alasan</td>
                                 <td class="text-right">Waktu</td>
                                 <td>Bukti</td>
                               
                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                            

                                            $no = 1;
                                          
                                                
                                            
                                         ?>
                                        <tbody>
                                           
                                           <?php 
                                           $no++;
                                            include 'paging_ket.php';

                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
    </div>
    </div>

</body>
</html>
