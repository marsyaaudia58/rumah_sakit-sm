<div class="container-fluid">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                Profil Administrator
            </h4>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-3 text-center">

                    <i class="fas fa-user-shield fa-6x text-primary mb-3"></i>

                    <h5 class="font-weight-bold">
                        Administrator
                    </h5>

                </div>

                <div class="col-md-9">

                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="text"
                               class="form-control"
                               value="<?= $admin->nama_admin ?>"
                               readonly>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text"
                               class="form-control"
                               value="<?= $admin->username ?>"
                               readonly>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>