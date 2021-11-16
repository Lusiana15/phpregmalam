<html>
<head>
	<title>Halaman admin</title>
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
    $nama_barang=$_POST['nama_barang'];
    $alamat=$_POST['alamat'];
    $no_tlpn=$_POST['no_tlpn'];
    $query=mysqli_query($koneksi,"insert into barang(nama_barang, alamat, no_tlpn) 
    value ('$nama_barang','$alamat','$no_tlpn')");
if($query) {
    header ("location:view_barang.php");
} else {
    echo mysqli_eror ();

}
}
?>
<form method="POST">
<table class="table table-bordered" border="0">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
    <td>No Telepon</td>
		<td><input type="text" name="no_tlpn" class="form-control"></td>
	</tr>
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>