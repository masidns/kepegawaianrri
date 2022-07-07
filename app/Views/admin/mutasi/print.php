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
    <h3>Data Mutasi Pegawai RRI</h3>
    <h3>Kota Jayapura</h3>
    <br>
    <table class="table table-striped table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No Mutasi</th>
                <th>Nama Pegawai</th>
                <th>Unit Kerja Lama</th>
                <th>Unit Kerja Baru</th>
                <th>Tanggal Mutasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mutasi as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td align="center"><?= $value->nomutasi ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->unit_kerja_lama ?></td>
                    <td><?= $value->unit_kerja_baru ?></td>
                    <td><?= $value->tanggal_mutasi ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

<script type="text/javascript">
    window.print();
</script>

</html>