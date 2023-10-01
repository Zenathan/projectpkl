<?php
   require 'function.php';
    if(isset($_POST['submit']))
    
    if(tambah($_POST)> 0 ) {
        echo " <script>
        alert('Data Berhasil Ditambahkan')
        document.location.href = 'admin.php';   
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
    <link rel="stylesheet" href="admin-formstyle.css">
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
                        <li>
                            <a href="data-absen.php">
                            <i></i>Data Presensi</a>
                        </li>


    </div>

    </div>

    <div class="data">
        <div class="isi">
            <div class="dataform">
                 <form method="POST">
                <h1>Tambah Karyawan</h1>
                <div class="box">
                    <div class="bag1">
                <label for="id">NIP</label>
                <input type="text" name="id_karyawan" />
                <label for="nama">Nama</label>
                <input type="text" name="nama" />
                <label for="username">Username</label>
                <input type="text" name="username" />
                <label for="password">Password</label>
                <input type="text" name="password" />
                <label for="tanglahir">Tempat Tanggal Lahir</label>
                <input type="text" name="tanglahir" />
                <label for="alamat">Alamat</label>
                <!--<input type="text"   name="alamat"/> !-->
                <div class="textar">
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>

                </div>
                </div>
              
                <div class="bag2">
                <label for="agama">Agama</label>
                <select class="form-control" required="" name="agama">
                <option>--</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katholik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>KongHuCu</option>
                 </select>
                 
                 <label for="jeniskelamin">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskel">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki Laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>

                <label for="nohp">No Handphone</label>
                <input phone="" type="tel" tabindex="3" required name="ntelp"/>
                <label for="foto">Foto</label>
                 <input type="file" required="" name="foto">
                                    

                <div class="boxbut">
                <button type="submit" name="submit">Simpan</button>
                
                </div>
                </div>
            </div>
            </form>
<!--<div class="box2">
    <p>&nbsp&nbspJenis Kelamin</p>
    <input type="radio" name="jk" />&nbspLaki Laki<br/><br/>
    <input type="radio" name="jk" />&nbspPerempuan
</div>
             <div class="container2">
               
                    <div class="form-group">
                        <input type="file" name="file1[]" data-multiple-caption="{count} files selected" class="file-control" multiple id="file1">
                        <label for="file1" class="la    el-file"><span>Foto</span></label>
                    </div>
                
            </div> 
-->
        </div>
    </div>
    </div>

</body>
</html>
