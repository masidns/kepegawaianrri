<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Mutasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/mutasi') ?>">Mutasi</a></li>
                        <li class="breadcrumb-item active">Tambah Data Mutasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0 float-left">Tambah Data Mutasi</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('/mutasi/save') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">No Mutasi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nomutasi" class="form-control <?= ($validation->hasError('nomutasi')) ? 'is-invalid' : (old('nomutasi') ? 'is-valid' : '') ?>" value="<?= (old('nomutasi')) ?>" id="colFormLabel" placeholder="Masukan nomutasi">
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('nomutasi'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Unit Kerja Lama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="unit_kerja_lama" class="form-control <?= ($validation->hasError('unit_kerja_lama')) ? 'is-invalid' : (old('unit_kerja_lama') ? 'is-valid' : '') ?>" value="<?= (old('unit_kerja_lama')) ?>" id="colFormLabel" placeholder="Masukan Unit Kerja Lama">
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('unit_kerja_lama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat Mutasi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat_mutasi" class="form-control <?= ($validation->hasError('tempat_mutasi')) ? 'is-invalid' : (old('tempat_mutasi') ? 'is-valid' : '') ?>" value="<?= (old('tempat_mutasi')) ?>" id="colFormLabel" placeholder="Masukan Tempat Mutasi">
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('tempat_mutasi'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <textarea name="keterangan" class="form-control <?= ($validation->hasError('tempat_mutasi')) ? 'is-invalid' : (old('tempat_mutasi') ? 'is-valid' : '') ?>" id=""><?= (old('keterangan')) ?></textarea>
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('keterangan'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">


                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-9">
                                        <select name="idpegawai" class="form-control select2bs4  <?= ($validation->hasError('idpegawai')) ? 'is-invalid' : (old('idpegawai') ? 'is-valid' : '') ?>" style="width: 100%;" required>
                                            <option Selected>Pilih Nama Pegawai...</option>
                                            <?php foreach ($pegawai as $key => $value) : ?>
                                                <option value="<?= $value->idpegawai ?>" <?= old('idpegawai') == $value->idpegawai ? 'Selected' : '' ?>>
                                                    <?= $value->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('idpegawai'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Unit Kerja Baru</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="unit_kerja_baru" class="form-control <?= ($validation->hasError('unit_kerja_baru')) ? 'is-invalid' : (old('unit_kerja_baru') ? 'is-valid' : '') ?>" value="<?= (old('unit_kerja_baru')) ?>" id="colFormLabel" placeholder="Masukan Unit Kerja Baru">
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('unit_kerja_baru'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Mutasi</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_mutasi" class="form-control <?= ($validation->hasError('tanggal_mutasi')) ? 'is-invalid' : (old('tanggal_mutasi') ? 'is-valid' : '') ?>" value="<?= (old('tanggal_mutasi')) ?>" id="colFormLabel" placeholder="Masukan Unit Kerja Baru">
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('tanggal_mutasi'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn-sm btn-block btn-success"><i class="fas fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <!-- <div class="card-footer">
                    akhir
                </div> -->
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>