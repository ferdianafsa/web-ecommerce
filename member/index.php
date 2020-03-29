<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Ferdian-Store</title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="/syntax-highlighter/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="/syntax-highlighter/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="../css/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>
        	.fas,.fab {
        		font-size: 20px;
        	}
        	.a {
        		text-decoration: none;
        	}
        </style>
		
    </head>
	
    <body id="welcome">

    	<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level'] == "" OR $_SESSION['level'] ==  "admin" ){
		header("location:../login.php");
	}
 
	?>
    
        <aside class="left-sidebar">
            <div class="logo">
                <span>
                    <i class="fas fa-user" style="font-size: 40px; color: #7bd9e3;"><?php 
		include ('../koneksi.php');
		$username   =$_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username='$username'";
		$result = $koneksi->query($sql);
		if ($result->num_rows < 0) {
			echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
		} else { 
			while($row = $result->fetch_assoc()) {
			 echo "<span style='margin-left: 10px;'>".$row['username']."</span>";}}?></i>
			</span>
			 <p style="margin-left: 60px;"><a href="../logout.php" style="color: white;">Logout</a></p>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                	<b>
                		<li class="current"><a href="#"><i class="fas fa-wallet"></i>Saldo Rp. <?php 
		include ('../koneksi.php');
		$username   =$_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username='$username'";
		$result = $koneksi->query($sql);
		if ($result->num_rows < 0) {
			echo '<tr><td colspan="6"> tidak ada data!</td></tr>';
		} else { 
			while($row = $result->fetch_assoc()) {
			 echo "<span>".$row['saldo']."</span>";}}?>,-</a></li>
                    <li><a href="#welcome"><i class="fas fa-mobile-alt"></i>Pulsa</a></li>
                    <li><a href="#installation"><i class="fas fa-dice-d6"></i>Top Up Game Online</a></li>
                    <li><a href="#tmpl-structure"><i class="fas fa-money-bill-wave"></i>E-Money</a></li>
                    <li><a href="#css-structure"><i class="fab fa-btc"></i>Crypto Curreny</a></li>
                    <li><a href="#javascript"><i class="fas fa-cog"></i>About Me</a></li>
                </b>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
		    <div class="main-content">
		        <section id="welcome">
		            <div class="content-header">
		                <h1>Top Up Pulsa</h1>
		            </div>
		            <div class="welcome">
                        
                        <div class="card-group">
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <p class="card-text">
      <form action="tambah-proses.php" method="post">
      	<div class="form-check">
		  <input class="form-check-input" type="radio" name="produk" id="exampleRadios1" value="Pulsa 5K">
		  <label class="form-check-label" for="exampleRadios1">
		 Pulsa 5K
		  </label>
		</div>
		<input class="form-control form-control-sm" name="atribut" style="width: 125px;" type="number" placeholder="Rp.6700,-">
		<button type="submit" class="btn btn-primary" name="beli" value="Beli">Beli</button>
	  </form>
	 </p>
    </div>
  </div>
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <p class="card-text"><form action="pulsa10.php" method="post">
      	<div class="form-check">
		  <input class="form-check-input" type="radio" name="produk" id="exampleRadios1" value="Pulsa 10K">
		  <label class="form-check-label" for="exampleRadios1">
		    Pulsa 10K 
		  </label>
		</div>
		<input class="form-control form-control-sm" name="atribut" style="width: 125px;" type="number" placeholder="Rp.11670,-">
		<button type="submit" class="btn btn-primary" name="beli" value="Beli">Beli</button>
	  </form></p>
    </div>
  </div>
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <p class="card-text"><form action="pulsa25.php" method="post">
      	<div class="form-check">
		  <input class="form-check-input" type="radio" name="produk" id="exampleRadios1" value="Pulsa 25K">
		  <label class="form-check-label" for="exampleRadios1">
		    Pulsa 25K
		  </label>
		</div>
		<input class="form-control form-control-sm" name="atribut" style="width: 125px;" type="number" placeholder="Rp.26670,-">
		<button type="submit" class="btn btn-primary" name="beli" value="Beli">Beli</button>
	  </form></p>
    </div>
  </div>
</div>

		            
		            <div class="">
		             <hr>
		             <br>
		             <br>
		             <br>
		             <hr>
		            </div>

		        </section>
		        <section id="javascript">
		            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8248804718883!2d107.49901231431706!3d-6.911531469562845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e540747e698b%3A0xda589559f16ccc9b!2sJl.%20Hegarwangi%2C%20Galanggang%2C%20Kec.%20Batujajar%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat%2040561!5e0!3m2!1sid!2sid!4v1576482683538!5m2!1sid!2sid" width="1000" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		            <p class="fifteen">
		            <pre class="brush: html">
				        <!--
						JavaScripts
						========================== -->
						<script src="/js/vendor/jquery-2.2.4.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
						<script src="js/vendor/bootstrap.min.js"></script>
						<script src="js/jquery.ajaxchimp.min.js"></script>
						<script src="js/owl.carousel.min.js"></script>
						<script src="js/jquery.nice-select.min.js"></script>
						<script src="js/jquery.magnific-popup.min.js"></script>
						<script src="js/main.js"></script>
		            </pre>
		        </section>
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="/js/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
        <script type="text/javascript" src="/syntax-highlighter/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="/syntax-highlighter/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="/syntax-highlighter/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="/syntax-highlighter/scripts/shBrushPhp.js"></script> 
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
