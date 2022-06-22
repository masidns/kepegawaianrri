<?php

use Faker\Provider\Base;
?>
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
                    <h5 class="m-0 float-left">Tabel Data Jabatan</h5>
                    <!-- <a href="#" class="btn-sm btn-success float-right"><i class="fas fa-plus"></i> Tambah</a> -->
                    <button type="button" class="btn-sm btn-success float-right float-right" data-toggle="modal" data-target="#modal-default">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                </div>
                <div class="card-body">

                    <!-- <button type="button" class="btn-sm btn-success float-right float-right" data-toggle="modal"
                        data-target="#modal-default">
                        <i class="fas fa-plus"></i> Tambah
                    </button> -->

                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jabatan as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $value->nama_jabatan ?></td>
                                    <td>
                                        <button type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#modal-default-<?= $value->idjabatan ?>"><i class="fas fa-edit"></i></button>
                                        <button class="btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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


<!-- modal insert-->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah data jabatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/jabatan/save') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- <p>One fine body&hellip;</p> -->

                    <?= csrf_field() ?>
                    <label for="">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control <?= ($validation->hasError('nama_jabatan')) ? 'is-invalid' : ''; ?>" id="" aria-describedby="" value="<?= (old('nama_jabatan')) ?>" placeholder="Nama Jabatan">
                    <div id="" class="invalid-feedback">
                        <?= $validation->getError('nama_jabatan'); ?>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal update-->
<?php foreach ($jabatan as $key => $value) : ?>
    <div class="modal fade" id="modal-default-<?= $value->idjabatan ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah data jabatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/jabatan/update/' . $value->idjabatan) ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- <p>One fine body&hellip;</p> -->

                        <?= csrf_field() ?>
                        <input type="hidden" name="nama_jabatan_lama" value="<?= $value->nama_jabatan ?>">
                        <label for="">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control <?= ($validation->hasError('nama_jabatan')) ? 'is-invalid' : ''; ?>" id="" aria-describedby="" value="<?= (old('nama_jabatan')) ? old('nama_jabatan') : $value->nama_jabatan ?>" placeholder="Nama Jabatan">
                        <div id="" class="invalid-feedback">
                            <?= $validation->getError('nama_jabatan'); ?>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?= $this->endSection() ?>