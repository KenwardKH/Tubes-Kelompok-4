<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style2.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body class="body_contact">
    <!--Contact Section Start  -->
    <section id="contact" class="contact">
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
              <li><a href="aboutUs.php" style="--i:1;">About Us</a></li>
              <li><a href="menu.php" style="--i:2;">Menu</a></li>
              <li><a href="kontak.php" style="--i:3;">Contact Us</a></li>
              <li><a href="masukan.php" style="--i:3;">Feedback</a></li>
              <a href="sign.php" style="--i:4;"><button class="logout bg-danger" onclick="return confirm('Apakah Anda Yakin Mau Log Out?')">Log Out</button></a>
          </ul> 
      </nav>
      <img class="logo" src="img/bg.jpg" alt="logo" href="#">
    </header>
    <!-- Navbar End -->
      <h2><span>Kontak </span>Kami</h2>
      <p class="kalimat">
        Hubungi kami jika Anda mengalami kendala dalam pemesanan atau Anda mempunyai pertanyaan seputar menu yang tersedia.

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1077807974607!2d98.65714507412083!3d3.5626521504734163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fdf837c0b1b%3A0xa5ef19b5b1fb64a5!2sProgram%20Studi%20Teknologi%20Informasi%2C%20Fasilkom-TI%2C%20Universitas%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1700523510807!5m2!1sid!2sid"
          allowfullscreen="true"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <?php
          $user = $_SESSION['username'];
          $query = "SELECT * FROM akun WHERE username= '$user'";
          $hasil = mysqli_query($koneksi,$query);
          foreach($hasil as $data){
          ?>
        <form method="POST">
          <div class="input-group">
            <i data-feather="user"></i>
            <input readonly type="text" placeholder="Nama" name="username" class="name" required value="<?php echo $data ['username'];?>">
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input readonly type="text" placeholder="E-mail" name="email" class="email" required value="<?php echo $data ['email'];?>">
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input
              type="number"
              placeholder="No Handphone"s
              class="phone"
              name="phone"
              required
            >
          </div>
          <div class="input-group">
            <textarea
              name="message"
              id=""
              cols="20"
              rows="10"
              placeholder="Write message here..."
              class="message"
              required
            ></textarea>
          </div>
          <button name="send" type="submit" class="send-btn" onsubmit="return validate()">Kirim Pesan</button>
        </form>
        <?php } ?>
      </div>
    </section>

    <!-- Email Js -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("Nz1Cp0k32qEUY4vZy");
      })();
    </script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("Nz1Cp0k32qEUY4vZy");
      })();
    </script>

    <!-- Link To Js -->
    <script src="main.js"></script>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
