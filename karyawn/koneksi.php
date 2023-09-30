<?php 
$conn = mysqli_connect("localhost", "root", "", "rplzwn");

if (mysqli_connect_error()) {
	echo "koneksi gagal " . mysql_connect_error();
}
 ?>