<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body{
            background:#f4f7fc;
        }

        .success-card{
            border:none;
            border-radius:20px;
        }

        .success-icon{
            font-size:90px;
            color:#28a745;
        }

        .nomor-box{
            background:#e9f7ef;
            border:2px dashed #28a745;
            border-radius:15px;
            padding:20px;
            font-size:28px;
            font-weight:bold;
            color:#198754;
        }

    </style>

</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-lg success-card">

                <div class="card-body text-center p-5">

                    <i class="fas fa-check-circle success-icon mb-4"></i>

                    <h1 class="text-success">
                        Pendaftaran Berhasil
                    </h1>

                    <p class="lead">
                        Data pasien berhasil didaftarkan.
                    </p>

                    <hr>

                    <h5>Nomor Pendaftaran Anda</h5>

                    <div class="nomor-box my-4">

                        <?= $this->session->flashdata('nomor_pendaftaran'); ?>

                    </div>

                    <p class="text-muted">
                        Simpan nomor ini untuk mengecek status pendaftaran pasien.
                    </p>

                    <a href="<?= site_url('frontend/cek_status'); ?>"
                       class="btn btn-primary btn-lg">

                        <i class="fas fa-search"></i>
                        Cek Status

                    </a>

                    <a href="<?= site_url('frontend'); ?>"
                       class="btn btn-secondary btn-lg">

                        <i class="fas fa-home"></i>
                        Beranda

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>