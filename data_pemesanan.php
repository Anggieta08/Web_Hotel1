<?php
include 'koneksi.php';

$sql = "SELECT * FROM pembayaran ORDER BY id_kamar ASC, check_in ASC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <neta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="info.css">
</head>

<body>

    <h2>Data Pemesanan</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>No Kamar</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Total Harga</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id_pembayaran']}</td>
                <td>{$row['no_kamar']}</td>
                <td>{$row['check_in']}</td>
                <td>{$row['check_out']}</td>
                <td>{$row['total_harga']}</td>
            </tr>";
        }  
    } else {
        echo "<tr><td colspan='13'>Belum ada pemesanan.</td></tr>";
    }
    ?>
</table>
    
    