<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B4D7D8;
}

h1 {
    text-align: center;
}

.container {
    width: 90%;
    margin: auto;
    padding: 20px;
    display: flex;
    justify-content: center;
    gap: 15px;
} 

.global-container{
    display: flex;
    flex-direction: column;
}

.rooms {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    justify-content: center;
}

.box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    transition: transform 0.05s ease, box-shadow 0.05s ease;
}

.box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.box {
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: calc(50% - 10px);
    background-color:rgb(107, 150, 158);
}

.box h2 {
    font-size: 18px;
    color: black;
    margin-bottom: 10px;
}

.box img {
    width: 80%;
    max-width: 250px;
    border-radius: 10px;
}

.box p {
    font-size: 14px;
    color: black;
    text-align: justify;
}

@media (max-width: 1024px) {
    .box-container {
        flex-direction: column;
        align-items: center;
    }
    .box {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .box-container {
        flex-direction: column;
        align-items: center;
    }
    .box {
        width: 100%;
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
    <H1>Info Kamar</H1>
    <div class="global-container">
        <div class="container">
            <div class="box">
                <h2>Kamar Reguler</h2>
                <img src="Gambar/Regular.webp" width="400px" alt="Kamar Reguler">
                <p>Kamar tipe reguler menawarkan kenyamanan fungsional dengan tempat tidur queen-size, meja 
                    kerja, TV layar datar, dan Wi-Fi gratis. Kamar mandi pribadi dilengkapi shower air panas, 
                handuk lembut, dan perlengkapan mandi.
                Desain minimalis dengan palet warna netral menciptakan suasana tenang, cocok untuk dua tamu. 
                Dengan luas 20-25 meter persegi, harga mulai dari Rp 500.000 per malam (hari biasa) dan 
                Rp 600.000 per malam (akhir pekan).
                Catatan: Harga dapat bervariasi tergantung musim dan ketersediaan.
            </p>
        </div>
        <div class="box">
            <h2>Kamar Deluxe</h2>
            <img src="Gambar/Deluxe.webp" width="400px" alt="Kamar Deluxe">
            <p>
                Kamar tipe deluxe menawarkan ruang luas dengan tempat tidur king-size atau queen-size, area duduk 
                kecil, dan desain modern. Fasilitas meliputi TV layar datar, Wi-Fi gratis, meja kerja, dan kamar 
                mandi pribadi dengan shower air panas dan perlengkapan mandi.
                Dengan luas 25-30 meter persegi, kamar ini cocok untuk tamu yang mencari kenyamanan ekstra. 
                Harga mulai dari Rp 800.000 (weekday) hingga Rp 1.000.000 (weekend). Catatan: Harga dapat 
                berubah sesuai musim dan ketersediaan.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <h2>Kamar Suite</h2>
            <img src="Gambar/Suite.webp" width="400px" alt="Kamar Suite">
            <p>
                Kamar tipe suite menawarkan kemewahan dan kenyamanan terbaik dengan ruang yang luas dan 
                fasilitas premium. Dilengkapi tempat tidur king-size dengan linen berkualitas tinggi, suite 
                ini memiliki area tidur terpisah dari ruang tamu yang dilengkapi sofa, meja kopi, dan 
                televisi layar datar.
                Fasilitas meliputi meja kerja, Wi-Fi gratis, minibar, dan kamar mandi pribadi modern dengan 
                bathtub, shower air panas, serta perlengkapan mandi eksklusif. Desain elegan dengan aksen 
                mewah menciptakan suasana yang nyaman dan berkelas.
                Dengan luas 40-50 meter persegi, kamar suite ideal untuk tamu yang menginginkan privasi, 
                ruang tambahan, dan layanan eksklusif. Harga mulai dari Rp 1.500.000 per malam. Catatan: 
                    Harga dapat berubah sesuai musim dan ketersediaan.
                </p>
        </div>
        <div class="box">
            <h2>Kamar VIP</h2>
            <img src="Gambar/VIP.webp" width="400px" alt="Kamar VIP">
            <p>
                Kamar hotel tipe VIP dirancang untuk memberikan pengalaman menginap mewah dengan fasilitas 
                dan layanan eksklusif. Kamar ini dilengkapi tempat tidur king-size dengan linen premium, 
                area duduk elegan dengan sofa mewah, dan meja kerja bergaya modern.
                Fasilitas unggulan meliputi televisi layar datar berukuran besar, Wi-Fi berkecepatan tinggi, 
                minibar lengkap, dan kamar mandi mewah dengan bathtub, shower air panas, serta perlengkapan 
                mandi berkualitas tinggi. Beberapa kamar VIP juga menyediakan balkon pribadi dengan pemandangan indah.
                Dengan luas 50-60 meter persegi, kamar VIP menciptakan suasana eksklusif dan nyaman untuk tamu 
                yang menginginkan pengalaman menginap istimewa. Harga mulai dari Rp 2.000.000 per malam. 
                Catatan: Harga dapat berubah tergantung musim dan ketersediaan.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <h2>Kamar VVIP</h2>
            <img src="Gambar/VVIP.webp" width="400px" alt="Kamar VVIP">
            <p>
                Kamar tipe VVIP menawarkan kemewahan tertinggi dengan fasilitas premium dan desain yang luar 
                biasa. Dengan luas lebih dari 70 meter persegi, kamar ini dilengkapi tempat tidur king-size 
                dengan linen mewah, ruang tamu terpisah yang dilengkapi sofa elegan, meja makan, dan area kerja eksklusif.
                Fasilitasnya meliputi televisi layar besar, sistem hiburan canggih, minibar lengkap, dan kamar 
                mandi mewah dengan bathtub jacuzzi, shower hujan, serta perlengkapan mandi eksklusif. Kamar ini 
                juga memiliki balkon pribadi atau jendela besar yang menyuguhkan pemandangan spektakuler.
                Dirancang dengan sentuhan artistik, dekorasi mewah, dan pencahayaan yang menawan, kamar VVIP 
                memberikan pengalaman menginap yang tak terlupakan. Harga mulai dari Rp 5.000.000 per malam. 
                Catatan: Harga dan fasilitas dapat disesuaikan sesuai kebutuhan tamu.
            </p>
        </div>
    </div>
</div>
</body>
</html>