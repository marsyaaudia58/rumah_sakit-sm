<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistem Pendaftaran Pasien</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <style>
        .card{
            border-radius:15px;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 8px 20px rgba(0,0,0,0.15);
        }

        .border-left-primary{
            border-left:5px solid #4e73df !important;
        }

        .border-left-success{
            border-left:5px solid #1cc88a !important;
        }

        .border-left-danger{
            border-left:5px solid #e74a3b !important;
        }

        .border-left-warning{
            border-left:5px solid #f6c23e !important;
        }

        .border-left-info{
            border-left:5px solid #36b9cc !important;
        }

        .border-left-secondary{
            border-left:5px solid #858796 !important;
        }
    </style>

</head>

<body id="page-top">
<div id="wrapper">