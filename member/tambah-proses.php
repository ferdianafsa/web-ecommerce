<?php
session_start();
// mulai proses tambah data

// cek, jika tombol tambah di klik
if (isset($_POST['beli'])) {
    
	//include atau memasukan file koneksi ke database
	include ('../koneksi.php');
		$username   =$_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username='$username'";
		$result = $koneksi->query($sql);
		if ($result->num_rows < 0) {
			echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
		} else { 
			while($row = $result->fetch_assoc()) {
			 $saldo =$row['saldo'];}}
		if ($saldo < 6700) {
			echo "maaf saldo anda kurang silahkan lakukan deposit terlebih dahulu";
			echo '<a href="index.php">Kembail</a>';
		} else {
	$hargapulsa = 6700;
	$saldoakhir= $saldo-$hargapulsa;

	$sql = "UPDATE user SET saldo='$saldoakhir' WHERE username='$username'"; 
	if ($koneksi->query($sql) === TRUE)  {
	}


	//jika tombol tambah benar di klik maka lanjut proses nya
	$user_id         = $_SESSION['id'];
	$username        = $_SESSION['username'];
	$produk          = $_POST['produk'];
	$atribut         = $_POST['atribut'];

	//melakukan query dengan perintah INSERT INTO untuk memasukan data ke database
    $sql = "INSERT INTO orders VALUES('$username', '$produk', '$atribut')";


	if (mysqli_query($koneksi, $sql)) {
	    echo "New record created successfully";
	    echo '<a href="index.php">Kembail</a>';
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	}
}

	mysqli_close($koneksi);

}else{ // jika tidak terdeteksi tombol tambah di klik
   echo '<script>window.history.back()</script>';
}
?>