<?php
session_start();
require_once "functions.php";

// Memeriksa apakah form login telah disubmit
if (isset($_POST['login'])) {
    $login = new LoginUser($_POST);
    $login->setTable('users');
    // Melakukan proses login menggunakan metode getLogin dari kelas LoginUser
    if ($login->getLogin()) {
        // Jika login berhasil
        
        $login->conn = null; // Menutup koneksi database
        
        header("Location: ../main/index.php"); // Redirect ke halaman utama setelah login berhasil
        exit;
    } else {
        // Jika login gagal
        $login->conn = null; // Menutup koneksi database
        $_SESSION['error'] = 'Username/Password salah!'; // Menyimpan pesan error dalam session
        header("Location: login.php"); // Redirect kembali ke halaman login dengan pesan error
        exit;
    }
}
?>