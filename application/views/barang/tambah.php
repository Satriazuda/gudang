<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/asset/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      margin-top: 50px;
    }
    .card-header, .btn-primary {
      background-color: #007bff;
      color: #fff;
    }
    .form-group label {
      font-weight: bold;
    }
    .navbar-brand img {
      height: 70px;
    }
    .navbar-custom {
      background-color: #007bff;
      padding: 15px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    .navbar-custom .navbar-brand, 
    .navbar-custom .nav-link {
      color: #fff;
      font-size: 18px;
      display: flex;
      align-items: center;
    }
    .navbar-custom .nav-link:hover {
      color: #f8f9fa;
      text-decoration: underline;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288%2C 8%2C 8%2C 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    .nav-item {
      margin: 0;
    }
    .btn-logout {
        background-color: #dc3545;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, box-shadow 0.3s;
        }
        .btn-logout:hover {
        background-color: #c82333;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288%2C 8%2C 8%2C 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        .navbar-nav .nav-item {
        margin-left: 15px; /* Jarak antar item di navbar */
        }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
        <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo">
        <span style="font-size: 24px; display: inline-block;">Klinik Universitas AKI</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('About'); ?>">Tentang Kami</a>
          </li>
          <li class="nav-item">
              <a class="btn btn-logout" href="<?php echo site_url('auth/logout'); ?>">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card shadow">
      <div class="card-header">
        <h1 class="card-title">Tambah Barang</h1>
      </div>
      <div class="card-body">
        <form action="<?php echo site_url('barang/simpan'); ?>" method="post">
          <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
          </div>
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
          </div>
          <div class="form-group">
            <label for="nama_barang">Harga Barang</label>
            <input type="text" class="form-control" id="harga_barang" name="harga_barang" required>
          </div>
          <div class="form-group">
            <label for="qty">Stok</label>
            <input type="number" class="form-control" id="qty" name="qty" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?php echo site_url('barang/index'); ?>" class="btn btn-secondary">Kembali ke Menu</a>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
