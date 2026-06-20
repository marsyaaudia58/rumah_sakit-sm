<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pasien</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 30px;
            font-size: 12px;
        }

        .kop{
            text-align: center;
        }

        .kop h2{
            margin: 0;
        }

        .kop p{
            margin: 2px;
        }

        .garis1{
            border: 2px solid black;
            margin-bottom: 2px;
        }

        .garis2{
            border: 1px solid black;
            margin-top: 0;
        }

        .judul{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        th{
            background: #f2f2f2;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        .ttd{
            width: 250px;
            float: right;
            text-align: center;
            margin-top: 30px;
        }

        @media print{
            button{
                display:none;
            }
        }
    </style>
</head>

<body>

    <div class="kop">
        <h2>RUMAH SAKIT SEHAT SENTOSA</h2>
        <p>Jl. Sudirman No. 123, Tangerang</p>
        <p>Telp. (021) 12345678 | Email: info@rumahsakit.com</p>
    </div>

    <hr class="garis1">
    <hr class="garis2">

    <div class="judul">
        <h3>LAPORAN DATA PASIEN</h3>
    </div>

    <p>
        <strong>Tanggal Cetak :</strong>
        <?= date('d-m-Y H:i'); ?>
    </p>

    <table>
        <tr>
            <th>No</th>
            <th>ID Pasien</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Username</th>
        </tr>

        <?php $no = 1; foreach($pasien as $p): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->id_pasien; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->tanggal_lahir; ?></td>
            <td><?= $p->alamat; ?></td>
            <td><?= $p->no_telp; ?></td>
            <td><?= $p->username; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

    <div class="ttd">
        Tangerang, <?= date('d-m-Y'); ?>
        <br><br><br><br><br>

        <u>Administrator</u>
    </div>

    <script>
        window.print();
    </script>

</body>
</html>