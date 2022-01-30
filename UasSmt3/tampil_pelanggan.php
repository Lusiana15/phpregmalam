<?php
include "koneksi.php";
include "header.php";
?>
	<h1><center> DAFTAR PELANGGAN </center></h1>
	<a href ="input_pelanggan.php" class="btn btn-danger"></a>
	<table class="table table-dark">
	    <tr>
	        <td>Id Pelanggan</td>
			<td>Nama Pelanggan</td>
	        <td>No Tlp</td>
	        <td>Status</td>
	        <td colspan="4">Action</td>
	    </tr>
	    <?php
	        $no=1;
	        $query=mysqli_query($koneksi,"select * from pelanggan");
	        while($list_barang=mysqli_fetch_array($query))
	        {
	        ?>
	    <tr>
	        <td><?php echo $no++?></td>
			<td><?php echo $list_barang ['id_pelanggan'];?></td>
	        <td><?php echo $list_barang ['nama_pelanggan'];?></td>
	        <td><?php echo $list_barang ['no_tlp'];?>
	        <td><?php echo $list_barang ['status'];?>
	    </tr>   
	    <?php } ?>
	
	</table>
	</html>

</html>
<?php
include "footer.php";
?>
