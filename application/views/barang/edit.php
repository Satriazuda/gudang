<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
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

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .table-responsive {
            margin-top: 80px;
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

        .marquee-container {
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            height: 40px;
            overflow: hidden;
            background-color: #fff;
            color: #000;
            z-index: 2;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateX(-100%);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <img src="<?php echo base_url();?>/asset/img/logo.png" alt="Logo Klinik Universitas AKI">
        <h2>Klinik Universitas AKI</h2>
        <ul>
            <li><a class="nav-link" href="<?php echo site_url('Home'); ?>">Home</a></li>
            <li><a class="nav-link" href="<?php echo site_url('barang'); ?>">Barang Masuk</a></li>
            <li><a class="nav-link" href="<?php echo site_url('keluar'); ?>">Barang Keluar</a></li>
            <li><a class="nav-link" href="<?php echo site_url('About'); ?>">Tentang Kami</a></li>
            <li>
                <a class="btn btn-logout nav-link" href="<?php echo site_url('auth/logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <div class="marquee-container">
        <div class="marquee">Selamat Datang di Klinik Universitas AKI</div>
    </div>

    <div class="content">
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-header">
                    <h1 class="card-title">Edit Barang</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('barang/update/'.$barang->id); ?>" method="post">
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $barang->kode_barang; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $barang->nama_barang; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga Barang</label>
                            <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $barang->harga_barang; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="qty">Stok</label>
                            <input type="number" class="form-control" id="qty" name="qty" value="<?php echo $barang->qty; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo site_url('barang/index'); ?>" class="btn btn-secondary">Kembali ke Menu</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
