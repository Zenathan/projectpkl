<?php

$conn = mysqli_connect("localhost","root","","rplzwn");

function query($query) {
    global$conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn , "DELETE FROM admin WHERE id_admin =$id");
}

function tambah ($data) {
    global$conn;
    $id = $data["id_karyawan"];
    $username =$data["username"];
    $nama = $data["nama"];
    $agama =$data["agama"];
    $password = $data["password"];
    $alamat =$data["alamat"];
    $ttl =$data["tanglahir"];
    $ntelp =$data["ntelp"];
    $jeniskel =$data["jeniskel"];
    $photo =$data["foto"];

    $save ="INSERT INTO tb_karyawan VALUES('$id','$username','$password','$nama','$agama','$jeniskel','$ttl','$alamat','$ntelp','$photo')";
    
     mysqli_query($conn,$save);

     return mysqli_affected_rows($conn);
}
function tambah_admin ($data) {
    global$conn;
    $username = $data["username"];
    $password = md5($data["password"]);
    $showpassword = $data["password"];

    $save ="INSERT INTO userz VALUES(NULL,'$username','$password','$showpassword')";
    
     mysqli_query($conn,$save);

     return mysqli_affected_rows($conn);
}
?>
