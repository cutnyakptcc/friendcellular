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
   Form Pembayaran
  </div>
  <div class="card-body">
        <form action="proses_form.php" method="POST" >
        <div class="mb-3">
            <label for="is_costumer" class="form-label">Id Costumer</label>
            <input type="name" name="id_costumer" class="form-control" id="id_costumer" aria-describedby="id_costumerHelp">
            <div id="id_costumerHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="nama_costumer" class="form-label">Nama Servis</label>
            <input type="name" name="nama_costumer" class="form-control" id="nama_costumer" aria-describedby="nama_costumerHelp">
            <div id="nama_costumerHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="total_bayar" class="form-label">Total Bayar</label>       
            <input type="number" name="total_bayar" class="form-control" id="total_bayar" aria-describedby="total_bayar">
            <div id="total_bayar" class="form-text"></div>
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