<?php

if (isset($_GET['atribut'])) {
	
	include ('../koneksi.php');

	$atribut = $_GET['atribut'];

	$sql = "SELECT * FROM orders WHERE atribut='$atribut'";
	$result = $koneksi->query($sql);

	if ($result->num_rows > 0)  {
        
        $del = "DELETE FROM orders WHERE atribut='$atribut'";
		if ($koneksi->query($del)) {
            echo "Record deleted successfully";
			echo '<a href="index.php">Kembail</a>';
		}else{
			echo 'Gagal menghapus data! ';
			echo '<a href="index.php">Kembail</a>';
		}

	}else{

		echo '<script>window.history.back()</script>';

	}
}
?>