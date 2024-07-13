<!DOCTYPE html>
<html>
<head>
  <title>Konfirmasi Penghapusan Produk</title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
      margin: 50px auto;
      text-align: center;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
    }
    .btn {
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-danger text-white">
            <h1 class="card-title">Hapus Barang</h1>
        </div>
        <div class="card-body">
            <p>Apakah Anda yakin ingin menghapus barang ini?</p>
            <form action="<?php echo site_url('barang/delete/'.$barang->id); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $barang->id; ?>">
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="<?php echo site_url('barang'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
