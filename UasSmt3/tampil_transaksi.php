<?php
include "koneksi.php";
include "header.php";
?>
	<a href ="input_transaksi.php" class="btn btn-danger">
	<table class="table table-dark">
	    <tr>
	        <td>Id Transaksi</td>
			<td>Nama Transaksi</td>
	        <td>Tgl Transaksi</td>
	        <td>Harga</td>
	        <td>Qty</td>
            <td>Id Barang</td>
            <td>Diskon</td>
            <td>Id Pelanggan</td>
            
	        <td colspan="4">Action</td>
	    </tr>
	    <?php
	        $no=1;
	        $query=mysqli_query($koneksi,"select * from transaksi");
	        while($list_barang=mysqli_fetch_array($query))
	        {
	        ?>
	    <tr>
	        <td><?php echo $no++?></td>
			<td><?php echo $list_barang ['id_transaksi'];?></td>
	        <td><?php echo $list_barang ['nama_transaksi'];?></td>
	        <td><?php echo $list_barang ['tgl_transaksi'];?>
	        <td><?php echo $list_barang ['harga'];?>
            <td><?php echo $list_barang ['qty'];?>
            <td><?php echo $list_barang ['id_barang'];?>
            <td><?php echo $list_barang ['diskon'];?>
            <td><?php echo $list_barang ['id_pelanggan'];?>
	    </tr>   
	    <?php } ?>
	
	</table>
	</html>

</html>
<?php
include "footer.php";
?>
