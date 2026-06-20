<div class="container-fluid">

    <div class="card shadow mb-4 border-left-primary">
        <div class="card-body">

            <?php
            date_default_timezone_set('Asia/Jakarta');
            $jamSekarang = date('H');

            if($jamSekarang < 12){
                $salam = "Selamat Pagi";
            }elseif($jamSekarang < 15){
                $salam = "Selamat Siang";
            }elseif($jamSekarang < 18){
                $salam = "Selamat Sore";
            }else{
                $salam = "Selamat Malam";
            }
            ?>

            <h4><?= $salam; ?>, Admin 👋</h4>

            <p class="mb-1">
                Sistem Pendaftaran Pasien Online Rumah Sakit Sentra Medika.
            </p>

            <small id="jam"></small>

        </div>
    </div>

    <script>
    function updateJam() {
        const sekarang = new Date();

        const tanggal = sekarang.toLocaleDateString('id-ID', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });

        const jam = sekarang.toLocaleTimeString('id-ID');

        document.getElementById('jam').innerHTML =
            tanggal + ' | ' + jam;
    }

    updateJam();
    setInterval(updateJam, 1000);
    </script>

    <div class="row">

        <div class="col-md-2 mb-3">
            <div class="card shadow border-left-primary">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-2x text-primary mb-2"></i>
                    <small>Total Pasien</small>
                    <h3><?= $total_pasien ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card shadow border-left-info">
                <div class="card-body text-center">
                    <i class="fas fa-user-md fa-2x text-info mb-2"></i>
                    <small>Total Dokter</small>
                    <h3><?= $total_dokter ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card shadow border-left-warning">
                <div class="card-body text-center">
                    <i class="fas fa-file-medical fa-2x text-warning mb-2"></i>
                    <small>Pendaftaran</small>
                    <h3><?= $total_pendaftaran ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card shadow border-left-success">
                <div class="card-body text-center">
                    <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                    <small>Disetujui</small>
                    <h3><?= $total_disetujui ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card shadow border-left-danger">
                <div class="card-body text-center">
                    <i class="fas fa-times-circle fa-2x text-danger mb-2"></i>
                    <small>Ditolak</small>
                    <h3><?= $total_ditolak ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-2 mb-3">
            <div class="card shadow border-left-secondary">
                <div class="card-body text-center">
                    <i class="fas fa-clock fa-2x text-secondary mb-2"></i>
                    <small>Proses</small>
                    <h3><?= $total_proses ?></h3>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-8">

            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="font-weight-bold text-primary mb-0">
                        Pendaftaran Terbaru
                    </h6>
                </div>

                <div class="card-body">

                    <?php if(!empty($pendaftaran_terbaru)){ ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No Pendaftaran</th>
                                <th>Pasien</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($pendaftaran_terbaru as $row){ ?>

                            <tr>
                                <td><?= $row->nomor_pendaftaran; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->status; ?></td>
                            </tr>

                        <?php } ?>

                        </tbody>
                    </table>

                    <?php }else{ ?>

                        <div class="alert alert-info">
                            Belum ada data pendaftaran.
                        </div>

                    <?php } ?>

                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="font-weight-bold text-success mb-0">
                        Status Pendaftaran
                    </h6>
                </div>

                <div class="card-body">

                    <p>Disetujui</p>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success"
                             style="width:<?= $total_pendaftaran > 0 ? ($total_disetujui/$total_pendaftaran)*100 : 0 ?>%">
                        </div>
                    </div>

                    <p>Ditolak</p>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger"
                             style="width:<?= $total_pendaftaran > 0 ? ($total_ditolak/$total_pendaftaran)*100 : 0 ?>%">
                        </div>
                    </div>

                    <p>Proses</p>
                    <div class="progress">
                        <div class="progress-bar bg-warning"
                             style="width:<?= $total_pendaftaran > 0 ? ($total_proses/$total_pendaftaran)*100 : 0 ?>%">
                        </div>
                    </div>

                </div>
            </div>

            <div class="card shadow">
                <div class="card-header">
                    <h6 class="font-weight-bold text-primary mb-0">
                        Informasi Sistem
                    </h6>
                </div>

                <div class="card-body">
                    <p>👨‍⚕️ Dokter : <?= $total_dokter; ?></p>
                    <p>👥 Pasien : <?= $total_pasien; ?></p>
                    <p>📝 Pendaftaran : <?= $total_pendaftaran; ?></p>
                    <p>✅ Disetujui : <?= $total_disetujui; ?></p>
                    <p>❌ Ditolak : <?= $total_ditolak; ?></p>
                    <p>⏳ Proses : <?= $total_proses; ?></p>
                </div>
            </div>

        </div>

    </div>

</div>