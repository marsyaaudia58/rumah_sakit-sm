<div class="container-fluid">

<h1>Tambah Pendaftaran</h1>

<form action="<?= base_url('pendaftaran/simpan') ?>" method="post">

<label>Pasien</label>
<select name="id_pasien" class="form-control">
    <?php foreach($pasien as $p){ ?>
        <option value="<?= $p->id_pasien ?>">
            <?= $p->nama ?>
        </option>
    <?php } ?>
</select>

<br>
<select name="id_pasien" class="form-control">
    <?php foreach($pasien as $p): ?>
        <option value="<?= $p->id_pasien ?>">
            <?= $p->nama ?>
        </option>
    <?php endforeach; ?>
</select>

<label>Dokter</label>
<select name="id_dokter" class="form-control">
    <?php foreach($dokter as $d){ ?>
        <option value="<?= $d->id_dokter ?>">
            <?= $d->nama_dokter ?>
        </option>
    <?php } ?>
</select>

<br>

<label>Keluhan</label>
<textarea name="keluhan" class="form-control"></textarea>

<br>

<label>Tanggal Kunjungan</label>
<input type="date"
name="tanggal_kunjungan"
class="form-control">

<br>

<label>Jam Kunjungan</label>
<input type="time"
name="jam_kunjungan"
class="form-control">

<br>

<div class="form-group">
    <label>Username</label>
    <input type="text"
           name="username"
           class="form-control"
           required>
</div>

<button type="submit"
class="btn btn-success">
Simpan
</button>

</form>

</div>