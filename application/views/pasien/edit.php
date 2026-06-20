<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Edit Pasien</h2>

<div class="card shadow">
<div class="card-body">

<form action="<?= site_url('pasien/update/'.$pasien->id_pasien) ?>" method="post">

<input type="hidden" name="id_pasien" value="<?= $pasien->id_pasien; ?>">

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $pasien->nama; ?>" required>
</div>

<div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $pasien->tanggal_lahir; ?>" required>
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"><?= $pasien->alamat; ?></textarea>
</div>

<div class="form-group">
    <label>No Telepon</label>
    <input type="text" name="no_telp" class="form-control" value="<?= $pasien->no_telp; ?>">
</div>

<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" value="<?= $pasien->username; ?>">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="text" name="password" class="form-control" value="<?= $pasien->password; ?>">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('pasien'); ?>" class="btn btn-warning btn-sm">
    Edit
</a>

</form>

</div>
</div>
</div>