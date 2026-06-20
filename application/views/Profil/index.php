<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card shadow mb-4">

                <div class="card-body text-center">

                    <img src="https://ui-avatars.com/api/?name=<?= $admin->username ?>&background=4e73df&color=ffffff&size=150"
                         class="rounded-circle shadow mb-3"
                         width="150">

                    <h3 class="font-weight-bold">
                        <?= $admin->nama_admin ?>
                    </h3>

                    <p class="text-muted">
                        <?= $admin->username ?>
                    </p>

                    <span class="badge badge-primary p-2">
                        Administrator
                    </span>

                    <hr>

                    <a href="<?= site_url('profil/edit') ?>"
                       class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                        Edit Profil
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>