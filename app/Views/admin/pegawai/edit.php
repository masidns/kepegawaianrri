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
                        <li class="breadcrumb-item"><a href="<?= base_url('/pegawai') ?>">Pegawai</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">

            <form action="<?= base_url('/pegawai/save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-4">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="float-left m-0">Upload Foto Pegawai</h5>
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
                                <h5 class="float-left m-0">Masukan Data Pegawai</h5>
                                <!-- <a href="#" class="float-right btn-sm btn-success ">Tambah data</a> -->
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">NIP</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nip" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : '' ?>" value="<?= (old('nip')) ? old('nip') : $pegawai->nip ?>" id="colFormLabel" placeholder="Masukan NIP">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('nip'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" value="<?= (old('nama')) ? old('nama') : $pegawai->nama ?>" id="colFormLabel" placeholder="Masukan Nama">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                        <div class="col-sm-9">
                                            <select name="jenis_kelamin" class="custom-select   <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : '' ?> " required>
                                                <option>Choose...</option>
                                                <option value="Laki-laki" <?= (old('jenis_kelamin') ? 'selected' : ($pegawai->jenis_kelamin == 'Laki-laki' ? 'Selected' : '')) ?>>Laki-laki</option>
                                                <option value="Perempuan" <?= (old('jenis_kelamin') ? 'selected' : ($pegawai->jenis_kelamin == 'Perempuan' ? 'Selected' : '')) ?>>Perempuan</option>
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
                                            <input type="date" name="tanggal_lahir" value="<?= (old('tanggal_lahir')) ?>" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $pegawai->tanggal_lahir ?>">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('tanggal_lahir'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : '' ?>" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $pegawai->tempat_lahir ?>" id="colFormLabel" placeholder="Masukan Tempat lahir">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('tempat_lahir'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama1" value="Islam" <?= ($pegawai->agama == 'Islam') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="agama1">
                                                            Islam
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Protestan" <?= ($pegawai->agama == 'Protestan') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Protestan
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Khatolik" <?= ($pegawai->agama == 'Khatolik') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Khatolik
                                                        </label>
                                                    </div>
                                                    <!-- <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="agama"
                                                        id="agama3" value="option3" disabled>
                                                    <label class="form-check-label" for="agama3">
                                                        Hindu
                                                    </label>
                                                </div> -->
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="Hindu" value="Hindu" <?= ($pegawai->agama == 'Hindu') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="agama1">
                                                            Hindu
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Buddha" <?= ($pegawai->agama == 'Buddha') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Buddha
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Khonghucu" <?= ($pegawai->agama == 'Khonghucu') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Khonghucu
                                                        </label>
                                                    </div>
                                                    <!-- <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="agama"
                                                        id="agama3" value="option3" disabled>
                                                    <label class="form-check-label" for="agama3">
                                                        Disabled radio
                                                    </label>
                                                </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" name="alamat" id="exampleFormControlTextarea1" rows="3"><?= (old('alamat')) ? old('alamat') : $pegawai->alamat ?></textarea>
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Pendidikan
                                            terakhir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pendidikan_terakhir" class="form-control <?= ($validation->hasError('pendidikan_terakhir')) ? 'is-invalid' : '' ?>" value="<?= (old('pendidikan_terakhir')) ? old('pendidikan_terakhir')  : $pegawai->pendidikan_terakhir ?>" id="colFormLabel" placeholder="Masukan pendidikan terakhir">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('pendidikan_terakhir'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Status Perkawinan
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="status_perkawinan" class="form-control <?= ($validation->hasError('status_perkawinan')) ? 'is-invalid' : '' ?>" value="<?= (old('status_perkawinan')) ? old('status_perkawinan') : $pegawai->status_perkawinan ?>" id="colFormLabel" placeholder="Masukan Status Perkawinan">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('status_perkawinan'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="no_telepon" class="form-control <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : '' ?>" value="<?= (old('no_telepon')) ? old('no_telepon') : $pegawai->no_telepon ?>" id="colFormLabel" placeholder="Masukan Nomor Telepon">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('no_telepon'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-9">
                                            <select name="idjabatan" class="custom-select   <?= ($validation->hasError('idjabatan')) ? 'is-invalid' : '' ?> " required>
                                                <option selected>Choose...</option>
                                                <option value="1" <?= (old('idjabatan')) == '1' ? 'Selected' : '' ?>>Laki-laki</option>
                                                <option value="2" <?= (old('idjabatan')) == '2' ? 'selected' : '' ?>>Perempuan</option>
                                            </select>
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('idjabatan'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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