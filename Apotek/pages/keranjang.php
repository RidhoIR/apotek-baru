<?php

require "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/keranjang.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous"
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
  
        <div class="menubtn">
          <button>Helpline</button>
        </div>
  
        <div class="icon">
          <i class="fas fa-search" id="search-btn"></i>
          <a href="keranjang.html">
            <i class="fas fa-shopping-cart" id="cart-btn"></i>
          </a>        
        </div>
  
      </header>
      <div class="container" style="max-height: auto; min-height: 450px;">
        <div class="list-group shadow-sm mb-4">
          <div class="list-group-item bg-light text-website b">
            <div class="row">
              <div class="col-sm-12 col-lg-1">
              </div>
              <div class="col-sm-12 col-lg-4">
                Produk
              </div>
              <div class="col-sm-12 col-lg-3">
                Harga Satuan
              </div>
              <div class="col-sm-12 col-lg-2">
                Kuantitas
              </div>
              <div class="col-sm-12 col-lg-2">
                Aksi
              </div>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row my-4">
              <div class="col-sm-12 col-lg-1 mb-3">
                <input type="checkbox" name="pilih">
              </div>
              <div class="col-sm-12 col-lg-4 mb-3">
                <a href="produk-detail.html" class="hvnb">
                  <div class="media">
                    <img src="../assets/image/obat-1.jpg" width="60" class="mr-3">
                    <div class="media-body text-dark">
                      Paramex
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-sm-12 col-lg-3 mb-3">
                <h4 class="text-website">Rp150.000</h4>
              </div>
              <div class="col-sm-12 col-lg-2 mb-3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button class="input-group-text">-</button>
                    </div>
                    <input type="text" class="form-control" value="1">
                    <div class="input-group-append">
                      <button class="input-group-text">+</button>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-sm-12 col-lg-2 mb-3">
                <a href="#" class="b text-website">Hapus</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-body shadow-sm">
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <input type="checkbox" name=""> Pilih Semua
            </div>
            <div class="col-sm-12 col-lg-3">
              <h5><span class="text-muted">Total Pesanan:</span> <span class="text-website">Rp150.000</span></h5>
            </div>
            <div class="col-sm-12 col-lg-3">
              <a href="checkout.html" class="hvnb">
                <button class="btn bg-website btn-block text-white">Checkout</button>
              </a>
            </div>
          </div>
        </div>
      </div>
        <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>