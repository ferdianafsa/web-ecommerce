<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "ecommerce";

$conn = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal");
mysqli_select_db($conn, $name) or die('Database is not found!');



function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$row = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
    return $rows;
}


function registrasi($data) {
	global $conn;
    // $name = mysqli_real_escape_string($conn, $data["name"]);
    $name = strtolower(stripslashes($data["name"]));
	$username = strtolower(stripslashes($data["username"]));
	$saldo = mysqli_real_escape_string($conn, $data["saldo"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$level = strtolower(stripslashes($data["level"]));


    // cek username sudah ada atau belum
    $sql = "SELECT username FROM user WHERE username = '$username'";
    $result = $conn->query($sql);
    
      if ( mysqli_fetch_assoc($result) ) {
      	   echo "<script>
      	         alert('username sudah ada')
      	         </script>";
      	    return false;     
      }

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
		        alert('konfirmasi password tidak sesuai!')
		      </script>";
		return false;      
      }


      // enkripsi password
      // $password = password_hash($password, PASSWORD_DEFAULT);

      // tambah user bari ke database
      $sql = "INSERT INTO user VALUES(NOT NULL, '$name', '$username', '$saldo', '$password', '$level' )";
		if (mysqli_query($conn, $sql)) {
			    
			} 

      return mysqli_affected_rows($conn);
      mysql_close($conn);
}

?>