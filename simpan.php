<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>welcome &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="apaantuh.css">
</head>
<body class="body">
	<center>
<div class="wrapper">
	<section class="h-100">
	<div class="form-box">
						<img src="img/bg.jpg" width="500px" alt="quafe">
					</div>
					<div class="input-box">
					<div class="body">
						<div class="body">
							<?php
                                require_once "includes/koneksi.php";

                                $username=$_POST['username'];
								$name=$_POST['name'];
								$email=$_POST['email'];
                                $password=$_POST['password'];
								$hash = password_hash($password, PASSWORD_DEFAULT);
                                
                                $sql = "INSERT INTO akun(username, name, email, password) VALUES ('$username','$name','$email','$hash')";

                                if($koneksi->query($sql)===TRUE){
                                    echo "<h3><font color=\"white\">Welcome To QUAFE!</font></";
                                } else {
                                    echo "Error : ".$sql."<br/>".$koneksi->error;
                                };
                            ?>
						</div>
					</div>
					<div class="top">
                <span>go to the login page? <a href="sign.php">Login</a></span>
            		</div>
			</div>
							</div>
		</div>
	</div>
	</section>
</div>
</center>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>