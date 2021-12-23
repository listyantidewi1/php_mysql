<?php
require_once "connect.php";

if (isset($_POST['submit'])) {
    $id_provinsi = $_POST['id'];
    $nama_provinsi = $_POST['name'];

    $query2 = "update provinces set name = '" . $nama_provinsi .  "' where id = '" . $id_provinsi . "'";

    if ($konek->query($query2) === TRUE) {
        echo "data berhasil diubah";
        echo "<br/> <a href='view.php'>View Data</a>";
    } else {
        echo "Error: " . $query2 . "<br>" . $konek->error;
    }
} else {
    echo "Gagal mengubah data";
}

$konek->close();
