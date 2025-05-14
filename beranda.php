<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Hotel</title>
    <style>
        <style>
            /* Reset dasar untuk menghilangkan margin dan padding standar */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Menetapkan font dasar untuk seluruh halaman */
    body {
        background-image: url('Gambar/background_hotel.webp');
        background-color: #f4f4f4;
        background-size: cover;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    /* Header styling */
    header {
        background-color: #60d1c8; /* Warna latar belakang header */
        padding: 10px 0;
        color: rgb(255, 255, 255);
    }
    
    .profil {
        width: 50px;
        border-radius: 50%;
        margin-left: 10px;
    }
    /* Penataan h1 di dalam header */
    header h1 {
        font-size: 40px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    
    /* Styling untuk tombol di dalam header */
    button {
        background-color: #f8b400;
        border: none;
        color: white;
        padding: 12px 30px;
        margin: 10px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out, transform 0.2s ease;
    }
    
    /* Efek hover pada tombol */
    button:hover {
        background-color: #e69300;
        transform: scale(1.05); /* Membesar sedikit saat hover */
    }
    
    /* Kontainer untuk elemen-elemen dalam header */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        text-align: center;
    }
    
</style>
    </style>
</head>
<body>
    <header> 
        <?php if ($isLoggedIn): ?>
            <img id="userIcon" src="gambar/profil2.jpg" alt="Profil" class="profil">
        <?php endif; ?>
        
        <div class="container">
            <h1>Welcome to Hotel LoveBeach</h1>
            <button onclick="location.href='pesan_kamar.php'">Pesan Kamar</button>
            <button onclick="location.href='info_kamar.php'">Info Tipe Kamar</button>
            <button onclick="location.href='layanan.php'">Layanan</button>
            <button onclick="location.href='kontak.php'">Kontak</button>

            <?php if (!$isLoggedIn): ?>
                <button id="btnRegister" onclick="location.href='registrasi.php'">Registrasi</button>
                <button id="btnLogin" onclick="location.href='login.php'">Login</button>
            <?php else: ?>
                <button id="btnLogout">LogOut</button>
            <?php endif; ?>
        </div>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let isLoggedIn = <?php echo $isLoggedIn ? 'true' : 'false'; ?>;

            if (!isLoggedIn) {
                let userIcon = document.getElementById("userIcon");
                if (userIcon) userIcon.style.display = "none";
            }

            let logoutBtn = document.getElementById("btnLogout");
            if (logoutBtn) {
                logoutBtn.addEventListener("click", function (event) {
                    event.preventDefault();
                    fetch('logout.php', { method: 'POST' })
                        .then(response => response.text())
                        .then(data => {
                            alert("Logout berhasil!");
                            location.reload();
                        })
                        .catch(error => console.error('Error:', error));
                });
            }
        });
    </script>
</body>
</html>
