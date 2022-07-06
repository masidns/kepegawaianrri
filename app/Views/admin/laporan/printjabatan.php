<!DOCTYPE html>
<html>

<head>
    <style>
        html,
        body {
            width: 21.0cm;
            height: 29.7cm;
            text-align: center;
        }

        h3 {
            text-align: center;
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
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jabatan as $key => $value) : ?>
                <tr>
                    <td><?= $key + 1; ?></td>
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