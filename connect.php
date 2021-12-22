<?php
    //membuat informasi koneksi
	$namaserver = "localhost";
	$username = "root";
	$password = "";
	$namadbase = "indonesia";
	
	//membuat dan menjalankan koneksi
	$konek = new mysqli($namaserver,$username,$password,$namadbase);
	
	//periksa koneksi
	if($konek->connect_error){
		die("Maaf, koneksi gagal " . $konek->connect_error);
	}
	
?>
