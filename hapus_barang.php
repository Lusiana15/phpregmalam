<?php
include 'koneksi.php';

$hapus=mysqli_query($koneksi,"delete from barang where id_barang='".$_GET['id_barang']."'");
if($hapus){
	header("location:view_barang.php");
}else{
	echo mysqli_error();
}

?>