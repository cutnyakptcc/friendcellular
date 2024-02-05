<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id_servis = $_POST['id_servis'];
$id_costumer = $_POST['id_costumer'];
$nama_costumer =$_POST['nama_costumer'];
$total_bayar = $_POST['total_bayar']; 


//3. membuat query INSERT
$qry ="INSERT INTO pembayaran (id_servis,id_costumer,nama_costumer,total_bayar,) VALUES
 ('$id_servis','$tid_costumer','$nama_costumer',$total_bayar)";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman jurusan.php
?>
<script>
    document.location= "servis.php";
    </script>

?>