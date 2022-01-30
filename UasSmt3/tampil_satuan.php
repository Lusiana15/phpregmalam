<?php
include "koneksi.php";
include "header.php";

?>
<a href ="input_satuan.php" class="btn btn-danger"></a>
<table class="table table-dark">
	<tr>
		<td>Id Satuan</td>
		<td>Nama</td>
	</tr>
	<?php

		$query=mysqli_query($koneksi,"select * from satuan");
		while($list_barang=mysqli_fetch_array($query))
		{
		?>
	<tr>
		<td><?php echo $list_barang ['id_satuan'];?></td>
		<td><?php echo $list_barang ['nama'];?></td>
	</tr>	
	<?php } ?>
</table>
</html>
<?php
include "footer.php";
?>