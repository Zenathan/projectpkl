
<?php 

  include_once "../function.php";

  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM tb_karyawan WHERE username='$username' AND password='$password'";
  $login=mysqli_query($conn,$sql);
  $ketemu=mysqli_num_rows($login);
  $b=mysqli_fetch_array($login);

  if($ketemu>0){
    session_start();
    $_SESSION['idsi']   = $b['id_karyawan'];
    $_SESSION['usersi'] = $b['username'];
    $_SESSION['namasi'] = $b['nama'];
    $_SESSION['agamasi'] = $b['agama'];
    $_SESSION['jenkelsi'] = $b['jeniskel'];
    $_SESSION['ttlsi']  = $b['tanglahir'];
    $_SESSION['alamatsi'] = $b['alamat'];
    $_SESSION['teleponsi'] = $b['ntelp'];
    $_SESSION['fotosi'] = $b['foto'];
    header("location: index.php?m=admin");
}else{
    
    echo '<script language="javascript">';
        echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
    header("location: login_karyawan.php");
}
  

 ?>

