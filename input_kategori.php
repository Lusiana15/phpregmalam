<html>
<head>
	<title>Halaman karyawan</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

</body>

<?php
include("koneksi.php");

if (isset($_POST['save'])){
    $jenis_barang=$_POST['jenis_barang'];
    $query=mysqli_query($koneksi,"insert into kategori(jenis_barang) 
    value ('$jenis_barang')");
if($query) {
    header ("location:view_kategori.php");
} else{
    echo mysqli_eror ();

}
}
?>
<form method="POST">
<table class="table table-bordered" border="0">
	<tr>
		<td>Jenis Barang</td>
		<td><input type="text" name="jenis_barang" class="form-control"></td>
	</tr>
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>