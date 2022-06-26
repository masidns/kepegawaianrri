<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mutasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Mutasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0 float-left">Tabel Data Mutasi</h5>
                    <a href="<?= base_url('mutasi/create') ?>" class="btn-sm btn-success float-right"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered table-striped example2 ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Mutasi</th>
                                <th>Nama Pegawai</th>
                                <th>Unit Kerja Lama</th>
                                <th>Unit Kerja Baru</th>
                                <th>Tanggal Mutasi</th>
                                <td align="center"><i class="fas fa-cog"></i></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datamutasi as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->nomutasi ?></td>
                                    <td><?= $value->nama ?></td>
                                    <td> <?= $value->unit_kerja_lama ?></td>
                                    <td> <?= $value->unit_kerja_baru ?></td>
                                    <td> <?= $value->tanggal_mutasi ?></td>
                                    <td align="center">
                                        <a type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#modal-default-<?= $value->idmutasi ?>"><i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?= base_url('/mutasi/update/' . $value->idmutasi) ?>" class="btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('/mutasi/delete/' . $value->idmutasi) ?>" class="btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                    </td>
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

<!-- modal detail -->
<?php foreach ($datamutasi as $key => $value) : ?>
    <div class="modal fade" id="modal-default-<?= $value->idmutasi ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail data mutasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="formGroupExampleInput">No mutasi</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $value->nomutasi ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $value->nama ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Unit kerja lama</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $value->unit_kerja_lama ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Unit kerja baru</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $value->unit_kerja_baru ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Tempat mutasi</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $value->tempat_mutasi ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Tanggal mutasi</label>
                                <input type="date" class="form-control" id="formGroupExampleInput" value="<?= $value->tanggal_mutasi ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Keterangan</label>
                                <textarea type="text" class="form-control" readonly><?= $value->keterangan ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- <p>One fine body&hellip;</p> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <!-- <button type="button" class="btn-block btn-default" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?= $this->endSection() ?>