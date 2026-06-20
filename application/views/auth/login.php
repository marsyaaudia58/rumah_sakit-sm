<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Halaman Login</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg,#4e73df,#224abe);
    min-height:100vh;
}

.login-card{
    border-radius:20px;
    overflow:hidden;
}

.left-panel{
    background:#f8f9fc;
    min-height:550px;
}

.logo-icon{
    font-size:90px;
}

.feature-icon{
    font-size:30px;
}

.form-control{
    border-radius:30px;
    height:50px;
}

.btn-login{
    border-radius:30px;
    height:50px;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-10">

            <div class="card login-card shadow-lg border-0 my-5">

                <div class="card-body p-0">

                    <div class="row no-gutters">

                        <!-- KIRI -->
                        <div class="col-lg-6 left-panel d-none d-lg-flex align-items-center">

                            <div class="w-100 text-center p-5">

                                <i class="fas fa-hospital-alt text-primary logo-icon mb-4"></i>

                                <h2 class="font-weight-bold text-primary">
                                    Rumah Sakit
                                </h2>

                                <h3 class="font-weight-bold text-dark">
                                    Sentra Medika
                                </h3>

                                <p class="text-muted mt-3">
                                    Sistem Pendaftaran Pasien Online
                                </p>

                                <hr>

                                <div class="row mt-4">

                                    <div class="col-4">
                                        <i class="fas fa-shield-alt text-primary feature-icon"></i>
                                        <p class="small mt-2">Aman</p>
                                    </div>

                                    <div class="col-4">
                                        <i class="fas fa-user-md text-primary feature-icon"></i>
                                        <p class="small mt-2">Profesional</p>
                                    </div>

                                    <div class="col-4">
                                        <i class="fas fa-heartbeat text-primary feature-icon"></i>
                                        <p class="small mt-2">Terpercaya</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- KANAN -->
                        <div class="col-lg-6">

                            <div class="p-5">

                                <div class="text-center mb-4">

                                    <i class="fas fa-user-shield fa-3x text-primary mb-3"></i>

                                    <h2 class="font-weight-bold text-primary">
                                        Halaman Login
                                    </h2>

                                    <p class="text-muted">
                                        Silakan login untuk mengakses dashboard!
                                    </p>

                                </div>

                                <?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger">
                                        <?= $this->session->flashdata('error'); ?>
                                    </div>
                                <?php endif; ?>

                                <form method="post" action="<?= site_url('auth/login'); ?>">

                                    <div class="form-group">

                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                            </div>

                                            <input type="text"
                                                   name="username"
                                                   class="form-control"
                                                   placeholder="Username"
                                                   required>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                            </div>

                                            <input type="password"
                                                   name="password"
                                                   class="form-control"
                                                   placeholder="Password"
                                                   required>

                                        </div>

                                    </div>

                                    <button type="submit"
                                            class="btn btn-primary btn-block btn-login">

                                        <i class="fas fa-sign-in-alt"></i>
                                        Login

                                    </button>
                                    <!-- REGISTER PASIEN -->
<div class="text-center mt-4">

    <p class="small text-muted mb-2">
        Belum memiliki akun?
    </p>


    <a href="<?= site_url('auth/register'); ?>"
       class="btn btn-outline-primary btn-block"
       style="border-radius:30px;">

        <i class="fas fa-user-plus"></i>
        Daftar Pasien

    </a>


</div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

</body>
</html>