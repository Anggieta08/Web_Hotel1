<?php
// Cek apakah form telah disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $idPengunjung = $_POST['id_pengunjung'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noTelpon = $_POST['no_telpon'];
    $idPembayaran = $_POST['id_pembayaran'];
    $idKamar = $_POST['id_kamar'];
    $noKamar = $_POST['no_kamar'];
    $checkIn = $_POST['check_in'];
    $checkOut = $_POST['check_out'];
    $totalHarga = $_POST['total_harga'];

    // Validasi data
    if (empty($idPengunjung) || empty($nama) || empty($alamat) || empty($noTelpon) || empty($idPembayaran)|| empty($idKamar) || empty($noKamar) || empty($checkIn) || empty($checkOut) || empty($totalHarga)) {
        die("Semua data harus diisi!");
    }

    // Koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";

    // Buat koneksi
    $conn = new mysqli($host, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mulai transaksi
    $conn->begin_transaction();

    try {
        // Query untuk menyimpan data ke tabel pengunjung
        $sqlPengunjung = "INSERT INTO pengunjung (id_pengunjung, nama_lengkap, alamat, no_telepon) 
                          VALUES ('$idPengunjung', '$nama', '$alamat', '$noTelpon')";

        if (!$conn->query($sqlPengunjung)) {
            throw new Exception("Gagal menyimpan data ke tabel pengunjung: " . $conn->error);
        }

        // Query untuk menyimpan data ke tabel pembayaran
        $sqlPembayaran = "INSERT INTO pembayaran (id_pembayaran, id_kamar, no_kamar, check_in, check_out, total_harga) 
                          VALUES ('$idPembayaran', '$idKamar', '$noKamar', '$checkIn', '$checkOut', '$totalHarga')";

        if (!$conn->query($sqlPembayaran)) {
            throw new Exception("Gagal menyimpan data ke tabel pembayaran: " . $conn->error);
        }

        // Commit transaksi
        $conn->commit();

        // Berhasil
        echo "<h1>Pemesanan Berhasil!</h1>";
        echo "<p>Terima kasih, <strong>$nama</strong>, pemesanan Anda telah berhasil.</p>";
        echo "<p>ID Pengunjung: $idPengunjung</p>";
        echo "<p>No. Kamar: $noKamar</p>";
        echo "<p>Check-In: $checkIn</p>";
        echo "<p>Check-Out: $checkOut</p>";
        echo "<p>Total Harga: Rp " . number_format($totalHarga, 0, ',', '.') . "</p>";

    } catch (Exception $e) {
        // Rollback transaksi jika ada kesalahan
        $conn->rollback();
        echo "<h1>Pemesanan Gagal!</h1>";
        echo "<p>Terjadi kesalahan: " . $e->getMessage() . "</p>";
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "Tidak ada data yang diterima!";
}
?>
