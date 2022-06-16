<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kepegawaian RRI</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/dist_/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin>/plugins_/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page">
    <?= $this->renderSection('content') ?>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/admin/plugins_/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/admin/plugins_/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/admin/dist_/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>/admin/plugins_/sweetalert2/sweetalert2.min.js"></script>
    <script>
        var pesan = "<?= session()->getFlashdata('pesan') ?>";
        const swal = pesan.split(',');
        if (swal.length > 1) {
            if (swal[0] == 'Success') {
                Swal.fire({
                    title: 'Success!',
                    text: swal[1],
                    icon: 'success'
                })
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: swal[1],
                    icon: 'error'
                })
            }
        }
    </script>
</body>

</html>