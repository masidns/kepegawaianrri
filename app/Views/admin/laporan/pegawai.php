<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pegawai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="float-left m-0">Tabel Data Pegawai</h5>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="row">

                                <div class="col-sm-10 float-right">
                                    <a target="_blank" href="<?= base_url('/pegawai/print') ?>" class="float-right btn-sm btn-outline-primary "><i class="fas fa-print"></i> print</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url('/pegawai/insert') ?>" class="float-right btn-sm btn-success "><i class="fas fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <a href="<?= base_url('/pegawai/insert') ?>" class="float-right btn-sm btn-success "><i class="fas fa-plus"></i> Tambah</a>
                    <a href="<?= base_url('/pegawai/insert') ?>" class="float-right btn-sm btn-outline-primary "><i class="fas fa-print"></i> print</a> -->
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <form method="<?= base_url('/laporan/laporanpegawai') ?>" method="POST">
                                <div class="row">
                                    <div class="col-sm form-group">
                                        <select name="agama" class="form-control" onchange="this.form.submit()">
                                            <option value="">Tampilkan Semua Agama</option>

                                            <option value="Islam" <?= ($_GET['agama']) == 'Islam' ? "selected" : ''; ?>>Islam</option>
                                            <option value="Protestan" <?= ($_GET['agama'] == 'Protestan') ? "selected" : ''; ?>>Protestan</option>
                                            <option value="Khatolik" <?= ($_GET['agama'] == 'Khatolik') ? "selected" : ''; ?>>Khatolik</option>
                                            <option value="Hindu" <?= ($_GET['agama'] == 'Hindu') ? "selected" : ''; ?>>Hindu</option>
                                            <option value="Buddha" <?= ($_GET['agama'] == 'Buddha') ? "selected" : ''; ?>>Buddha</option>
                                            <option value="Khonghucu" <?= ($_GET['agama'] == 'Khonghucu') ? "selected" : ''; ?>>Khonghucu</option>

                                        </select>
                                    </div>
                                    <div class="col-sm form-group">
                                        <a target="_blank" href="<?= base_url('/laporan/printpegawai?agama=') . $_GET['agama'] ?>" onchange="this.form.submit()" class="btn btn-outline-primary"><i class="fas fa-print"></i> Print</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="example2 table table-hover table-bordered table-striped  ">
                        <thead>
                            <tr align="center">
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
                </div>
                <!-- <div class="card-footer">
                    akhir
                </div> -->
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>