<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Edit Dokter</h2>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('dokter/update/'.$dokter->id_dokter); ?>">

<input type="hidden" name="id_dokter" value="<?= $dokter->id_dokter; ?>">

<div class="form-group">
    <label>Nama Dokter</label>
    <input type="text"
           name="nama_dokter"
           class="form-control"
           value="<?= $dokter->nama_dokter; ?>"
           required>
</div>

<div class="form-group">
    <label>Spesialis</label>
    <input type="text"
           name="spesialis"
           class="form-control"
           value="<?= $dokter->spesialis; ?>"
           required>
</div>

<button type="submit" class="btn btn-primary">
    Simpan
</button>

<a href="<?= site_url('dokter'); ?>"
   class="btn btn-secondary">
    Kembali
</a>

</form>

</div>
</div>
</div>