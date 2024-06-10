<?php
require "../koneksi.php"; // Mengimpor file koneksi untuk menghubungkan ke database
session_start(); // Memulai sesi untuk melacak data pengguna yang login

// Memeriksa apakah metode request adalah POST (artinya form telah disubmit)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Mengambil nilai username dari form
    $password = $_POST['password']; // Mengambil nilai password dari form

    // Query untuk mendapatkan id dan password dari pengguna berdasarkan username
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $db->prepare($sql); // Menyiapkan query SQL
    $stmt->bind_param("s", $username); // Mengikat parameter username ke query
    $stmt->execute(); // Menjalankan query
    $stmt->store_result(); // Menyimpan hasil query

    // Memeriksa apakah username ditemukan dalam database
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password); // Mengikat hasil query ke variabel
        $stmt->fetch(); // Mengambil hasil query

        // Memverifikasi password yang diinput oleh pengguna dengan password yang ada di database
        if (password_verify($password, $hashed_password)) {
            // Jika password benar, simpan user_id dan username dalam sesi
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: ../admin.php"); // Mengarahkan pengguna ke halaman admin
            exit(); // Menghentikan eksekusi skrip lebih lanjut
        } else {
            echo "Invalid password."; // Menampilkan pesan jika password salah
        }
    } else {
        echo "No user found with that username."; // Menampilkan pesan jika username tidak ditemukan
    }

    $stmt->close(); // Menutup statement
    $db->close(); // Menutup koneksi database
}
?>
