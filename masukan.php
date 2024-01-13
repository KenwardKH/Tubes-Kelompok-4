<?php

    require "includes/koneksi.php";
        if (isset($_POST['kirim'])){
            $user = $_SESSION['username'];
            $query = "SELECT * FROM akun WHERE username= '$user'";
            $hasil = mysqli_query($koneksi, $query);
            foreach ($hasil as $data) {
                $id = $data['id'];
                $username = $data['username'];
                $nama = $data['name'];
                $email = $data['email'];
            }
            $saran = $_POST['saran'];
            $query = "INSERT INTO masukan (username, name, email, masukan) VALUES ('$username', '$nama', '$email', '$saran')";
            mysqli_query($koneksi, $query);
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="masukan.css">
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
    <h1><span>Masukan</span> / <span>Saran</span></h>
    <h3>
        Saran dan masukan Anda sangat berarti bagi perkembangan kami.
    </h3>
    <form method="post" onsubmit="masukan()">
        <table>
            <tr>
                <th><h4>Kirimkan masukan/saran Anda</h4></th>
            </tr>
            <tr>
                <td><textarea name="saran" id="saran" cols="75" rows="15" placeholder="Masukkan saran Anda"></textarea></td>
            </tr>
            <tr>
                <td><button name="kirim" type="submit" class="send" >Kirim Pesan</button></td>
            </tr>
        </table>
    </form>
    <script>
        function masukan(){
            alert("Terima Kasih Atas Masukan Anda");
        }
    </script>
</body>
</html>