<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Database</title>
</head>

<body>

    <?php
    //include file connect.php utk koneksi database
    include "connect.php";

    //membuat query dan object utk menampung hasil query
    $query1 = "select * from provinces";
    $hasil = $konek->query($query1);

    //menampilkan data
    if ($hasil->num_rows > 0) {

    ?>
        <a href="form_input.php">Tambah Data</a>
        <table border="1">
            <tr>
                <th>Nomor</th>
                <th>Nama Provinsi</th>
                <th>Action</th>
            </tr>

            <?php
            while ($baris = $hasil->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $baris["id"]; ?> </td>
                    <td><?php echo $baris["name"]; ?> </td>
                    <td>
                        <a href="edit.php?id=<?php echo $baris['id']; ?>"> Edit</a>
                        <a href="delete.php?id=<?php echo $baris['id']; ?>"> Delete</a>
                    </td>

                </tr>
        <?php
            }
            echo "</table>";
        } else {
            echo "tidak ada data";
        }


        $konek->close();
        ?>

</body>

</html>