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
    <h3>Data Kepegawaian RRI</h3>
    <h3>Kota Jayapura</h3>
    <br>
    <table class="table table-striped table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>No. Telepeon</th>
                <th>Jenis kelamin</th>
                <th>Tempat/Tanggal lahir</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pegawai as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= $value->nip ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->no_telepon ?></td>
                    <td><?= $value->jenis_kelamin ?></td>
                    <td><?= $value->tempat_lahir . $value->tanggal_lahir ?></td>
                    <td><?= $value->agama ?></td>
                    <td><?= $value->status_perkawinan ?></td>
                    <td><?= $value->nama_jabatan ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

<script type="text/javascript">
    window.print();
</script>

</html>