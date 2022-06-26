<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pasangan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/pegawai') ?>">Pegawai</a></li>
                        <li class="breadcrumb-item active">Data Pasangan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">

            <form action="<?= base_url('/pegawai/update_datapasangan/' . $pasangan->idpasangan) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="float-left m-0">Masukan Data Pasangan</h5>
                                <!-- <a href="#" class="float-right btn-sm btn-success ">Tambah data</a> -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Pasangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama_pasangan" class="form-control <?= ($validation->hasError('nama_pasangan')) ? 'is-invalid' : (old('nama_pasangan') ? 'is-valid' : '') ?>" value="<?= (old('nama_pasangan')) ? old('nama_pasangan') : $pasangan->nama_pasangan ?>" id="colFormLabel" placeholder="Masukan Nama Pasangan">
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('nama_pasangan'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                            <div class="col-sm-9">
                                                <select name="jenis_kelamin" class="custom-select <?= old('jenis_kelamin') == '' ? '' : (old('jenis_kelamin') == 'Laki-laki' ? 'is-valid' : (old('jenis_kelamin') == 'Perempuan' ? 'is-valid' : 'is-invalid')) ?> " readonly>
                                                    <option>Choose...</option>
                                                    <option value="Laki-laki" <?= ($pasangan->jenis_kelamin != 'Laki-laki') ? 'selected' : '' ?>>
                                                        Laki-laki</option>
                                                    <option value="Perempuan" <?= ($pasangan->jenis_kelamin != 'Perempuan') ? 'selected' : ''  ?>>
                                                        Perempuan</option>
                                                </select>
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('jenis_kelamin'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal
                                                lahir</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="tanggallahir" class="form-control <?= ($validation->hasError('tanggallahir')) ? 'is-invalid' : (old('tanggallahir') ? 'is-valid' : '') ?>" value="<?= (old('tanggallahir')) ? old('tanggallahir') : $pasangan->tanggallahir ?>" id="colFormLabel" placeholder="Masukan Tanggal lahir">
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('tanggallahir'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="tempatlahir" class="form-control <?= ($validation->hasError('tempatlahir')) ? 'is-invalid' : (old('tempatlahir') ? 'is-valid' : '') ?>" value="<?= (old('tempatlahir')) ? old('tempatlahir') : $pasangan->tempatlahir ?>" id="colFormLabel" placeholder="Masukan Tempat lahir">
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('tempatlahir'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Agama</label>
                                            <div class="col-sm-9">
                                                <div class="row form-control-border">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="agama" id="Islam" value="Islam" <?= (old('agama')) == 'Islam' ? 'Checked' : ($pasangan->agama == 'Islam' ? 'Checked' : '')  ?>>
                                                            <label class="form-check-label" for="Islam">
                                                                Islam
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="agama" id="Protestan" value="Protestan" <?= (old('agama')) == 'Protestan' ? 'Checked' : ($pasangan->agama == 'Protestan' ? 'Checked' : '') ?>>
                                                            <label class="form-check-label" for="Protestan">
                                                                Protestan
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="agama" id="Khatolik" value="Khatolik" <?= (old('agama')) == 'Khatolik' ? 'Checked' : ($pasangan->agama == 'Khatolik' ? 'Checked' : '') ?>>
                                                            <label class="form-check-label" for="Khatolik">
                                                                Khatolik
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="agama" id="Hindu" value="Hindu" <?= (old('agama')) == 'Hindu' ? 'Checked' : ($pasangan->agama == 'Hindu' ? 'Checked' : '') ?>>
                                                            <label class="form-check-label" for="Hindu">
                                                                Hindu
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="agama" id="Buddha" value="Buddha" <?= (old('agama')) == 'Buddha' ? 'Checked' : ($pasangan->agama == 'Buddha' ? 'Checked' : '') ?>>
                                                            <label class="form-check-label" for="Buddha">
                                                                Buddha
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="agama" id="Khonghucu" value="Khonghucu" <?= (old('agama')) == 'Khonghucu' ? 'checked' : ($pasangan->agama == 'Khonghucu' ? 'Checked' : '') ?>>
                                                            <label class="form-check-label" for="Khonghucu">
                                                                Khonghucu
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Nikah</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="tanggalnikah" class="form-control <?= ($validation->hasError('tanggalnikah')) ? 'is-invalid' : (old('tanggalnikah') ? 'is-valid' : '') ?>" value="<?= (old('tanggalnikah')) ? old('tanggalnikah') : $pasangan->tanggalnikah ?>" id="colFormLabel" placeholder="Masukan Tanggal Nikah">
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('tanggalnikah'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : (old('pekerjaan') ? 'is-valid' : '') ?>" value="<?= (old('pekerjaan')) ? old('pekerjaan') : $pasangan->pekerjaan ?>" id="colFormLabel" placeholder="Masukan Pekerjaan">
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('pekerjaan'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Pendidikan
                                                Terakhir</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pendidikanterakhir" class="form-control <?= ($validation->hasError('pendidikanterakhir')) ? 'is-invalid' : (old('pendidikanterakhir') ? 'is-valid' : '') ?>" value="<?= (old('pendidikanterakhir')) ? old('pendidikanterakhir') : $pasangan->pendidikanterakhir ?>" id="colFormLabel" placeholder="Masukan pendidikan terakhir">
                                                <div id="" class="invalid-feedback">
                                                    <?= $validation->getError('pendidikanterakhir'); ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" card-footer">
                                <button type="submit" class="btn-sm btn-success btn-block text-center">SIMPAN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>