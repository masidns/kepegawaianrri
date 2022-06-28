<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Data Pegawai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/pegawai') ?>">Pegawai</a></li>
                        <li class="breadcrumb-item active">Detail Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="float-left m-0">Foto Pegawai</h5>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="<?= base_url('/img/foto_pegawai/' . $pegawai->foto) ?>" alt="Card image cap">

                        </div>
                        <!-- <div class="card-footer">
                            akhir
                        </div> -->
                    </div>
                </div>
                <div class="col-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="float-left m-0">Detail Data Pegawai</h5>
                            <a href="<?= base_url('pegawai/update/' . $pegawai->idpegawai)  ?>" class="float-right btn-sm btn-warning "><i class="fas fa-edit"></i> Edit
                                data</a>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">NIP</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->nip ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->nama ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->jenis_kelamin ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->tanggal_lahir ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->tempat_lahir ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->agama ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->alamat ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->pendidikan_terakhir ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->status_perkawinan ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">No Telepon</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->no_telepon ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-4 col-form-label">Jabatan</label>
                                <div class="col-sm-8">
                                    <label for="colFormLabel" class="col-form-label"><?= $pegawai->nama_jabatan ?></label>
                                </div>
                            </div>
                        </div>
                        <div class=" card-footer">
                            <!-- <a href="" class="btn-sm btn-warning btn-block text-center"><i class="fas fa-edit"></i> EDIT</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($pegawai->status_perkawinan == 'Kawin' || $pegawai->status_perkawinan == 'Cerai Hidup' || $pegawai->status_perkawinan == 'Cerai Mati') : ?>
                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-8">
                        <div class="card card-primary card-outline">
                            <div class="card-header" type="button" data-card-widget="collapse">
                                <h5 class="card-title float-left">Data Pasangan</h5>

                                <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" >
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div> -->
                            </div>
                            <div class="card-body">
                                <!-- <button type="button"></button> -->
                                <a href="<?= base_url('/pegawai/insert_pasangan/' . $pegawai->idpegawai) ?>" class="btn-sm btn-success float-right"><i class="fas fa-plus"></i> </a>
                                <br><br>
                                <table class="table table-bordered table-striped example2">
                                    <thead>
                                        <tr>
                                            <th>Nama Pasangan</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Pekerjaan</th>
                                            <th><i class="fas fa-cog"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pasangan as $key => $value) : ?>
                                            <?php if ($value->idpegawai == $pegawai->idpegawai) : ?>
                                                <tr>
                                                    <td><?= $value->nama_pasangan ?></td>
                                                    <td><?= $value->pendidikanterakhir ?></td>
                                                    <td><?= $value->pekerjaan ?></td>
                                                    <td>
                                                        <!-- <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a> -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default-<?= $value->idpasangan ?>">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <a href="<?= base_url('/pegawai/update_pasangan/' . $value->idpasangan) ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if ($pegawai->status_perkawinan == 'Kawin' || $pegawai->status_perkawinan == 'Cerai Hidup' || $pegawai->status_perkawinan == 'Cerai Mati') : ?>

                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="card card-primary card-outline">
                            <div type="button" class="card-header" data-card-widget="collapse">
                                <h5 class="card-title float-left">Data Anak</h5>

                                <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" >
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn-sm btn-success float-right" data-toggle="modal" data-target="#modal-default">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <br><br>
                                <table class="table table-bordered table-striped example2 ">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Anak ke</th>
                                            <th>Status</th>
                                            <td><i class="fas fa-cog"></i></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($anak as $key => $value) : ?>
                                            <?php if ($value->idpegawai == $pegawai->idpegawai) : ?>
                                                <tr>
                                                    <td><?= $value->nama_anak ?></td>
                                                    <td><?= $value->tempat_lahir_anak ?></td>
                                                    <td><?= $value->tanggal_lahir_anak ?></td>
                                                    <td><?= $value->anakke ?></td>
                                                    <td><?= $value->status_anak ?></td>
                                                    <td>
                                                        <button type="button" class="btn-sm btn-primary " data-toggle="modal" data-target="#modal-default<?= $value->idanak ?>">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button type="button" class="btn-sm btn-warning " data-toggle="modal" data-target="#modal-default-<?= $value->idanak ?>">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endif ?>
        </div>
    </div>
</div>


<!-- detail pasangan -->
<?php foreach ($pasangan as $key => $value) : ?>
    <div class="modal fade" id="modal-default-<?= $value->idpasangan ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Data Pasangan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <p>One fine body&hellip;</p> -->
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->nama_pasangan ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->jenis_kelamin ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">agama</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->agama ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->tanggallahir ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->tempatlahir ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Nikah</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->tanggalnikah ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->pendidikanterakhir ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Pekerjaan</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->pekerjaan ?></label>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>

        </div>

    </div>
<?php endforeach ?>
<!-- detail pasangan -->


