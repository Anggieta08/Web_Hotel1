<?php
// Definisikan harga per malam untuk tiap tipe kamar
$hargaKamar = array(
    'regular' => 500000,
    'deluxe' => 800000,
    'suite' => 1500000,
    'vip' => 2000000,
    'vvip' => 5000000,
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kamar</title>
    <style>
        /* style.css */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #D6E4EF;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color:  #4C7491;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgb(0, 0, 0);
}

h1 {
    text-align: center;
    color: black;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: black;
}

form input[type="text"],
form input[type="date"],
form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

form input[type="submit"] {
    background-color: #194569;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #397598;
}

h2 {
    margin-top: 30px;
    color: black;
}

#total_harga {
    font-size: 1.5em;
    font-weight: bold;
    color: #28a745;
    margin-top: 5px;
    margin-bottom: 20px;
}

.back-button {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
}

.back-button:hover {
    background-color: #0056b3;
}

    </style>

    <script>
        // JavaScript untuk menghitung total harga secara otomatis
        function hitungHarga() {
            const hargaKamar = {
                'regular': 500000,
                'deluxe': 800000,
                'suite': 1500000,
                'vip': 2000000,
                'vvip': 5000000
            };

            const tipeKamar = document.getElementById("Tipe_Kamar").value;
            const checkIn = new Date(document.getElementById("check_in").value);
            const checkOut = new Date(document.getElementById("check_out").value);

            // Hitung jumlah hari menginap
            const diffTime = checkOut - checkIn;
            const jumlahHari = diffTime / (1000 * 60 * 60 * 24);

            // Validasi input
            if (tipeKamar && jumlahHari > 0) {
                const totalHarga = hargaKamar[tipeKamar] * jumlahHari;
                document.getElementById("total_harga").textContent = 
                    `Rp ${totalHarga.toLocaleString('id-ID')}`;
                document.getElementById("hidden_total_harga").value = totalHarga;
            } else {
                document.getElementById("total_harga").textContent = "Rp 0";
                document.getElementById("hidden_total_harga").value = 0;
            }
        }
    </script>
</head>
<body>
<a href="beranda.php" class="back-button">⬅ Kembali ke Beranda</a>
    <div class="container">
        <h1>Form Pemesanan Kamar</h1>
        <form action="proses_pesan.php" method="POST">
            <label for="id_pengunjung">ID Pengunjung:</label>
            <input type="text" id="id_pengunjung" name="id_pengunjung" required><br><br>
        
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br><br>
            
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required><br><br>
            
            <label for="no_telpon">Nomor Telpon:</label>
            <input type="text" id="no_telpon" name="no_telpon" required><br><br>
            
            <label for="id_pembayaran">ID Pembayaran:</label>
            <input type="text" id="id_pembayaran" name="id_pembayaran" required><br><br>

            <label for="id_kamar">ID Kamar:</label>
            <input type="text" id="id_kamar" name="id_kamar" required><br><br>
            
            <label for="Tipe_Kamar">Tipe Kamar:</label>
            <select id="Tipe_Kamar" name="Tipe_Kamar" onchange="hitungHarga()" required>
                <option value="regular">Regular</option>
                <option value="deluxe">Deluxe</option>
                <option value="suite">Suite</option>
                <option value="vip">VIP</option>
                <option value="vvip">VVIP</option>
            </select><br><br>

            <label for="no_kamar">Nomer Kamar:</label>
            <input type="text" id="no_kamar" name="no_kamar" required><br><br>

            <label for="check_in">Check In:</label>
            <input type="date" id="check_in" name="check_in" onchange="hitungHarga()" required><br><br>

            <label for="check_out">Check Out:</label>
            <input type="date" id="check_out" name="check_out" onchange="hitungHarga()" required><br><br> 

            <h2>Total Harga Sewa:</h2>
            <p id="total_harga">Rp 0</p>

            <!-- Hidden input untuk mengirim total harga ke server -->
            <input type="hidden" id="hidden_total_harga" name="total_harga" value="0">

            <!-- Tombol Submit -->
            <input type="submit" value="Pesan Sekarang">
        </form>
    </div>
</body>
</html>
