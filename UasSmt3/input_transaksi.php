<?php
include("koneksi.php");
if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into transaksi(id_transaksi , nama_transaksi , tgl_transaksi , harga , qty , id_barang , diskon , id_pelanggan)
	values(
		'".$_POST['id_transaksi']."',
		'".$_POST['nama_transaksi']."',
		'".$_POST['tgl_transaksi']."',
		'".$_POST['harga']."',
		'".$_POST['qty']."',
		'".$_POST['id_barang']."',
		'".$_POST['diskon']."',
		'".$_POST['id_pelanggan']."')");
	
	if($query_input){
	header('location:tampil_transaksi.php');
	}else{
		echo mysqli_error();
	}
	}
include("header.php");
?>
<h1><center> TAMBAHKAN TRANSAKSI </center></h1>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Id Transaksi</td>
		<td><input type="text" name="id_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Transaksi</td>
		<td><input type="text" name="nama_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>Tgl Transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" class="form-control"></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input type="text" name="qty" class="form-control"></td>
	</tr>
	<tr>
		<td>Id Barang</td>
		<td><select class="form-control" name="id_barang">
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_barang = mysqli_query ($koneksi, "Select * from barang" ) or die
			(mysql_error($koneksi));
			while ($id_barang = mysqli_fetch_array($sql_barang)) {
				echo '<option value="'.$id_barang['id_barang'].'">'.$id_barang['id_barang'].'</option>';
			} ?>
	</tr>
	<tr>
		<td>Diskon</td>
		<td><input type="text" name="diskon" class="form-control"></td>
	</tr>
	<tr>
		<td>Id Pelanggan</td>
		<td><input type="text" name="id_pelanggan" class="form-control"></td>
	</tr>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>
<?php
include "footer.php";
?>