<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Dokter</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
            color:#000;
        }

        .kop{
            text-align:center;
            border-bottom:3px solid #000;
            padding-bottom:10px;
            margin-bottom:20px;
        }

        .kop h2{
            margin:0;
        }

        .kop h4{
            margin:5px 0;
        }

        .kop p{
            margin:2px;
            font-size:13px;
        }

        .judul{
            text-align:center;
            margin:20px 0;
        }

        .info{
            margin-bottom:15px;
            font-size:14px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:10px;
        }

        table, th, td{
            border:1px solid #000;
        }

        th{
            background:#f2f2f2;
            padding:10px;
            text-align:center;
        }

        td{
            padding:8px;
            text-align:center;
        }

        .ttd{
            margin-top:50px;
            width:100%;
        }

        .ttd-kanan{
            float:right;
            text-align:center;
        }

        .footer{
            margin-top:20px;
            font-size:12px;
            text-align:left;
        }

        @media print{
            @page{
                size:A4;
                margin:15mm;
            }
        }
    </style>
</head>

<body>

    <div class="kop">
        <h2>RUMAH SAKIT SEHAT SENTOSA</h2>
        <h4>Sistem Pendaftaran Pasien Online</h4>
        <p>Jl. Raya Tangerang No. 123, Tangerang</p>
        <p>Telp. (021) 12345678 | Email: rssehatsentosa@gmail.com</p>
    </div>

    <div class="judul">
        <h3>LAPORAN DATA DOKTER</h3>
    </div>

    <div class="info">
        <strong>Tanggal Cetak :</strong>
        <?= date('d F Y H:i'); ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
            </tr>
        </thead>

        <tbody>

        <?php $no=1; foreach($dokter as $d): ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->id_dokter; ?></td>
                <td><?= $d->nama_dokter; ?></td>
                <td><?= $d->spesialis; ?></td>
            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <div class="ttd">
        <div class="ttd-kanan">
            Tangerang, <?= date('d F Y'); ?>
            <br><br><br><br>

            <strong>Administrator</strong>
        </div>
    </div>

    <div style="clear:both;"></div>

    <div class="footer">
        Dicetak otomatis oleh Sistem Pendaftaran Pasien Online
    </div>

    <script>
        window.print();
    </script>

</body>
</html>