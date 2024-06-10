<?php

require "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/contact.css" />
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
    <div class="container" style="width: 600px; height: auto">
        <h2 align="center">Medicine Request Form</h2>
        <form class="">
            <div class="mb-3">
                <label for="Nama" class="form-label">Name</label>
                <input type="email" class="form-control p-2 border-2" style="font-size: small" id="Nama"
                     />
            </div>
            <div class="mb-3">
                <label for="Notelp" class="form-label">Phone</label>
                <input type="email" class="form-control p-2 border-2" style="font-size: small" id="notelp"
                     />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control p-2 border-2" style="font-size: small" id=""
                    aria-describedby="emailHelp" />
            </div>
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control p-2 border-2" style="font-size: small" id="exampleInputEmail1"
                    aria-describedby="emailHelp" />
            </div> -->
            <label for="medicine">Select medicine</label>
            <select class="form-select p-2 border-2" style="font-size: small" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Medicine 1</option>
                <option value="2">Medicine 2</option>
                <option value="3">Medicine 3</option>
              </select>
                <button class="mt-3" type="submit" style="font-size: small;" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>