<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Data Dokter
    </h1>

    <?php if($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('success')) : ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= site_url('dokter/tambah') ?>"
   class="btn btn-primary mb-3">
    Tambah Dokter
    </a>
    
    <table class="table table-bordered" id="dataTable">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php $no=1; foreach($dokter as $d){ ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->spesialis; ?></td>
            <td>
    <a href="<?= site_url('dokter/edit/'.$d->id_dokter); ?>"
       class="btn btn-warning btn-sm">
        Edit
    </a>

    <a href="<?= site_url('dokter/hapus/'.$d->id_dokter); ?>"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </a>
</td>
        </tr>

        <?php } ?>

        </tbody>

    </table>

</div>