<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Registrasi Pasien</title>


<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">

<link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">


<style>

body{
    background: linear-gradient(135deg,#4e73df,#224abe);
    min-height:100vh;
}


.register-card{
    border-radius:20px;
    overflow:hidden;
}


.left-panel{
    background:#f8f9fc;
    min-height:650px;
}


.logo-icon{
    font-size:90px;
}


.form-control{
    height:50px;
    border-radius:30px;
}


textarea.form-control{
    height:100px;
    border-radius:20px;
}


.btn-register{
    height:50px;
    border-radius:30px;
    font-weight:bold;
}


.input-group-text{
    border-radius:30px 0 0 30px;
    background:#4e73df;
    color:white;
}



</style>


</head>



<body>


<div class="container">


<div class="row justify-content-center">


<div class="col-xl-10 col-lg-12 col-md-10">


<div class="card shadow-lg border-0 my-5 register-card">


<div class="card-body p-0">


<div class="row no-gutters">



<!-- BAGIAN KIRI -->

<div class="col-lg-5 left-panel d-none d-lg-flex align-items-center">


<div class="text-center p-5 w-100">


<i class="fas fa-hospital-alt text-primary logo-icon"></i>


<h2 class="text-primary font-weight-bold">
Rumah Sakit
</h2>


<h3 class="font-weight-bold">
Sentra Medika
</h3>


<p class="text-muted mt-3">

Daftarkan akun pasien
untuk melakukan pendaftaran
berobat secara online.

</p>



<hr>



<i class="fas fa-user-plus fa-3x text-primary mt-3"></i>


</div>


</div>





<!-- FORM -->

<div class="col-lg-7">


<div class="p-5">



<div class="text-center">


<i class="fas fa-user-circle fa-3x text-primary mb-3"></i>


<h2 class="text-primary font-weight-bold">

Registrasi Pasien

</h2>


<p class="text-muted">

Buat akun baru terlebih dahulu

</p>


</div>




<form method="post"
action="<?=base_url('auth/proses_register')?>">





<div class="form-group">

<div class="input-group">

<div class="input-group-prepend">

<span class="input-group-text">
<i class="fas fa-user"></i>
</span>

</div>


<input 
class="form-control"
name="nama"
placeholder="Nama Pasien"
required>


</div>

</div>







<div class="form-group">

<div class="input-group">

<div class="input-group-prepend">

<span class="input-group-text">
<i class="fas fa-calendar"></i>
</span>

</div>


<input 
class="form-control"
type="date"
name="tanggal_lahir"
required>


</div>

</div>






<div class="form-group">

<textarea
class="form-control"
name="alamat"
placeholder="Alamat Pasien"
required></textarea>


</div>







<div class="form-group">


<div class="input-group">

<div class="input-group-prepend">

<span class="input-group-text">
<i class="fas fa-phone"></i>
</span>

</div>


<input 
class="form-control"
name="no_telp"
placeholder="Nomor Telepon"
required>


</div>


</div>







<div class="form-group">


<div class="input-group">

<div class="input-group-prepend">

<span class="input-group-text">
<i class="fas fa-user"></i>
</span>

</div>


<input 
class="form-control"
name="username"
placeholder="Username"
required>


</div>


</div>







<div class="form-group">


<div class="input-group">

<div class="input-group-prepend">

<span class="input-group-text">
<i class="fas fa-lock"></i>
</span>

</div>


<input 
class="form-control"
type="password"
name="password"
placeholder="Password"
required>


</div>


</div>





<button 
class="btn btn-primary btn-block btn-register">


<i class="fas fa-user-plus"></i>

Daftar Sekarang


</button>





<div class="text-center mt-4">


<a href="<?=base_url('auth')?>"
class="small">


Sudah punya akun? Login


</a>


</div>





</form>




</div>


</div>





</div>

</div>

</div>

</div>


</div>




<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>


</body>


</html>