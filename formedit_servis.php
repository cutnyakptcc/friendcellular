
<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM servis WHERE id='$id'";
$data = mysqli_query($con,$qry);

$idp = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>friendcellular | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- navbar -->
  <?php include_once('navbar.php') ?>

  <!-- Sidebar -->
  <?php include_once('sidebar.php') ?>

 
  <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-3">
        <div class="card">
  <div class="card-header">
    Form edit
  </div>    
        <div class="card-body">
        <form action="proses_editservis.php" method="POST" >
        <input type="hidden" name="id" value="<?php echo $idp['id']?>" >

        <div class="mb-3">
            <label for="nama_costumer" class="form-label">Nama Costumer</label>
            <input type="name"  name="nama_costumer" value="<?php echo $idp['nama_costumer']?>" class="form-control" id="nama_costumer" aria-describedby="nama_costumerHelp">
            <div id="nama_costumer" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="tgl_servis" class="form-label">Tanggal Servis</label>
            <input type="date"  name="tgl_servis" value="<?php echo $idp['tgl_servis']?>" class="form-control" id="tgl_servis" aria-describedby="tgl_servisHelp">
            <div id="tgl_servis" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="id_karyawan" class="form-label">Id Karyawan</label>
            <input type="name"  name="id_karyawan" value="<?php echo $idp['id_karyawan']?>" class="form-control" id="id_karyawan" aria-describedby="id_karyawanHelp">
            <div id="id_karyawan" class="form-text"></div>
        </div>
       
        <div class="mb-3">
            <label for="harga_servis" class="form-label">Harga Servis</label>       
            <input type="number" name="harga_servis" value="<?php echo $idp['harga_servis']?>"  class="form-control" id="harga_servis" aria-describedby="harga_servisHelp">
            <div id="harga_servis" class="form-text"></div>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "servis.php"> Batal </a>
        </form>
  </div>

</div>
    </div>
</div>

<?php include_once('footer.php')?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>