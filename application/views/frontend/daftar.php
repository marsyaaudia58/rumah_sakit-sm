<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body{
            background:#f4f7fc;
        }

        .navbar-custom{
            background: linear-gradient(90deg,#0d6efd,#003fb3);
        }

        .card{
            border:none;
            border-radius:15px;
        }

        .card-header{
            border-radius:15px 15px 0 0 !important;
        }

        .form-control,
        .form-select{
            height:50px;
        }

        textarea.form-control{
            height:auto;
        }

    </style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow">

    <div class="container">

        <a class="navbar-brand font-weight-bold" href="<?= site_url('frontend'); ?>">
            <i class="fas fa-hospital-alt"></i>
            Rumah Sakit Sehat Sentosa
        </a>

    </div>

</nav>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-lg">

                <div class="card-header bg-primary text-white text-center">

                    <h3>
                        <i class="fas fa-notes-medical"></i>
                        Form Pendaftaran Pasien
                    </h3>

                </div>

                <div class="card-body p-4">

                    <form action="<?= site_url('frontend/simpan'); ?>" method="post">

                        <div class="mb-3">

                            <label class="form-label">
                                Nama Pasien
                            </label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   placeholder="Masukkan nama lengkap"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Tanggal Lahir
                            </label>

                            <input type="date"
                                   name="tanggal_lahir"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Alamat
                            </label>

                            <textarea name="alamat"
                                      class="form-control"
                                      rows="3"
                                      required></textarea>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Nomor HP
                            </label>

                            <input type="text"
       name="no_telp"
       class="form-control"
       placeholder="08xxxxxxxxxx"
       required>

       <div class="mb-3">
    <label class="form-label">
        Username
    </label>

    <input type="text"
           name="username"
           class="form-control"
           placeholder="Masukkan username"
           required>
</div>

<div class="mb-3">
    <label class="form-label">
        Password
    </label>

    <input type="password"
           name="password"
           class="form-control"
           placeholder="Masukkan password"
           required>
</div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Dokter Tujuan
                            </label>

                            <select name="id_dokter"
                                    class="form-control"
                                    required>

                                <option value="">
                                    -- Pilih Dokter --
                                </option>

                                <?php foreach($dokter as $d){ ?>

                                    <option value="<?= $d->id_dokter; ?>">
                                        <?= $d->nama_dokter; ?> - <?= $d->spesialis; ?>
                                    </option>

                                <?php } ?>

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Keluhan
                            </label>

                            <textarea name="keluhan"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Tuliskan keluhan pasien"
                                      required></textarea>

                        </div>

                        <div class="form-group">
    <label>Tanggal Kunjungan</label>
    <input type="date"
           name="tanggal_kunjungan"
           class="form-control"
           required>
</div>

<div class="form-group">
    <label>Jam Kunjungan</label>
    <input type="time"
           name="jam_kunjungan"
           class="form-control"
           required>
</div>

                        <div class="text-center">

                            <button type="submit"
                                    class="btn btn-primary btn-lg">

                                <i class="fas fa-paper-plane"></i>
                                Daftar Sekarang

                            </button>

                            <a href="<?= site_url('frontend'); ?>"
                               class="btn btn-secondary btn-lg">

                                <i class="fas fa-arrow-left"></i>
                                Kembali

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>