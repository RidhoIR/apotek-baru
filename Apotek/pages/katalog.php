<?php

require "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medicine</title>
    <link rel="stylesheet" type="text/css" href="../css/medicine.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
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

        <div class="menubtn" id="menuBtn">
            <button>Helpline</button>
        </div>

        <div class="icon">
            <i class="fas fa-search" id="search-btn"></i>
            <a href="keranjang.html">
                <i class="fas fa-shopping-cart" id="cart-btn"></i>
            </a>
        </div>
    </header>

    <div class="container">
        <h1>Catalog Medicine</h1>
        <p>Cari Produk Sesuai Kebutuhan</p>

        <div class="product-container">
            <div class="product">
                <h2>Obat 1</h2>
                <p>Paracetamol</p>
                <img src="../assets/image/obat-1.jpg" alt="Obat 1" />
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <h2>Obat 2</h2>
                <p>Asam Fenamet</p>
                <img src="../assets/image/obat-2.jpg" alt="Obat 2" />
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <h2>Obat 3</h2>
                <p>Panadol</p>
                <img src="../assets/image/obat-3.jpg" alt="Obat 3" />
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <h2>Obat 4</h2>
                <p>Ultraflu</p>
                <img src="../assets/image/obat-1.jpg" alt="Obat 4" />
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <h2>Obat 5</h2>
                <p>Paramex</p>
                <img src="../assets/image/obat-2.jpg" alt="Obat 5" />
                <button>Add to Cart</button>
            </div>

            <div class="product">
              <h2>Obat 6</h2>
              <p>Promag</p>
              <img src="../assets/image/obat-1.jpg" alt="Obat 6" />
              <button>Add to Cart</button>
          </div>
            
        </div>

        <div class="pagination">
            <button>Previous</button>
            <button>1</button>
            <button>Next</button>
        </div>
    </div>
</body>
</html>
