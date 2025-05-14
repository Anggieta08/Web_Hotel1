<?php
include 'Hotel/Koneksi/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id            = $_POST['id'];
    $nama          = $_POST['nama'];
    $username      = $_POST['username'];
    $password      = $_POST['password'];
    $level         = $_POST['level'];

    $stmt = $conn->prepare("INSERT INTO user (id, nama, username, password, level) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $id, $nama, $username, $password, $level);

    if ($stmt->execute()) {
        header("Location: Hotel/beranda.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}