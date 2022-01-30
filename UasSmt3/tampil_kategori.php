<?php
include "koneksi.php";
include "header.php";

?>
<h1><center> DAFTAR KATEGORI </center></h1>
<a href ="input_kategori.php" class="btn btn-danger">
<table class="table table-striped table-dark table-success"border="1">
	<tr>
		<td>ID Kategori</td>
		<td>Nama</td>
	</tr>
	<?php
		$no=1;
		$query=mysqli_query($koneksi,"select * from kategori");
		while($list_barang=mysqli_fetch_array($query))
		{
		?>
	<tr>
		<td><?php echo $list_barang ['id_kategori'];?></td>
		<td><?php echo $list_barang ['nama'];?></td>
	</tr>	
	<?php } ?>
	
</table>
<?php
include "footer.php";
?>