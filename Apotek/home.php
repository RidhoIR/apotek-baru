<?php

require "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">
        <img src="assets/image/logo1.png" alt="Logo" />
      </a>

      <nav class="haedbar">
        <a href="pages/login.php">Login</a>
        <a href="home.php">Home</a>
        <a href="pages/about.php">About</a>
        <a href="pages/katalog.php">Katalog</a>
        <a href="pages/contact.php">Contact</a>
      </nav>

      <div class="menubtn">
        <button>Helpline</button>
      </div>

      <div class="icon">
        <i class="fas fa-search" id="search-btn"></i>
        <a href="pages/keranjang.html">
          <i class="fas fa-shopping-cart" id="cart-btn"></i>
        </a>
      </div>
    </header>

    <section class="main">
      <div class="left">
        <h1>Apotek Nothing</h1>
        <p>
          Selamat Menjelajahi Website Toko Online Nothing
          dan Semoga tetap menjadi langganan di Toko Kami
        </p>
        <a href="pages/katalog.html"class="btn">Read More</a>
      </div>

      <div class="right">
        <img src="assets\image\w1.png" alt="Image w1" />
      </div>
    </section>
  </body>
</html>
