<?php

require ("function.php");

if ( isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0 ) {
		echo "<script>
		        alert('user baru berhasil ditambahkan!, silahkan login')
		      </script>" ;
	} else {

		echo mysqli_error($conn);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halama Registrasi</title>

	     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">


	<style>
		label {
			display: block;
		}
		li {
			text-decoration: none;
			list-style-type: none;
		}
		.input {
			border-radius: 5px;
		}
		.btn {
			margin-top: 4px;
		}
		.login {
			font-size: 14px;
			margin-left: -27px;
			margin-top: 0;
		}
		.legend {
			margin-left: 36%;
			margin-top: 5%;
		}
	</style>
</head>
<body background="bg.jpg">
<div class="legend">
<legend>
  <form action="" method="post">
	<ul>
		<li>
			<input class="input" type="text" name="id" id="id" size="25" hidden="">
		</li>
		<li>
			<label for="username">Name</label>
			<input class="input" type="text" name="name" id="name" size="25" required>
		</li>
		<li>
			<label for="username">Username</label>
			<input class="input" type="text" name="username" id="username" size="25" required>
		</li>
		<li>
			<input class="input" type="text" name="saldo" id="saldo" value="0" size="25" hidden="">
		</li>
		<li>
			<label for="password">password</label>
			<input class="input" type="password" name="password" id="password" size="25" required>
		</li>
		<li>
			<label for="password2">Konfirmasi password</label>
			<input class="input" type="password" name="password2" id="password2" size="25" required>
		</li>
		<li>
			<input class="input" type="text" name="level" id="level" size="25" value="pegawai" hidden="">
		</li>
		<li>
			<button class="btn btn-primary" type="submit" name="register">Register</button>
		</li>
		<li>
			<a class="login" href="login.php">login</a>
		</li>
	</ul>
</form>
</legend>
</div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>s