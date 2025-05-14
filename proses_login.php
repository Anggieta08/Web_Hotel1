<?php
session_start();
include 'Koneksi/koneksi.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

        $_SESSION['id'] = $admin['id'];
        $_SESSION['username'] = $admin['username'];
        $isLoggedIn = $_SESSION['username'];

       
        header("Location: beranda.php");
        exit();
    } else {
        echo "Username atau Password salah!!!!!";
    }
}