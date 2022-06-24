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
                            <img class="card-img-top" src="<?= base_url('/img/user.png') ?>" alt="Card image cap">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="card-header">
                                <h5 class="card-title float-left">Data Anak</h5>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <button class="btn-sm btn-success float-right"><i class="fas fa-plus"></i> </button>
                                <table class="table table-bordered table-striped example2 ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Anak</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Anake ke</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>

    <?= $this->endSection() ?>