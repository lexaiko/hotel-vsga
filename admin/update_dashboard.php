<?php
include '../db_connection.php';

// Menangkap data dari form
$id = $_POST['id'];
$nama_pemesan = $_POST['nama_pemesan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_identitas = $_POST['nomor_identitas'];
$tipe_kamar = $_POST['tipe_kamar'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$durasi_menginap = $_POST['durasi_menginap'];
$total_bayar = $_POST['total_bayar'];

// Update data pemesanan berdasarkan ID
$sql = "UPDATE hotel SET nama_pemesan='$nama_pemesan', jenis_kelamin='$jenis_kelamin', nomor_identitas='$nomor_identitas', tipe_kamar='$tipe_kamar', tanggal_pesan='$tanggal_pesan', durasi_menginap='$durasi_menginap', total_bayar='$total_bayar' WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
    // Jika berhasil menyimpan data, arahkan kembali ke halaman detail-pemesanan.php
    header("Location: index.php");
    exit(); // Pastikan tidak ada output lain setelah header() untuk menghindari kesalahan
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
