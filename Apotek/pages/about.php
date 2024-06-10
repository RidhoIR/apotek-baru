<?php

require "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="../css/about.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">
        <img src="../assets/image/logo1.png" alt="Logo" />
      </a>

      <nav class="headbar">
        <a href="login.php">Login</a>
        <a href="../home.php">Home</a>
        <a href="about.php">About</a>
        <a href="katalog.php">Katalog</a>
        <a href="contact.php">Contact</a>
      </nav>

      <div class="menubtn">
        <button>Helpline</button>
      </div>

      <div class="icon">
        <i  class="fas fa-search" id="search-btn"></i>
        <a href="keranjang.html">
          <i class="fas fa-shopping-cart" id="cart-btn"></i>
        </a>
      </div>
    </header>

    <section class="about_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h2>About Us</h2>
        </div>

        <div class="img-box">
          <img src="../assets/image/medicine.png" alt="about medicine" />
        </div>
        <div class="detail-box">
          <p>
            Selamat datang di Apotek Nothing! 
            Apotek kami didirikan pada tahun 2024 oleh Nothing. 
            Kami berkomitmen untuk menyediakan layanan dan produk kesehatan terbaik bagi masyarakat. 
            Kami telah menjadi apotek terpercaya di daerah ini.
          </p>
          
          <button class="read-more-btn" onclick="showMore()">Read More</button>
          
          <div id="more-content" style="display: none;">
            <p>Hubungi kami</p>
            <p>Alamat : Jl. Arief Rahman hakim No.100 </p>
            <p>No Telp : (031) 5997244 </p>
          </div>
        </div>
       
       <script>
          function showMore() {
            document.getElementById("more-content").style.display = "block";
            document.querySelector(".read-more-btn").style.display = "none";
          }
        </script>
        
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
