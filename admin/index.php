<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Store</title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="../syntax-highlighter/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="../syntax-highlighter/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="../css/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        	.fas {
        		font-size: 20px;
        	}
        	.navlist {
        		margin-left: 10px;
        	}
        </style>
		
    </head>
	
    <body id="welcome">
    		<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level'] == "" OR $_SESSION['level'] ==  "pegawai"){
		header("location:../login.php");
	}
 
	?>
        <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <h3>Store</h3>
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#welcome"><i class="fas fa-list"></i><span class="navlist">Daftar Order</span></a></li>
                    <li><a href="#installation"><i class="fas fa-list-ol"></i><span class="navlist">Daftar Member</span></a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
		    
		        <section id="welcome">
	            <center>
                    	<h3>List Order</h3>
		<table class="table table-striped" style="width: 1100px;">
		  <tr>    
			<th scope="col">Username</th>
			<th scope="col">Produk</th>
			<th scope="col">Atribut</th>
			<th scope="col">Aksi</th>
		</tr>

		<?php
		// memasukan file koneksi ke database
		include ('../koneksi.php');

		// query ke database SELECT table siswa di urutkan berdasarkan NIS paling besar
		$sql = "SELECT * FROM orders";
		$result = $koneksi->query($sql);

		// cek apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if ($result->num_rows < 0) { // artinya jika data hasil query di atas kosong
			// jika data kosong, maka akan menampilkan kosong
			echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
		} else { // jika data di database ada
			// jika data tidak kosong makan akan menampilkan perulangan while
			$no = 1;
			while($row = $result->fetch_assoc()) {
				
				// menampilkan row dengan data di database
				echo "<tr>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['produk']."</td>";
				echo "<td>".$row['atribut']."</td>";
				echo '<td>
				<p>
				  <a href="edit.php?atribut='.$row['atribut'].'">
				    <button class="btn btn-success">Edit
				    </button>
				  </a>
				  <a href="hapus.php?atribut='.$row['atribut'].'"
					onclick="return confrim(\'Yakin?\')">
					<button class="btn btn-danger">Hapus
					</button>
				  </a>
				 </p></td>';

				echo "</tr>";

				$no++;
			}

		}
		?>
	</table></center>

                </section>
		        
		        <section id="installation">
                    <center>
                    	<h3>List Member</h3>
		<table class="table table-striped" style="">
		  <tr>    
			<th scope="col">Id</th>
			<th scope="col">Nama</th>
			<th scope="col">Username</th>
			<th scope="col">Saldo</th>
			<th scope="col">Aksi</th>
		</tr>

		<?php
		// memasukan file koneksi ke database
		include ('../koneksi.php');

		// query ke database SELECT table siswa di urutkan berdasarkan NIS paling besar
		$sql = "SELECT * FROM user WHERE level='pegawai'";
		$result = $koneksi->query($sql);

		// cek apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if ($result->num_rows < 0) { // artinya jika data hasil query di atas kosong
			// jika data kosong, maka akan menampilkan kosong
			echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
		} else { // jika data di database ada
			// jika data tidak kosong makan akan menampilkan perulangan while
			$no = 1;
			while($row = $result->fetch_assoc()) {
				
				// menampilkan row dengan data di database
				echo "<tr>";
				echo "<td>".$row['id']."</td>"; 
				echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['saldo']."</td>";
				echo '<td>
				<p>
				  <a href="edit.php?username='.$row['username'].'">
				    <button class="btn btn-success">Edit
				    </button>
				  </a>
				  <a href="hapus.php?username='.$row['username'].'"
					onclick="return confrim(\'Yakin?\')">
					<button class="btn btn-danger">Hapus
					</button>
				  </a>
				 </p></td>';

				echo "</tr>";

				$no++;
			}

		}
		?>
	</table></center>
		            
		        </section>


		        
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		
    </body>
</html>
