<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>VIEW BARANG</title>
  </head>
  <body>
    <h1>VIEW BARANG</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

<?php
include "koneksi.php";
?>
	
	<a href ="input_barang.php" class="btn btn-danger">Tambah Barang</a>
	<table class="table table-dark">
	    <tr>
	        <td>No</td>
	        <td>Nama Barang</td>
	        <td>Alamat</td>
	        <td>NO. Telpon</td>
	        <td colspan="4">Action</td>
	    </tr>
	    <?php
	        $no=1;
	        $query=mysqli_query($koneksi,"select * from barang");
	        while($list_barang=mysqli_fetch_array($query))
	        {
	        ?>
	    <tr>
	        <td><?php echo $no++?></td>
	        <td><?php echo $list_barang ['nama_barang'];?></td>
	        <td><?php echo $list_barang ['alamat'];?>
	        <td><?php echo $list_barang ['no_tlpn'];?>
	        <td><a href="edit_barang.php?id_barang=<?php echo $list_barang['id_barang'];?>">Edit</td>
	        <td><a href="hapus_barang.php?id_barang=<?php echo $list_barang['id_barang'];?>">Hapus</td>
	    </tr>   
	    <?php } ?>
	
	</table>
	</html>

</html>
