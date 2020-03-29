<?php


if (isset($_POST['simpan'])) {

	// cek koneksi ke database
	include ('../koneksi.php');

   // jika tombol simpan di klik
	$nama 		      = $_POST['nama'];
	$username         = $_POST['username'];
	$saldo            =$_POST['saldo'];
	


	// melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' diambil dari inputan hiiden id
	$sql = "UPDATE user SET nama='$nama', username='$username', saldo='$saldo' WHERE username='$username'";

	if ($koneksi->query($sql) === TRUE)  {
		echo 'Data berhasil di simpan! ';
		echo '<a href="index.php?username='.$username.'">Kembali</a>';
	}else{
        
        echo 'Gagal menyimpan data! ';
        echo '<a href="index.php?username='.$username.'">Kembali</a>';
	}
}else{

	echo '<script>window.history.back()</script>';
}
?>