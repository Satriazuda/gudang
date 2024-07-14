<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Klinik Universitas AKI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f8f9fa;
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
            overflow-y: auto;
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
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #575757;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-title {
            color: #333;
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

        .btn-custom {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .icon {
            font-size: 50px;
            color: #B8860B;
        }

        .card-content {
            padding: 20px;
        }

        .card-text {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
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
            <li><a class="nav-link" href="<?php echo site_url('Home'); ?>">Barang Keluar</a></li>
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
    
    <div class="content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <a class="nav-link" href="<?php echo site_url('user'); ?>">
                        <div class="card-content">
                            <i class="fas fa-user icon"></i>
                            <h5 class="card-title">User</h5> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <a class="nav-link" href="<?php echo site_url('barang'); ?>">
                        <div class="card-content">
                            <i class="fas fa-box icon"></i>
                            <h5 class="card-title">Barang</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo site_url('barang/tambah'); ?>" class="btn btn-custom">Tambah Barang</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
