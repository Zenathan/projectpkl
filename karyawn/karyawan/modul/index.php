<?php

include_once "sesi_karyawan.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "keterangan.php"; break;
	case 'profil': include 'profil.php'; break;
	case 'edit': include 'edit.php'; break;
	case 'update': include 'update.php'; break;
	case 'index': include 'admin.php';
}
?>
