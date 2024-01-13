<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Azeret+Mono:wght@500&family=Lobster&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Satisfy&display=swap"
      rel="stylesheet"
    />

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <header class="header">
      <p class="username">
      <svg style="margin-bottom:5px" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
      </svg>
      <?php
      require "includes/koneksi.php";
      echo $_SESSION['username'];
      ?>  
      </p>
      
      <input type="checkbox" id="check">
      <label for="check" class="icons">
          <i class='bx bx-menu' id="menu-icon"></i>
          <i class='bx bxs-tag-x' id="close-icon"></i>
      </label>
      <nav class="navbar">
          <ul class="nav__links">
              <li><a href="Homepage.php" style="--i:0;">Home</a></li>
              <li><a href="aboutus.php" style="--i:1;">About Us</a></li>
              <li><a href="menu.php" style="--i:2;">Menu</a></li>
              <li><a href="kontak.php" style="--i:3;">Contact Us</a></li>
              <li><a href="masukan.php" style="--i:3;">Feedback</a></li>
              <a href="sign.php" style="--i:4;"><button class="logout bg-danger" onclick="return confirm('Apakah Anda Yakin Mau Log Out?')">Log Out</button></a>
          </ul> 
      </nav>
      <img class="logo" src="img/bg.jpg" alt="logo" href="#">
    </header>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>
        Rasakan pengalaman ngopi yang tak terlupakan dengan cita rasa yang menggoda bersama Quafe.
        </p>
        <a href="menu.php" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <script>
      // feather.replace();
    </script>

    <!-- My Javascript -->
    <!-- <script src="js/script.js"></script> -->
  </body>
</html>
