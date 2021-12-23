<?php
include "connect.php";

$id_provinsi = $_GET['id'];

$query1 = "select * from provinces where id =" . $id_provinsi;
$hasil = $konek->query($query1);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Melalui Form</title>
</head>

<body>
    <?php
    if ($hasil->num_rows > 0) {
        while ($baris = $hasil->fetch_assoc()) {
    ?>
            <form action="action_edit.php" method="POST">
                <label for="id">Id Provinsi:</label><br>
                <input type="text" id="id" name="id" value="<?php echo $_GET['id']; ?>"><br>
                <label for="name">Nama Provinsi:</label><br>
                <input type="text" id="name" name="name" value="<?php echo $baris['name']; ?>"><br><br>
                <input type="submit" value="Submit" name="submit">
            </form>
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