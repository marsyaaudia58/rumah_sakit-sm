<div class="container-fluid">

    <h2 class="h3 mb-4 text-gray-800">Tambah Pasien</h2>

    <div class="card shadow">
        <div class="card-body">

           <form action="<?= site_url('pasien/simpan') ?>" method="post">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <br>
                <form action="<?= site_url('pasien/simpan') ?>" method="post">

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>
    </div>

</div>