<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id_servis = $_POST['id_servis'];
$id_costumer = $_POST['tgl_servis'];
$id_karyawan = $_POST['id_karyawan'];
$harga_servis = $_POST['harga_servis'];


//3. membuat query INSERT
$qry ="INSERT INTO servis (nama_costumer,tgl_servis,id_karyawan,harga_servis) VALUES
 ('$nama_costumer','$tgl_servis','$id_karyawan',$harga_servis)";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman jurusan.php
?>
<script>
    document.location= "servis.php";
    </script>

?>