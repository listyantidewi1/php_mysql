<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>
</head>

<body>
    <?php
    require_once "connect.php"; //mutlak

    $query2 = "insert into provinces values (96, 'NEW JERSEY')";

    if ($konek->query($query2) === TRUE) {
        echo "data berhasil ditambahkan";
    } else {
        echo "Error: " . $query2 . "<br>" . $konek->error;
    }

    $konek->close();
    ?>
</body>

</html>