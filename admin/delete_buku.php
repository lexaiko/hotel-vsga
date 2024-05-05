<?php
include '../db_connection.php';

// Menangkap data dari form
$id = $_POST['id'];


if (isset($_GET['id'])) {
    // Tangkap ID dari parameter GET
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM buku_tamu WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        // Jika berhasil menyimpan data, arahkan kembali ke halaman detail-pemesanan.php
        header("Location: buku_tamu.php");
        exit(); // Pastikan tidak ada output lain setelah header() untuk menghindari kesalahan
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

echo $id;
echo $nama;
echo $jumlah_anggota;
echo $jumlah_hari;
echo $jumlah_kunjungan_kuliner;
echo $tanggal_mulai;
echo $total_bayar;



// Menutup koneksi database
mysqli_close($koneksi);
?>