<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <div class="d-flex align-items-center">

    <i class="fas fa-hospital-alt text-primary mr-3"
       style="font-size:28px;"></i>

    <div>
        <div class="font-weight-bold text-primary">
            Sistem Pendaftaran Pasien
        </div>

        <small class="text-muted">
            Rumah Sakit Sentra Medika
        </small>
    </div>

</div>


    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle"
               href="#"
               id="userDropdown"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?= $this->session->userdata('username'); ?>
                </span>

                <img class="img-profile rounded-circle"
     src="https://ui-avatars.com/api/?name=<?= $this->session->userdata('username') ?>&background=4e73df&color=fff"
     width="40">
            </a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

                <div class="text-center p-3">

                    <img src="https://ui-avatars.com/api/?name=<?= $this->session->userdata('username') ?>&background=4e73df&color=fff"
     class="rounded-circle mb-2"
     width="80">

                    <h6 class="font-weight-bold">
                        <?= $this->session->userdata('username'); ?>
                    </h6>

                    <small class="text-muted">
                        Admin
                    </small>

                </div>

                <div class="dropdown-divider"></div>

               <a class="dropdown-item" href="<?= site_url('profil') ?>">
    <i class="fas fa-user fa-sm fa-fw mr-2 text-primary"></i>
    Profil Saya
</a>

<a class="dropdown-item" href="<?= site_url('profil/edit') ?>">
    <i class="fas fa-edit fa-sm fa-fw mr-2 text-success"></i>
    Edit Profil
</a>

                <div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?= site_url('auth/logout') ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                    Logout
                </a>

            </div>

        </li>

    </ul>

</nav>