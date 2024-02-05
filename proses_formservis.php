<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id= $_POST['id'];
$nama_costumer = $_POST['nama_costumer'];
$tgl_servis = $_POST['tgl_servis'];
$id_karyawan = $_POST['id_karyawan'];
$harga_servis = $_POST['harga_servis'];


//3. membuat query INSERT
$qry ="INSERT INTO servis (id,nama_costumer,tgl_servis,id_karyawan,harga_servis) VALUES ('$id',
'$nama_costumer','$tgl_servis','$id_karyawan','$harga_servis')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
</script>

