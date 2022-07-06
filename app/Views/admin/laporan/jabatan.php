<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Jabatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Jabatan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0 float-left">Data Jabatan</h5>
                    <!-- <a href="#" class="btn-sm btn-success float-right"><i class="fas fa-plus"></i> Tambah</a> -->
                    <!-- <button type="button" onclick="window.print()" class="btn-sm btn-outline-primary float-right float-right" data-toggle="modal" data-target="#modal-default">
                        <i class="fas fa-print"></i> Print
                    </button> -->
                    <a target="_blank" href="<?= base_url('/laporan/printjabatan') ?>" class="btn-sm btn-outline-primary float-right"><i class="fas fa-print"></i> Print</a>
                </div>
                <div class="card-body">

                    <!-- <button type="button" class="btn-sm btn-success float-right float-right" data-toggle="modal"
                        data-target="#modal-default">
                        <i class="fas fa-plus"></i> Tambah
                    </button> -->

                    <table id="example2" class="table table-hover table-bordered table-striped">
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
                </div>
                <!-- <div class="card-footer">
                    akhir
                </div> -->
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>