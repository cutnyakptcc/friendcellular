<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class ="bg-danger-subtle">
    <!-- awal navbar -->
    <?php
    include_once("navbar.php");
    ?>
    <!-- akhir navbar -->

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-3">
        <div class="card">
  <div class="card-header">
   Form Servis
  </div>
  <div class="card-body">
        <form action="proses_form.php" method="POST" >
        <div class="mb-3">
            <label for="nama_costumer" class="form-label">Nama Costumer</label>
            <input type="name" name="nama_costumer" class="form-control" id="nama_costumer" aria-describedby="nama_costumerHelp">
            <div id="nama_costumerHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="tgl_costumer" class="form-label">Tanggal Servis</label>
            <input type="date" name="tgl_costumer" class="form-control" id="tgl_costumer" aria-describedby="tgl_costumerHelp">
            <div id="tgl_costumerHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="id_karyawan" class="form-label">Id Karyawan</label>       
            <input type="name" name="id_karyawan" class="form-control" id="id_karyawan" aria-describedby="id_karyawan">
            <div id="id_karyawan" class="form-text"></div>
        </div>
       

        <div class="mb-3">
            <label for="harga_servis" class="form-label">Harga Servis</label>
            <input type="number" name="harga_servis" class="form-control" id="harga_servis" aria-describedby="tempat">
            <div id="harga_servis" class="form-text"></div>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href = "index.php"> Batal </a>
        </form>
  </div>
</div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>