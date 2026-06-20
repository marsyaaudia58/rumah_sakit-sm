<div class="container-fluid">

    <h3>Laporan Dokter</h3>

    <form method="get">

        <input type="text"
               name="keyword"
               value="<?= isset($keyword) ? $keyword : ''; ?>"
               placeholder="Cari nama dokter">

        <button type="submit" class="btn btn-primary btn-sm">
            Filter
        </button>

        <a href="<?= site_url('laporan/dokter'); ?>"
           class="btn btn-secondary btn-sm">
            Reset
        </a>

    </form>

    <br>

    <a href="<?= site_url('laporan/cetak_dokter'); ?>"
       target="_blank"
       class="btn btn-success btn-sm">
        Cetak PDF
    </a>

    <table class="table table-bordered mt-3">

        <tr>
            <th>No</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
        </tr>

        <?php $no=1; foreach($dokter as $d): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->id_dokter; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->spesialis; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

</div>