<!DOCTYPE html>
<html>

<head>
    <style>
        @page {
            size: 29.7cm 21cm;
            margin: 30mm 20mm 20mm 20mm;
        }

        h3 {
            text-align: center;
        }

        thead {
            vertical-align: middle;
            text-align: center;
            /* position: relative; */
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/dist_/css/adminlte.min.css">
    <!-- tabel -->
</head>

<body>
    <h3>Data Pegawai RRI</h3>
    <h3>Kota Jayapura</h3>
    <br>
    <table class="table table-striped table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Jenis Kelamin</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pendidikan Terakhir</th>
                <th>Status Perkawinan</th>
                <th>No. Telepeon</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($pegawai as $key => $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nip ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->jenis_kelamin ?></td>
                    <td><?= $value->tempat_lahir . ', ' . $value->tanggal_lahir ?></td>
                    <td><?= $value->agama ?></td>
                    <td><?= $value->pendidikan_terakhir ?></td>
                    <td><?= $value->status_perkawinan ?></td>
                    <td><?= $value->no_telepon ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

<script type="text/javascript">
    window.print();
</script>

</html>