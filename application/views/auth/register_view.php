<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url('/asset/bootstrap/css/bootstrap.min.css'); ?>">
    <style>
        body {
            background: linear-gradient(to right, #a2c2e7, #e0f4f4); /* Gradien biru semi-putih */
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            padding: 40px;
            background: #ffffff;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            width: 100%;
            max-width: 500px;
            animation: slideIn 0.5s ease-out;
            position: relative;
            overflow: hidden;
            margin-top: 300px; /* Atur margin atas lebih kecil */
            margin-bottom: 30px; /* Tambahkan margin bawah */
        }
        .register-header {
            margin-bottom: 30px;
            text-align: center;
        }
        .register-header h2 {
            font-weight: 700;
            color: #0044cc; /* Biru gelap */
        }
        .form-group label {
            font-weight: bold;
            color: #0044cc; /* Biru gelap */
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #b0bec5; /* Border abu-abu lembut */
            box-shadow: none;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            border-color: #38bdf8;
        }
        .btn-primary {
            background: linear-gradient(to right, #0044cc, #3383ff); /* Gradien biru */
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #3383ff, #0044cc); /* Gradien biru terbalik */
            transform: scale(1.05);
        }
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
        .alert {
            margin-bottom: 20px;
            font-size: 14px;
        }
        .text-center a {
            color: #0044cc; /* Biru gelap */
            font-weight: bold;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('<?php echo base_url('/asset/images/wave.svg'); ?>') no-repeat center bottom;
            background-size: cover;
            opacity: 0.3;
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="register-container">
                    <div class="register-header">
                        <h2>Register</h2>
                    </div>
                    <?php if($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo site_url('Auth/register_action'); ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
                        </div>
                        <div class="form-group">
                            <label for="place_of_birth">Place of Birth</label>
                            <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" required>
                        </div>
                        <div class="form-group">
                            <label for="home_address">Home Address</label>
                            <textarea name="home_address" class="form-control" id="home_address" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="work_address">Work Address</label>
                            <textarea name="work_address" class="form-control" id="work_address" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="<?php echo site_url('Auth/login'); ?>">Already have an account? Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