<!-- insert anak -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('/pegawai/save_anak') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="idpegawai" value="<?= $pegawai->idpegawai ?>">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Anak</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <p>One fine body&hellip;</p> -->
                    <div class="form-group">
                        <label>Nama Anak</label>
                        <input type="text" name="nama_anak" value="<?= (old('nama_anak')) ?>" class="form-control <?= ($validation->hasError('nama_anak')) ? 'is-invalid' : (old('nama_anak') ? 'is-valid' : '')  ?>" placeholder="Nama Anak">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_anak') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir_anak" value="<?= (old('tempat_lahir_anak')) ?>" class="form-control <?= ($validation->hasError('tempat_lahir_anak')) ? 'is-invalid' : (old('tempat_lahir_anak') ? 'is-valid' : '')  ?>" placeholder="Tempat Lahir">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tempat_lahir_anak') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir_anak" value="<?= (old('tanggal_lahir_anak')) ?>" class="form-control <?= ($validation->hasError('tanggal_lahir_anak')) ? 'is-invalid' : (old('tanggal_lahir_anak') ? 'is-valid' : (old('tanggal_lahir_anak') ? 'is-valid' : ''))  ?>" placeholder="Tanggal Lahir">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tanggal_lahir_anak') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Anak Ke</label>
                        <input type="number" name="anakke" min="1" max="15" value="<?= (old('anakke')) ?>" class="form-control <?= ($validation->hasError('anakke')) ? 'is-invalid' : (old('anakke') ? 'is-valid' : '')  ?>" placeholder="Anak Ke">
                        <div class="invalid-feedback">
                            <?= $validation->getError('anakke') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status Anak</label>
                        <input type="text" name="status_anak" value="<?= (old('status_anak')) ?>" class="form-control <?= ($validation->hasError('status_anak')) ? 'is-invalid' : (old('status_anak') ? 'is-valid' : '')  ?>" placeholder="Status Anak">
                        <div class="invalid-feedback">
                            <?= $validation->getError('status_anak') ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-block btn-primary">Save</button>
                </div>
            </form>
        </div>

    </div>

</div>
<!-- insert anak -->

<!-- edit anak -->
<?php foreach ($anak as $key => $value) : ?>
    <div class="modal fade" id="modal-default-<?= $value->idanak ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('/pegawai/update_anak/' . $value->idanak) ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="idpegawai" value="<?= $pegawai->idpegawai ?>">
                    <div class="modal-header">
                        <h4 class="modal-title">Perbaharui Data Anak</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <p>One fine body&hellip;</p> -->
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" name="nama_anak" value="<?= (old('nama_anak')) ? old('nama_anak') : $value->nama_anak ?>" class="form-control <?= ($validation->hasError('nama_anak')) ? 'is-invalid' : (old('nama_anak') ? 'is-valid' : '')  ?>" placeholder="Nama Anak">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_anak') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir_anak" value="<?= (old('tempat_lahir_anak')) ? old('tempat_lahir_anak') : $value->tempat_lahir_anak ?>" class="form-control <?= ($validation->hasError('tempat_lahir_anak')) ? 'is-invalid' : (old('tempat_lahir_anak') ? 'is-valid' : '')  ?>" placeholder="Tempat Lahir">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tempat_lahir_anak') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir_anak" value="<?= (old('tanggal_lahir_anak')) ? old('tanggal_lahir_anak') : $value->tanggal_lahir_anak ?>" class="form-control <?= ($validation->hasError('tanggal_lahir_anak')) ? 'is-invalid' : (old('tanggal_lahir_anak') ? 'is-valid' : (old('tanggal_lahir_anak') ? 'is-valid' : ''))  ?>" placeholder="Tanggal Lahir">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tanggal_lahir_anak') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Anak Ke</label>
                            <input type="number" name="anakke" min="1" max="15" value="<?= (old('anakke')) ? old('anakke') : $value->anakke ?>" class="form-control <?= ($validation->hasError('anakke')) ? 'is-invalid' : (old('anakke') ? 'is-valid' : '')  ?>" placeholder="Anak Ke">
                            <div class="invalid-feedback">
                                <?= $validation->getError('anakke') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Anak</label>
                            <input type="text" name="status_anak" value="<?= (old('status_anak')) ? old('status_anak') : $value->status_anak ?>" class="form-control <?= ($validation->hasError('status_anak')) ? 'is-invalid' : (old('status_anak') ? 'is-valid' : '')  ?>" placeholder="Status Anak">
                            <div class="invalid-feedback">
                                <?= $validation->getError('status_anak') ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-block btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
<?php endforeach ?>
<!-- edit anak -->

<!-- detail pasangan -->
<?php foreach ($anak as $key => $value) : ?>
    <div class="modal fade" id="modal-default<?= $value->idanak ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Data Anak</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <p>One fine body&hellip;</p> -->
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->nama_anak ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->tempat_lahir_anak ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->tanggal_lahir_anak ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Anak ke</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->anakke ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Status Anak</label>
                        <div class="col-sm-8">
                            <label for="colFormLabel" class="col-form-label"><?= $value->status_anak ?></label>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>

        </div>

    </div>
<?php endforeach ?>
<!-- detail anak -->

<?= $this->endSection() ?>