<div class="container-fluid">

    <h1>Data Pasien</h1>


    <a href="<?=site_url('pasien/tambah'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah
</a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($pasien as $p){ ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p->nama ?></td>
            <td><?= $p->tanggal_lahir ?></td>
            <td><?= $p->no_telp ?></td>
            <td>
    <a href="<?= site_url('pasien/edit/'.$p->id_pasien); ?>" class="btn btn-warning btn-sm">
        Edit
    </a>

    <a href="<?= site_url('pasien/hapus/'.$p->id_pasien); ?>"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Yakin ingin menghapus data ini?')">
       Hapus
    </a>
</td>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>