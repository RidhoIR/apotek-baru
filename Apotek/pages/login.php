<?php

require "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
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

    <div class="container" id="container">
      <div class="form sign-up-container">
        <form action="../Action/register_aksi.php" method="post">
          <h1>Create An Account</h1>

          <div class="social-container">
            <a href="#" class="social"
              ><i class="fab fa-facebook-f" aria-hidden="true"></i
            ></a>
            <a href="#" class="social"
              ><i class="fab fa-google-plus-g" aria-hidden="true"></i
            ></a>
            <a href="#" class="social"
              ><i class="fab fa-linkedin-in" aria-hidden="true"></i
            ></a>
          </div>

          <span>Gunakan Email Untuk Registrasi</span>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" />
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email"/>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"/>
          </div>

          <button type="submit">Sign Up</button>
        </form>
      </div>

      <div class="form sign-in-container">
        <form action="../Action/login_aksi.php" method="post" id="loginForm">
          <h1>Login</h1>

          <div class="social-container">
            <!-- <a href="#" class="social"
              ><i class="fab fa-facebook-f" aria-hidden="true"></i
            ></a> -->
            <a href="#" class="social"
              ><i class="fab fa-google-plus-g" aria-hidden="true"></i
            ></a>
            <!-- <a href="#" class="social"
              ><i class="fab fa-linkedin-in" aria-hidden="true"></i
            ></a> -->
          </div>

          <span>Gunakan Akun Anda</span>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username"/>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"/>
          </div>
          <a href="#">Forgot your password?</a>
          <button type="submit" id="signInBtn">Sign In</button>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              Silahkan Login Untuk Masuk ke Akun Anda
            </p>
            <img
              src="../assets/image/w2.png"
              alt="Welcome back"
              style="height: 25rem; width: 30rem; padding-top: 5%"
            />
            <button class="btn" id="signIn">Sign In</button>
          </div>

          <div class="overlay-panel overlay-right">
            <h1>Hello User!</h1>
            <p>Masukkan detail Pribadi Anda dan mulailah menjelajah di Toko Nothing</p>
            <img
              src="../assets/image/hello-user2.png"
              alt="Hello user"
              style="height: 25rem; width: 30rem"
            />
            <button class="btn" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");
      const signInForm = document.getElementById("loginForm");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });

      // signInForm.addEventListener("submit", (event) => {
      //   event.preventDefault();

      //   window.location.href = "../home.html";
      // });
    </script>
  </body>
</html>
