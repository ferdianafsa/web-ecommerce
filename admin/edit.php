<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
    
    <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
    <link rel="stylesheet" href="../css/normalize.min.css">
    <!-- Main CSS-->
        <link rel="stylesheet" href="../css/main.css">
	<title>Edit Data Member</title>
</head>
<body>
   <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <h3>Ferdian Store</h3>
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

      <br>
      <br>



<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yang didapatkan dari GET id -> edit.php?id=siswa_id

// include atau memasukan file koneksi ke database
include ('../koneksi.php');

// membuat variable $id yang nilainy adalah dari URL GET id -> edit.php?id=siswa_id
$username = $_GET['username'];

//melakukan query ke database dg SELECT tabel siswa dengan kondisi WHERE siswa_id= '$id'
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $koneksi->query($sql);

//cek apakah data dari hasil query ada atau tidak
if ($result->num_rows < 0)  {

//cek apakah ada data yang sesuai makan akan langsung di arahkan ke halaman depan atau beranda -> index.php 
echo '<script>window.history.back()</script>';
}else{
	// jika data ditemukan, maka membuat variabel $data
	$data = $result->fetch_assoc();
	 //mengambil data ke databse yang nantinya akan ditampilkan di foem edit dibawah

}
?>
 
 <center>
<form action="edit-proses.php" method="post">
   <div class="card" style="width: 700px;">
     <h5 class="card-header">Edit Data member</h5>
     <div class="card-body">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
      
      <div class="input-group input-group-sm mb-3" style="width: 400px;">
        Id 
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="id" value="<?php echo $data['id']; ?>" style="margin-left: 10px;" readonly>
      </div>
      <div class="input-group input-group-sm mb-3" style="width: 400px;">
        Nama 
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama" value="<?php echo $data['nama']; ?>" style="margin-left: 97px;" required>
      </div>
      <div class="input-group input-group-sm mb-3" style="width: 400px;">
        Username 
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="username" value="<?php echo $data['username']; ?>" style="margin-left: 24px;" required>
      </div>	
      <div class="input-group input-group-sm mb-3" style="width: 400px;">
        Saldo 
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="saldo" value="<?php echo $data['saldo']; ?>" style="margin-left: 31px;" required>
      </div>
      <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
	</table>
</center>
</form>


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>