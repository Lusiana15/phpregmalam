<?php
include "koneksi.php";
include "header.php";
?>
<table class="table table-bordered" border="1">
		<tr><td></td></tr>
			<td>Id barang</td>
	        <td>Nama</td>
	        <td>Kategori</td>
	        <td>Satuan</td>
	        <td colspan="4">Action</td>
	    </tr>
		<?php
		 $query =mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan");
		 $no=1;
 			while($tampil=mysqli_fetch_array($query)){?>}
	    <tr>
	        
			<td><?php echo $list_barang ['id_barang'];?></td>
	        <td><?php echo $list_barang ['nama'];?></td>
	        <td><?php echo $list_barang ['kategori_id'];?>
	        <td><?php echo $list_barang ['satuan_id'];?>
	    </tr>   
	    <?php } ?>
	
	</table>
	<input type='button'value='Tambah Barang'onClick='top.location="input_barang.php"'class='btn btn-success btn-sm'><?php include "footer.php";
