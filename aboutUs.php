<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutUs.css">
    <link rel="stylesheet" href="navbar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="aubody">
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
    <section class="AboutUs">
        <table>
            <tr>
                <th>
                    <h1>About Us!</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <p>
                    Selamat datang di Quafe, sebuah tempat di mana setiap cangkir menceritakan kisahnya sendiri. <br> Kami hadir untuk mengundang Anda dalam perjalanan cita rasa kopi yang menggoda.<br>Dari biji kopi terbaik hingga sentuhan kreatif, kami berkomitmen untuk menciptakan pengalaman rasa yang inovatif. <br>Nikmatilah secangkir kopi yang akan menciptakan kenangan yang tak terlupakan bersama pilihan menu terbaik kami.
                    </p>
                </td>
            </tr>
        </table>
    </section>
    
    
    <section class="mission" id="mission">
        <div class="mission-img">
            <img src="mission.jpeg">
        </div>
        <div class="mission-text">
            <h2>Our<span>Mission</span></h2>
            <h4>Menciptakan kehangatan di tengah kebersamaan dengan secangkir kopi pilihan.</h4>
            <p align = "left">
            Ini lebih dari sekadar sebuah kedai kopi; ini adalah rumah bagi para pencinta kopi, tempat di mana setiap tegukan menjadi sebuah petualangan baru. <br> Dari biji kopi terbaik hingga aroma yang menggoda, kami berusaha memberikan kesempurnaan rasa dalam setiap cangkir kopi. <br>Lebih dari sekadar menyajikan makan dan minum, kami merangkai cerita dari setiap tetes kopi yang kami hidangkan, menawarkan pengalaman yang tak terbatas melebihi harapan. <br>Bergabunglah dengan kami di dalam dunia kopi yang penuh kebersamaan, di mana setiap hidangan adalah ungkapan cinta kami pada seni menyeduh dalam ruang kehangatan.<br> Selamat datang di rumah kami, di mana aroma kopi yang khas dan senyuman manis siap menyambut Anda di setiap saat.
            </p>
        </div>
    </section>

    <div class="responsive-container-block outer-container">
        <div class="responsive-container-block inner-container">
          <p class="text-blk section-head-text">
            Meet Our Team
          </p>
          <p class="text-blk section-subhead-text">
          With Quafe, We Are Offering Such Amazing Experiences 
          </p>
          <div class="responsive-container-block">
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
              <div class="team-card">
                <div class="img-wrapper">
                  <img class="team-img" src="rifa.jpeg">
                </div>
                <p class="text-blk name">
                Mohamad Rifa Algifari Mulia Sembiring
                </p>
                <p class="text-blk position">
                231402121
                </p>
                <div class="social-media-links">
                  <a href="http://www.twitter.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                  </a>
                  <a href="http://www.facebook.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                  </a>
                  <a href="http://www.instagram.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                  </a>
                  <a href="http://www.gmail.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
              <div class="team-card">
                <div class="img-wrapper">
                  <img class="team-img" src="fauzan.jpeg">
                </div>
                <p class="text-blk name">
                  Fauzan Luthfi Khair Siregar
                </p>
                <p class="text-blk position">
                  231402088
                </p>
                <div class="social-media-links">
                  <a href="http://www.twitter.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                  </a>
                  <a href="http://www.facebook.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                  </a>
                  <a href="http://www.instagram.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                  </a>
                  <a href="http://www.gmail.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
              <div class="team-card">
                <div class="img-wrapper">
                  <img class="team-img" src="kenward.jpeg">
                </div>
                <p class="text-blk name">
                Kenward Keene Hermanto
                </p>
                <p class="text-blk position">
                231402081
                </p>
                <div class="social-media-links">
                  <a href="http://www.twitter.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                  </a>
                  <a href="http://www.facebook.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                  </a>
                  <a href="http://www.instagram.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                  </a>
                  <a href="http://www.gmail.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
              <div class="team-card">
                <div class="img-wrapper">
                  <img class="team-img" src="sarah.jpeg">
                </div>
                <p class="text-blk name">
                Sarah Agnes Br Marpaung
                </p>
                <p class="text-blk position">
                231402057
                </p>
                <div class="social-media-links">
                  <a href="http://www.twitter.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                  </a>
                  <a href="http://www.facebook.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                  </a>
                  <a href="http://www.instagram.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                  </a>
                  <a href="http://www.gmail.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                  </a>
                </div>
              </div>
            </div>
            <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
              <div class="team-card">
                <div class="img-wrapper">
                  <img class="team-img" src="yenni.jpg">
                </div>
                <p class="text-blk name">
                Yenni Theresia Zalukhu
                </p>
                <p class="text-blk position">
                231402012
                </p>
                <div class="social-media-links">
                  <a href="http://www.twitter.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
                  </a>
                  <a href="http://www.facebook.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
                  </a>
                  <a href="http://www.instagram.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                  </a>
                  <a href="http://www.gmail.com/" target="_blank">
                    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
                  </a>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>