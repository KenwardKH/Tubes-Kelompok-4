<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="apaantuh.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
    <title>QUAFE</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p style="margin-bottom:0px"><img src="img/bg.jpg" alt="logo" width="50px"> QUAFE</p>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Log In</button>
            <button class="btn" id="registerBtn" onclick="register()">Register</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Register</a></span>
                <header>Login</header>
            </div>
            <form method="POST" class="my-login-validation" novalidate="">
            <div class="input-box">
                <input id="username" type="text" class="input-field" name="username" placeholder="Username">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" class="input-field" name="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" name="btnlogin" class="submit" value="Log In">
            </div>
            </form>
            <?php
            require "includes/koneksi.php";
            if(isset($_POST['btnlogin'])){
                $user_login = $_POST['username'];
                $user_pass = $_POST['password'];
                
                $sql = "SELECT * FROM akun WHERE username='$user_login'";
                $query = mysqli_query($koneksi, $sql);

                if(!$query){
                    die("Query Gagal: ".mysqli_error($koneksi));
                }

                while($row = mysqli_fetch_array($query)){
                    $user = $row['username'];
                    $hashed_password_from_database = $row['password'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $position = $row['position'];
                }

                if($user_login==$user && password_verify($user_pass, $hashed_password_from_database) && $position == 'admin'){
                    $_SESSION['username'] = $user;
                    $_SESSION['nama'] = $nama;
                    $_SESSION['email'] = $email;
                    header("Location:admin/index.php");
                } else if ($user_login==$user && password_verify($user_pass, $hashed_password_from_database) && $position == ''){
                    $_SESSION['username'] = $user;
                    $_SESSION['nama'] = $nama;
                    $_SESSION['email'] = $email;
                    header("Location:Homepage.php");
                } else {
                    echo "<br><div class='alert alert-warning' role='alert'>
                    <b> User Tidak Ditemukan</b>
                  </div>";
                }
            }
            
            ?>
							
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <script src="js/my-login.js"></script>


        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Register</header>
            </div>
            <form action="simpan.php" method="POST" class="my-login-validation" novalidate="">
            <div class="two-forms">
                <div class="input-box">
                    <input id="username" name="username" type="text" class="input-field" placeholder="Username" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input id="name" name="name" type="text" class="input-field" placeholder="Name" required>
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input id="email" name="email" type="text" class="input-field" placeholder="Email" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input id="password" name="password" type="password" class="input-field" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            </form>
        </div>
    </div>
</div>   
<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>
<script>
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }
    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>
</body>
</html>