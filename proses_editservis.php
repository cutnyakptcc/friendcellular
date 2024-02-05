<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$nama_costumer = $_POST['nama_costumer'];
$tgl_servis = $_POST['tgl_servis'];
$id_karyawan = $_POST['id_karyawan'];
$harga_servis = $_POST['harga_servis'];


//3. membuat query INSERT
$qry ="UPDATE servis SET id='$id',nama_costumer='$nama_costumer',tgl_servis='$tgl_servis',
 id_karyawan='$id_karyawan',harga_servis='$harga_servis' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>

