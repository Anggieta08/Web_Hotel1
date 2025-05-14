<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Hotel</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #CEE0F4 ;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #A7C1E1;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
}

h1 {
    text-align: center; 
    color: #333;
}

p {
    color: #666;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    background: #007BFF;
    color: #fff;
    margin: 5px 0;
    padding: 10px;
    border-radius: 5px;
}

a button {
    background: #28a745;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
}

a button:hover {
    background: #218838;
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
</head>
<body>
<a href="beranda.php" class="back-button">⬅ Kembali ke Beranda</a>
<div class="container">
        <h1>Kontak Hotel LoveBeach</h1>
        <p>Jika ada pertanyaan atau masalah, silakan hubungi kami melalui:</p>
        <ul>
            <li>Email: hotellovebeach@gmail.com</li>
            <li>Telepon: +62 21 23456789</li>
            <li>Alamat: Jalan Merpati Putih </li>
        </ul>
        <a href="data_pemesanan.php"><button>Lihat Data Pemesanan</button></a>
    </div>
</body>
</html>
