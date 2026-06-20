<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Dashboard Laporan
    </h1>

    <div class="row">

        <div class="col-md-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-body">
                    Total Pasien
                    <h3><?= $total_pasien; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white mb-3">
                <div class="card-body">
                    Total Dokter
                    <h3><?= $total_dokter; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-info text-white mb-3">
                <div class="card-body">
                    Total Pendaftaran
                    <h3><?= $total_pendaftaran; ?></h3>
                </div>
            </div>
        </div>

    </div>

</div>