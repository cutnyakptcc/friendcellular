<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id_servis = $_POST['id_servis'];
$id_costumer = $_POST['id_costumer'];
$nama_costumer = $_POST['nama_costumer'];
$total_bayar = $_POST['total_bayar'];


//3. membuat query INSERT
$qry ="UPDATE pembayaran SET id='$id',nama_costumer='$nama_costumer',
tgl_servis='$tgl_servis', id_karyawan='$id_karyawan',harga_servis='$harga_servis' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>

