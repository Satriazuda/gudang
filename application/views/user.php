<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar dan Tabel Disamping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="<?php echo base_url();?>/asset/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url();?>/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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
            /* Tambahkan padding kanan agar tidak terlalu dekat dengan card */
            z-index: 1;
            /* Pastikan sidebar ada di depan card */
            text-align: center; /* Pusatkan teks dan elemen di dalam sidebar */
        }

        .sidebar img {
            max-width: 150px; /* Ukuran maksimum untuk logo */
            margin-bottom: 10px; /* Jarak antara logo dan menu */
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

        .content {
            margin-left: 260px;
            /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }

        .table-responsive {
            margin-top: 80px; /* Sesuaikan jarak dari atas agar tabel tidak tumpang tindih dengan sidebar */
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
    </style>
</head>

<body>
    <div class="sidebar">
        <img src="<?php echo base_url();?>/asset/img/logo1.png" alt="Logo Klinik Universitas AKI">
        <h2>Klinik Universitas AKI</h2>
        <ul>
            <li><a class="nav-link" href="<?php echo site_url('Home'); ?>">Home</a></li>
            <li><a class="nav-link" href="<?php echo site_url('barang'); ?>">barang masuk</a></li>
            <li><a class="nav-link" href="<?php echo site_url('keluar'); ?>">barang keluar</a></li>
            <li><a class="nav-link" href="<?php echo site_url('About'); ?>">Tentang Kami</a></li>
            <li>
                <a class="btn btn-logout nav-link" href="<?php echo site_url('auth/logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="content mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>WorkAddress</th>
                        <th>PlaceofBirth</th>
                        <th>HomeAddress</th>
                        <th>WorkAddress</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($tampil as $user): ?>
                <tr>
                    <td><?php echo $user->Name; ?></td>
                    <td><?php echo $user->DateofBirth; ?></td>
                    <td><?php echo $user->PlaceofBirth; ?></td>
                    <td><?php echo $user->HomeAddress; ?></td>
                    <td><?php echo $user->WorkAddress; ?></td>
                </tr>
            <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pagination">
                <?php echo $this->pagination->create_links(); ?>
                </div>

        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
  </script>
</body>

</html>
