<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Hotel</title>
    <style>
        /* Reset margin dan padding pada elemen */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Mengatur tampilan body dengan font yang nyaman dibaca */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #CEE0F4;
    color: #333;
    padding: 20px;
}

/* Judul utama */
h1 {
    text-align: center;
    color: #333;
    font-size: 36px;
    margin-bottom: 20px;
}

/* Mengatur container untuk layanan hotel */
.container {
    margin-bottom: 40px;
    display: grid;
    grid-template-columns: 1fr 1fr; /* Membuat dua kolom untuk gambar dan deskripsi */
    gap: 20px;
    align-items: center;
}

/* Subjudul layanan */
h2 {
    font-size: 28px;
    color:rgb(0, 0, 0);
    margin-bottom: 10px;
    text-transform: uppercase;
    text-align: center;
}

/* Gaya untuk setiap box layanan */
.box {
    display: grid;
    grid-template-columns: 1fr 2fr; /* Membuat dua kolom di dalam box (gambar di kiri, deskripsi di kanan) */
    gap: 20px;
    background-color: #84A1C4;
    box-shadow: 0 4px 8px rgb(0, 0, 0);
    padding: 20px;
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Gambar layanan */
.box img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Deskripsi layanan */
.box p {
    font-size: 16px;
    color: black;
    line-height: 1.5;
}

/* Menambahkan border bawah untuk pemisah antar layanan */
.container + .container {
    border-top: 2px solid #ccc;
    padding-top: 20px;
}

/* Styling untuk link jika diperlukan */
a {
    color: #008CBA;
    text-decoration: none;
}

/* Responsif untuk tampilan layar lebih kecil */
@media (max-width: 768px) {
    .container {
        grid-template-columns: 1fr; /* Menampilkan gambar dan deskripsi dalam satu kolom pada layar kecil */
    }

    h1 {
        font-size: 28px;
    }

    h2 {
        font-size: 24px;
    }

    /* Gaya untuk setiap box layanan */
.box {
    display: grid;
    grid-template-columns: 1fr 2fr; /* Membuat dua kolom di dalam box (gambar di kiri, deskripsi di kanan) */
    gap: 20px;
    background-color: #84A1C4;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 8px;
    border-left: 2px solid #ccc; /* Menambahkan garis vertikal pemisah */
}

/* Garis pemisah antar kolom dalam box */
.box > img {
    border-right: 2px solid #ccc; /* Menambahkan garis pemisah antara gambar dan deskripsi */
}

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

    <h1>Deskripsi Layanan Hotel</h1>
    <div class="container">
        <div class="box">
            <img src="Gambar/resepsionis_hotel.jpg" alt="Resepsionis">
            <div>
                <h2>Resepsionis 24 jam</h2>
                <p>
                    Menyediakan layanan 24 jam untuk memastikan kebutuhan tamu selalu terpenuhi.
                </p>
            </div>
        </div>
        <div class="box">
            <img src="Gambar/kolam_renang.jpg" alt="Kolam Renang">
            <div>
                <h2>Kolam Renang</h2>
                <p>
                    Salah satu fasilitas rekreasi yang paling dicari oleh tamu hotel.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <img src="Gambar/room_service.jpg" alt="Room Service">
            <div>
                <h2>Room Service</h2>
                <p>
                    Cocok buat kamu yang ingin memesan makanan atau minuman tanpa harus keluar dari kamar.
                </p>
            </div>
        </div>
        <div class="box">
            <img src="Gambar/antar_jemput.jpg" alt="Antar Jemput Gratis">
            <div>
                <h2>Antar Jemput Gratis</h2>
                <p>
                    Selalu memudahkan kamu jika ingin pergi atau pulang ke hotel dengan menggunakan transportasi hotel.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <img src="Gambar/pusat_kebugaran.jpg" alt="Pusat Kebugaran">
            <div>
                <h2>Pusat Kebugaran</h2>
                <p>
                    Fasilitas kebugaran untuk melakukan kegiatan yang lebih sehat.
                </p>
            </div>
        </div>
        <div class="box">
            <img src="Gambar/laundry.jpg" alt="Laundry">
            <div>
                <h2>Laundry</h2>
                <p>
                    Memudahkan tamu dalam menyikapi hal seperti pakaian kotor.
                </p>
            </div>
        </div>
    </div>
    <!-- Bagian Wifi dan Spa berada dalam satu baris -->
    <div class="container">
        <div class="box">
            <img src="Gambar/wifi.jpg" alt="Wifi">
            <div>
                <h2>Free Wifi</h2>
                <p>
                    Menyediakan wifi gratis di seluruh properti hotel memastikan agar tamu dapat tetap terhubung dan produktif selama menginap.
                </p>
            </div>
        </div>
        <div class="box">
            <img src="Gambar/spa.jpg" alt="Spa">
            <div>
                <h2>Spa</h2>
                <p>
                    Fasilitas yang menawarkan pijatan, perawatan wajah, dan layanan kecantikan lainnya.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
