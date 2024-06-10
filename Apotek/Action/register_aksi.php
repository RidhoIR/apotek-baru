<?php
require "../koneksi.php"; // Mengimpor file koneksi.php untuk menghubungkan ke database

// Memeriksa apakah metode request adalah POST (artinya form telah disubmit)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Mengambil nilai username dari form
    $email = $_POST['email']; // Mengambil nilai email dari form
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mengenkripsi password menggunakan fungsi password_hash()
    $is_admin = isset($_POST['is_admin']) ? 1 : 0; // Mengambil nilai is_admin dari form, jika di-check maka nilainya 1, jika tidak maka nilainya 0

    // Query untuk memeriksa apakah username atau email sudah ada dalam database
    $checkUserSql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $db->prepare($checkUserSql); // Menyiapkan query SQL
    $stmt->bind_param("ss", $username, $email); // Mengikat parameter username dan email ke query
    $stmt->execute(); // Menjalankan query
    $stmt->store_result(); // Menyimpan hasil query

    // Memeriksa apakah ada baris yang terpengaruh oleh hasil query
    if ($stmt->num_rows > 0) {
        echo "Username or Email already taken."; // Menampilkan pesan jika username atau email sudah digunakan
    } else {
        // Jika username dan email belum digunakan, maka lakukan proses registrasi
        $sql = "INSERT INTO users (username, email, password, is_admin) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql); // Menyiapkan query SQL
        $stmt->bind_param("sssi", $username, $email, $password, $is_admin); // Mengikat parameter ke query

        // Menjalankan query untuk menambahkan pengguna baru ke database
        if ($stmt->execute()) {
            header("Location: ../pages/login.php"); // Mengarahkan pengguna ke halaman login setelah berhasil registrasi
            exit(); // Menghentikan eksekusi skrip lebih lanjut
        } else {
            echo "Error: " . $sql . "<br>" . $db->error; // Menampilkan pesan kesalahan jika terjadi masalah saat mengeksekusi query
        }
    }

    $stmt->close(); // Menutup statement
    $db->close(); // Menutup koneksi database
}
?>
