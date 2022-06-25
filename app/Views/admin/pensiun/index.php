<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pegawai Pensiun</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Pegawai Pensiun</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <!-- <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Tabel Data Pegawai Pensiun</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped example2 ">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div> -->

            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                aria-selected="true">Data Pensiun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                                aria-selected="false">Data Pegawai</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="align-right">

                    </div>
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                            aria-labelledby="custom-tabs-four-home-tab">
                            <button type="button" class="btn-sm btn-success" data-toggle="modal"
                                data-target="#modal-default">
                                <i class="fas fa-plus"></i> Tambah
                            </button>
                            <br>
                            <br>
                            <table class="table table-bordered table-striped example2 ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pensiun</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pensiun</th>
                                        <th>Tempat Pensiun</th>
                                        <th>Keterangan</th>
                                        <td align="center"><i class="fas fa-cog"></i></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pensiun as $key => $value) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value->nopensiun ?></td>
                                        <td><?= $value->nama ?></td>
                                        <td><?= $value->tanggal_pensiun ?></td>
                                        <td><?= $value->tempat_pensiun ?></td>
                                        <td><?= $value->keterangan ?></td>
                                        <td align="center">
                                            <a href="" class="btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <!-- <button type="button" class="btn btn-default" data-toggle="modal"
                                data-target="#modal-default">
                                <i class="fas fa-plus"></i> Tambah
                            </button> -->
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-four-profile-tab">
                            <table class="table table-bordered table-striped example2 ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama Pegawai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($pegawaipensiun as $key => $value) : ?>
                                    <?php if (empty($value->nopensiun)) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->nip ?></td>
                                        <td><?= $value->nama ?></td>
                                    </tr>
                                    <?php endif ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<!-- modal create -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Pensiun</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('/pensiun/save') ?>" method="post" enctype="multipart/form-data">
                <?php csrf_field() ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">No Pensiun</label>
                        <input type="text" name="nopensiun"
                            class="form-control <?= ($validation->hasError('nopensiun')) ? 'is-invalid' : '' ?>" id=""
                            placeholder="No Pensiun">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Pegawai</label>
                        <select name="idpegawai"
                            class="form-control select2bs4  <?= ($validation->hasError('idpegawai')) ? 'is-invalid' : (old('idpegawai') ? 'is-valid' : '') ?>"
                            style="width: 100%;" required>
                            <option Selected>Pilih Nama Pegawai...</option>
                            <?php foreach ($pegawai as $key => $value) : ?>
                            <option value="<?= $value->idpegawai ?>" <?= (old('idpegawai')) ? 'Selected' : '' ?>>
                                <?= $value->nama ?></option>
                            <?php endforeach ?>
                            <div id="" class="invalid-feedback">
                                <?= $validation->getError('idpegawai'); ?>
                            </div>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pensiun</label>
                        <input type="date" name="tanggal_pensiun"
                            class="form-control <?= ($validation->hasError('tanggal_pensiun')) ? 'is-invalid' : '' ?>"
                            id="" placeholder="Tanggal Pensiun">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Pensiun</label>
                        <input type="text" name="tempat_pensiun"
                            class="form-control <?= ($validation->hasError('tempat_pensiun')) ? 'is-invalid' : '' ?>"
                            id="" placeholder="Tempat Pensiun">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan"
                            class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : '' ?>"
                            placeholder="Keterangan" id=""></textarea>
                    </div>
                    <!-- <p>One fine body&hellip;</p> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>

    </div>

</div>
<!-- modal create -->

<?= $this->endSection() ?>