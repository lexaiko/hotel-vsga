<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Jika logout dikirimkan
if (isset($_POST['logout'])) {
    // Set $_SESSION['logged_in'] menjadi false
    $_SESSION['logged_in'] = false;

    // Hapus semua data sesi
    $_SESSION = array();

    // Hancurkan sesi
    session_destroy();

    // Redirect ke halaman login
    header("Location: ../index.php");
    exit();
}

// Jika sesi sudah tidak aktif
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "Sesi telah berakhir.";
    // atau lakukan tindakan lain yang sesuai
}
?>
