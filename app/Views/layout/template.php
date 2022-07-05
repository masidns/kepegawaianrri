<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kepegawaian RRI Kota Jayapura</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('/favicon_io/favicon.ico') ?>">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/dist_/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/summernote/summernote-bs4.min.css">
    <!-- tabel -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- tabel -->

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- select -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/plugins_/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- select -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url() ?>/admin/dist_/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div> -->

        <?= $this->include('layout/header') ?>

        <?= $this->include('layout/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content') ?>
        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong class="text-center">Copyright &copy; 2022-2023 <a href="https://adminlte.io">IDNS</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.1
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/admin/plugins_/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url() ?>/admin/plugins_/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/admin/plugins_/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>/admin/plugins_/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>/admin/plugins_/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>/admin/plugins_/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>/admin/plugins_/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>/admin/plugins_/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>/admin/plugins_/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?= base_url() ?>/admin/plugins_/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url() ?>/admin/plugins_/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/admin/dist_/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/admin/dist_/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ?>/admin/dist_/js/pages/dashboard.js"></script>
    <!-- tabel -->
    <script src="<?= base_url() ?>/admin/plugins_/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <script src="<?= base_url() ?>/admin/plugins_/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/admin/plugins_/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>/admin/plugins_/sweetalert2/sweetalert2.min.js"></script>
    //data mask
    <script src="<?= base_url() ?>/admin/plugins_/inputmask/jquery.inputmask.min.js"></script>
    //data mask
    <!-- select -->
    <script src="<?= base_url() ?>/admin/plugins_/select2/js/select2.full.min.js"></script>
    <!-- select -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })

        $('[data-mask]').inputmask()

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
    <!-- SweetAlert2 -->

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(function() {
            $(".example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('.example1_wrapper .col-md-6:eq(0)');
            $('.example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        //swall hapus
        $(document).on('click', '.btn-hapus', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data Akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            });
        })

        // image priview
        function previewImg() {
            const gambar = document.querySelector('#inputGroupFile01');
            const gambarLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            gambarLabel.textContent = gambar.files[0].name;

            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0]);

            filegambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
    <!-- tabel -->
</body>

</html>