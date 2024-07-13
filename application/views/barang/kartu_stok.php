<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Stok - <?php echo $barang->nama_barang; ?></title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/asset/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .table thead th {
      background-color: #343a40;
      color: #fff;
    }
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #B8860B;
      padding-top: 20px;
      padding-right: 10px;
      z-index: 1;
      text-align: center;
    }
    .sidebar img {
      max-width: 150px;
      margin-bottom: 10px;
    }
    .sidebar h2 {
      color: white;
      padding-bottom: 10px;
      border-bottom: 1px solid #444;
      margin-bottom: 20px;
    }
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    .sidebar ul li {
      padding: 8px;
      text-align: center;
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
      display: block;
    }
    .sidebar ul li a:hover {
      background-color: #575757;
    }
    .card-header, .btn-primary {
      background-color: #007bff;
      color: #fff;
    }
    .form-group label {
      font-weight: bold;
    }
    .alert {
      margin-top: 20px;
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
    .content {
      margin-left: 270px; /* Adjusted for sidebar width plus padding */
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo Klinik Universitas AKI">
    <h2>Klinik Universitas AKI</h2>
    <ul>
      <li><a class="nav-link" href="<?php echo site_url('Home'); ?>">Home</a></li>
      <li><a class="nav-link" href="<?php echo site_url('barang'); ?>">Barang Masuk</a></li>
      <li><a class="nav-link" href="<?php echo site_url('barang'); ?>">Barang Keluar</a></li>
      <li><a class="nav-link" href="<?php echo site_url('About'); ?>">Tentang Kami</a></li>
      <li>
        <a class="btn btn-logout nav-link" href="<?php echo site_url('auth/logout'); ?>">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
  </div>

  <div class="content mt-5">
    <div class="container">
      <div class="card shadow">
        <div class="card-header">
          <h1 class="card-title">Kartu Stok - <?php echo $barang->nama_barang; ?></h1>
        </div>
        <div class="card-body">
          <p><strong>Kode Barang:</strong> <?php echo $barang->kode_barang; ?></p>
          <p><strong>Nama Barang:</strong> <?php echo $barang->nama_barang; ?></p>
          <p><strong>Harga Barang:</strong> Rp <?php echo number_format((double)$barang->harga_barang, 0, ',', '.'); ?></p>
          <p><strong>Stok Tersedia:</strong> <?php echo $barang->qty; ?></p>

          <form method="get" action="<?php echo site_url('barang/kartu_stok/'.$barang->id); ?>" class="form-inline mb-3">
            <input type="text" name="search" class="form-control mr-2" placeholder="Cari Tipe Transaksi" value="<?php echo $search; ?>">
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>

          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>

          <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Tipe Transaksi</th>
                  <th>Qty</th>
                  <th>Saldo</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($kartu_stok as $ks): ?>
                  <tr>
                    <td><?php echo $ks->tanggal; ?></td>
                    <td><?php echo $ks->waktu; ?></td>
                    <td><?php echo $ks->tipe_transaksi; ?></td>
                    <td><?php echo $ks->qty; ?></td>
                    <td><?php echo $ks->saldo; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

          <!-- Pagination links -->
          <?php echo $pagination; ?>
        </div>
      </div>
      <br><br>
      <a href="<?php echo site_url('barang/index'); ?>" class="btn btn-secondary">Kembali ke Menu</a>
      <br><br>
    </div>
  </div>
</body>

</html>
