<?php 
  session_start();
  require_once("function.php");
  $username = $_POST['username'];
  $showpassword = $_POST['showpassword'];
  $sql = "SELECT * FROM userz WHERE username='$username'";
  $query = $conn->query($sql);
  $hasil = $query->fetch_assoc();

  if ($query->num_rows == 0) {
    echo "<div align='center'>Username Tidak Ada! <br> <a href='login.php'>back</a></div>";
  }else{
    if ($showpassword <> $hasil['showpassword']) {
      echo "<div align='center'>Password Salah! <br> <a href='login.php'>back</a></div>";
    }else{
      $_SESSION['username'] = $hasil['username'];
       header('location:admin.php');
    }
  }
  

 ?>