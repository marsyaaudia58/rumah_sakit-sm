<div class="container-fluid">

    <h3>Laporan Pasien</h3>

    <form method="get">

        <input type="text"
               name="keyword"
               value="<?= isset($keyword) ? $keyword : ''; ?>"
               placeholder="Cari nama pasien">

        <button type="submit" class="btn btn-primary btn-sm">
            Filter
        </button>

        <a href="<?= site_url('laporan/pasien'); ?>"
           class="btn btn-secondary btn-sm">
           Reset
        </a>

    </form>

    <br>

    <a href="<?= site_url('laporan/cetak_pasien'); ?>"
       target="_blank"
       class="btn btn-success btn-sm">
       Cetak PDF
    </a>

    <table class="table table-bordered mt-3">

        <tr>
            <th>No</th>
            <th>ID Pasien</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Username</th>
        </tr>

        <?php $no=1; foreach($pasien as $p): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->id_pasien; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->tanggal_lahir; ?></td>
            <td><?= $p->alamat; ?></td>
            <td><?= $p->no_telp; ?></td>
            <td><?= $p->username; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

</div>