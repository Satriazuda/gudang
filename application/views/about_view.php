<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Klinik Universitas AKI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        .card {
            margin-bottom: 20px;
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

        .about-photo {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
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
                    <h1 class="card-title">Tentang Kami</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url();?>/asset/img/logo.png" alt="About Photo" class="about-photo">
                        </div>
                        <div class="col-md-8">
                            <p>Klinik Universitas AKI adalah pusat layanan kesehatan yang berdedikasi untuk menyediakan perawatan medis berkualitas tinggi kepada masyarakat. Kami memiliki tim dokter dan staf medis yang berpengalaman dan berdedikasi untuk memberikan perawatan terbaik.</p>
                            <p>Visi kami adalah menjadi pusat kesehatan terkemuka yang dikenal karena layanan medis yang unggul dan komitmen terhadap kesehatan masyarakat. Misi kami adalah memberikan perawatan kesehatan yang komprehensif dan berkualitas tinggi kepada pasien kami dengan pendekatan yang humanis dan berbasis bukti.</p>
                            <p>Kami menawarkan berbagai layanan kesehatan, termasuk konsultasi umum, pemeriksaan kesehatan, layanan laboratorium, dan banyak lagi. Klinik kami dilengkapi dengan fasilitas modern dan peralatan medis canggih untuk memastikan bahwa pasien kami menerima perawatan terbaik.</p>
                            <p>Terima kasih telah memilih Klinik Universitas AKI sebagai mitra kesehatan Anda. Kami berkomitmen untuk membantu Anda mencapai kesehatan optimal dan kesejahteraan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
