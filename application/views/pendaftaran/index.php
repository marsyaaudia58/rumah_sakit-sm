<div class="container-fluid">

<h1>Data Pendaftaran</h1>

<a href="<?= site_url('index.php/pendaftaran/tambah') ?>"
class="btn btn-primary mb-3">
Tambah Pendaftaran
</a>

<table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Pasien</th>
    <th>Dokter</th>
    <th>Keluhan</th>
    <th>Tanggal</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php $no=1; foreach($pendaftaran as $p){ ?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $p->nama ?></td>
    <td><?= $p->nama_dokter ?></td>
    <td><?= $p->keluhan ?></td>
    <td><?= $p->tanggal_kunjungan ?></td>
    <td><?= $p->status ?></td>
    <td>

        <a href="<?= base_url('pendaftaran/setujui/'.$p->id_pendaftaran) ?>"
        class="btn btn-success btn-sm">
        Setujui
        </a>

        <a href="<?= base_url('pendaftaran/tolak/'.$p->id_pendaftaran) ?>"
        class="btn btn-danger btn-sm">
        Tolak
        </a>

    </td>
</tr>

<?php } ?>

</table>

</div>