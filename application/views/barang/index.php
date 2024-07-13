<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Stok Barang</title>
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/asset/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #007bff;
      padding-top: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
      transition: all 0.3s;
    }
    .sidebar .nav-link {
      color: #fff;
      font-size: 18px;
      display: flex;
      align-items: center;
      padding: 10px 20px;
    }
    .sidebar .nav-link:hover {
      color: #f8f9fa;
      text-decoration: underline;
    }
    .sidebar .navbar-brand {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      color: #fff;
      font-size: 24px;
    }
    .sidebar .navbar-brand img {
      height: 70px;
      margin-right: 10px;
    }
    .container-fluid {
      margin-left: 250px;
      padding: 20px;
      transition: all 0.3s;
    }
    .table thead th {
      background-color: #343a40;
      color: #fff;
    }
    .btn-info, .btn-warning, .btn-danger {
      margin-right: 5px;
    }
    .form-container {
      margin: 20px 0;
    }
    .btn-small {
      font-size: 14px;
      padding: 8px 12px;
    }
    .form-container .col-md-6 {
      padding: 10px;
    }
    .pagination {
      display: flex;
      justify-content: center;
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
    .btn-custom {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 15px;
      font-size: 16px;
      font-weight: bold;
      margin: 5px;
      transition: background-color 0.3s, box-shadow 0.3s;
    }
    .btn-custom:hover {
      background-color: #0056b3;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .btn-custom-primary {
      background-color: #28a745;
    }
    .btn-custom-primary:hover {
      background-color: #1e7e34;
    }
    .btn-custom-secondary {
      background-color: #17a2b8;
    }
    .btn-custom-secondary:hover {
      background-color: #117a8b;
    }
    .btn-custom-outline {
      border: 2px solid #007bff;
      color: #007bff;
      padding: 10px 15px;
    }
    .btn-custom-outline:hover {
      background-color: #007bff;
      color: #fff;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .container-fluid {
        margin-left: 0;
      }
      .form-container {
        flex-direction: column;
        align-items: stretch;
      }
      .form-container .input-group {
        width: 100%;
        margin-bottom: 10px;
      }
      .form-inline .input-group-append {
        width: 100%;
      }
      .form-inline .input-group-append .btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <a class="navbar-brand" href="<?php echo site_url('Home'); ?>">
      <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo">
      <span>Klinik Universitas AKI</span>
    </a>
    <nav class="nav flex-column">
      <a class="nav-link" href="<?php echo site_url('About'); ?>">Tentang Kami</a>
      <a class="btn btn-logout nav-link" href="<?php echo site_url('auth/logout'); ?>">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </nav>
  </div>
  <div class="container-fluid">
    <div class="card shadow mx-0">
      <div class="card-header">
        <h1 class="card-title">Stok Barang</h1>
      </div>
      <div class="form-container d-flex justify-content-between align-items-center">
        <a href="<?php echo site_url('barang/tambah'); ?>" class="btn btn-custom btn-custom-primary">
          <i class="fas fa-plus"></i> Tambah Barang
        </a>
        <form method="get" action="<?php echo site_url('barang/index'); ?>" class="form-inline">
          <div class="input-group mr-2">
            <input type="text" id="search_kode" name="search_kode" class="form-control mb-3" placeholder="Cari kode barang..." value="<?php echo isset($search_kode) ? $search_kode : ''; ?>">
            <div class="input-group-append">
              <button class="btn btn-custom btn-primary" type="submit">Cari Kode</button>
            </div>
          </div>
          <div class="input-group mr-2">
            <input type="text" id="search_nama" name="search_nama" class="form-control mb-3" placeholder="Cari nama barang..." value="<?php echo isset($search_nama) ? $search_nama : ''; ?>">
            <div class="input-group-append">
              <button class="btn btn-custom btn-primary" type="submit">Cari Nama</button>
            </div>
          </div>
        </form>
      </div>
      <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Harga Barang</th>
              <th>Qty</th>
              <th>Action</th>
              <th>Kartu Stock</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($barang as $b): ?>
            <tr>
              <td><?php echo $b->kode_barang; ?></td>
              <td><?php echo $b->nama_barang; ?></td>
              <td>Rp <?php echo number_format((double)$b->harga_barang, 0, ',', '.');?></td>
              <td><?php echo $b->qty; ?></td>
              <td>
                <a href="<?php echo site_url('barang/edit/'.$b->id); ?>" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i> Edit
                </a>
                <a href="<?php echo site_url('barang/hapus/'.$b->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
                  <i class="fas fa-trash"></i> Hapus
                </a>
              </td>
              <td>
                <a href="<?php echo site_url('barang/kartu_stok/'.$b->id); ?>" class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-eye"></i> Lihat Kartu Stok
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $(function() {
    // Autocomplete untuk Nama Barang
    $('#search_nama').autocomplete({
      source: function(request, response) {
        $.ajax({
          url: "<?php echo site_url('barang/autocomplete_nama'); ?>",
         
          type: "GET",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      minLength: 1,
      select: function(event, ui) {
        $('#search_nama').val(ui.item.label);
        return false;
      },
      open: function() {
        $(this).autocomplete("widget").css({
          "width": $(this).outerWidth()
        });
      }
    });

    // Autocomplete untuk Kode Barang
    $('#search_kode').autocomplete({
      source: function(request, response) {
        $.ajax({
          url: "<?php echo site_url('barang/autocomplete_kode'); ?>",
          type: "GET",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      minLength: 1,
      select: function(event, ui) {
        $('#search_kode').val(ui.item.label);
        return false;
      },
      open: function() {
        $(this).autocomplete("widget").css({
          "width": $(this).outerWidth()
        });
      }
    });
  });
  </script>
</body>
</html>
