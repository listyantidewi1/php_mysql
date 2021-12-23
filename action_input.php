<?php
require_once "connect.php";
$id_provinsi = $_POST['id'];
$nama_provinsi = $_POST['name'];

$query2 = "insert into provinces (id, name) values ('$id_provinsi', '$nama_provinsi')";

if ($konek->query($query2) === TRUE) {
    echo "data berhasil ditambahkan";
    echo "<br/> <a href='view.php'>View Data</a>";
} else {
    echo "Error: " . $query2 . "<br>" . $konek->error;
}

$konek->close();
