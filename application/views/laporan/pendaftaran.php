<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Laporan Pendaftaran
    </h1>

    <form method="get" class="mb-3">

        <div class="row">

            <div class="col-md-3">
                <select name="status" class="form-control">

                    <option value="">Semua Status</option>

                    <option value="Proses"
                        <?= ($status=='Proses')?'selected':''; ?>>
                        Proses
                    </option>

                    <option value="Disetujui"
                        <?= ($status=='Disetujui')?'selected':''; ?>>
                        Disetujui
                    </option>

                    <option value="Ditolak"
                        <?= ($status=='Ditolak')?'selected':''; ?>>
                        Ditolak
                    </option>

                </select>
            </div>

            <div class="col-md-2">
                <button type="submit"
                        class="btn btn-primary">
                    Filter
                </button>
            </div>

        </div>

    </form>

    <a href="<?= site_url('laporan/cetak_pendaftaran'); ?>"
       target="_blank"
       class="btn btn-success mb-3">
        Cetak Laporan
    </a>

    <table class="table table-bordered" id="dataTable">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Dokter</th>
                <th>Keluhan</th>
                <th>Tanggal Daftar</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

        <?php $no=1; foreach($pendaftaran as $p){ ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->nama_dokter; ?></td>
            <td><?= $p->keluhan; ?></td>
            <td><?= $p->tanggal_daftar; ?></td>
            <td><?= $p->status; ?></td>
        </tr>

        <?php } ?>

        </tbody>

    </table>

</div>