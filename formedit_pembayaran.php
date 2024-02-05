
<?php
include_once("koneksi.php");
$id_servis = $_GET['id_servis'];
$qry = "SELECT * FROM pembayaran WHERE id_servis='$id_servis'";
$data = mysqli_query($con,$qry);

$ids = mysqli_fetch_array($data);

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
    Edit Jadwal
  </div>    
        <div class="card-body">
        <form action="proses_editpembayaran.php" method="POST" >
        <input type="hidden" name="id_servis" value="<?php echo $ids['id_servis']?>" >
        <div class="mb-3">
            <label for="id_costumer" class="form-label">Id Costumer</label>
            <input type="nama"  name="id_costumer" value="<?php echo $ids['id_costumer']?>" class="form-control" id="id_costumer" aria-describedby="id_costumerHelp">
            <div id="id_costumer" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="nama_costumer" class="form-label">Nama Costumer</label>
            <input type="nama"  name="nama_costumer" value="<?php echo $ids['nama_costumer']?>" class="form-control" id="nama_costumer" aria-describedby="nama_costumerHelp">
            <div id="nama_costumer" class="form-text"></div>
        </div>
       
        <div class="mb-3">
            <label for="total_bayar" class="form-label">Total Bayar</label>       
            <input type="number" name="total_bayar" value="<?php echo $ids['total_bayar']?>"  class="form-control" id="total_bayar" aria-describedby="total_bayarHelp">
            <div id="total_bayar" class="form-text"></div>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "penjadwalan.php"> Batal </a>
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