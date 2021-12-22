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
        <table border="1">
            <tr>
                <th>Nomor</th>
                <th>Nama Provinsi</th>
            </tr>

            <?php
            while ($baris = $hasil->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $baris["id"]; ?> </td>
                    <td><?php echo $baris["name"]; ?> </td>
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