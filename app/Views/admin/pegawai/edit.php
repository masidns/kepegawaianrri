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

            <form action="<?= base_url('/pegawai/update_data/' . $pegawai->idpegawai) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="fotolama" value="<?= $pegawai->foto ?>">
                <div class="row">
                    <div class="col-4">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="float-left m-0">Upload Foto Pegawai</h5>
                            </div>
                            <div class="card-body">
                                <img class="card-img-top img-preview" src="<?= base_url('/img/foto_pegawai/' . $pegawai->foto) ?>">
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="foto" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="inputGroupFile01" onchange="previewImg()">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                        <div id="" class="invalid-feedback">
                                            <?= $validation->getError('foto'); ?>
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
                                            <input type="text" name="nip" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : (old('nip') ? 'is-valid' : ($pegawai->nip ? 'is-valid' : '')) ?>" value="<?= (old('nip')) ? old('nip') : $pegawai->nip ?>" id="colFormLabel" placeholder="Masukan NIP">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('nip'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : (old('nama') ? 'is-valid' : ($pegawai->nama ? 'is-valid' : '')) ?>" value="<?= (old('nama')) ? old('nama') : $pegawai->nama ?>" id="colFormLabel" placeholder="Masukan Nama">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                        <div class="col-sm-9">
                                            <select name="jenis_kelamin" class="custom-select   <?= old('jenis_kelamin') == '' ? 'is-valid' : (old('jenis_kelamin') != 'Laki-laki' ? 'is-valid' : (old('jenis_kelamin') == 'Perempuan' ? 'is-valid' : 'is-invalid')) ?> " required>
                                                <option>Choose...</option>
                                                <option value="Laki-laki" <?= ((old('jenis_kelamin')) == 'Laki-laki' ? 'selected' : ($pegawai->jenis_kelamin == 'Laki-laki' ? 'Selected' : '')) ?>>
                                                    Laki-laki</option>
                                                <option value="Perempuan" <?= ((old('jenis_kelamin')) == 'Perempuan' ? 'selected' : ($pegawai->jenis_kelamin == 'Perempuan' ? 'Selected' : '')) ?>>
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
                                            <input type="date" name="tanggal_lahir" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : (old('tanggal_lahir') ? 'is-valid' : ($pegawai->tanggal_lahir ? 'is-valid' : '')) ?>" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $pegawai->tanggal_lahir ?>">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('tanggal_lahir'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tempat_lahir" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : (old('tempat_lahir') ? 'is-valid' : ($pegawai->tempat_lahir ? 'is-valid' : '')) ?>" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $pegawai->tempat_lahir ?>" id="colFormLabel" placeholder="Masukan Tempat lahir">
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
                                                        <input class="form-check-input" type="radio" name="agama" id="agama1" value="Islam" <?= (old('agama')) == 'Islam' ? 'Checked' : ($pegawai->agama == 'Islam' ? 'checked' : '') ?>>
                                                        <label class="form-check-label" for="agama1">
                                                            Islam
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Protestan" <?= (old('agama')) == 'Protestan' ? 'Checked' : ($pegawai->agama == 'Protestan' ? 'checked' : '') ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Protestan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Khatolik" Protestan<?= (old('agama')) == 'Khatolik' ? 'Checked' : ($pegawai->agama == 'Khatolik' ? 'checked' : '') ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Khatolik
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="Hindu" value="Hindu" <?= (old('agama')) == 'Hindu' ? 'Checked' : ($pegawai->agama == 'Hindu' ? 'checked' : '') ?>>
                                                        <label class="form-check-label" for="agama1">
                                                            Hindu
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Buddha" <?= (old('agama')) == 'Buddha' ? 'Checked' : ($pegawai->agama == 'Buddha' ? 'checked' : '') ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Buddha
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="agama" id="agama2" value="Khonghucu" <?= (old('agama')) == 'Khonghucu' ? 'Checked' : ($pegawai->agama == 'Khonghucu' ? 'checked' : '') ?>>
                                                        <label class="form-check-label" for="agama2">
                                                            Khonghucu
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : (old('alamat') ? 'is-valid' : ($pegawai->alamat ? 'is-valid' : '')) ?>" name="alamat" id="exampleFormControlTextarea1" rows="3"><?= (old('alamat')) ? old('alamat') : $pegawai->alamat ?></textarea>
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Pendidikan
                                            terakhir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pendidikan_terakhir" class="form-control <?= ($validation->hasError('pendidikan_terakhir')) ? 'is-invalid' : (old('pendidikan_terakhir') ? 'is-valid' : ($pegawai->pendidikan_terakhir ? 'is-valid' : '')) ?>" value="<?= (old('pendidikan_terakhir')) ? old('pendidikan_terakhir')  : $pegawai->pendidikan_terakhir ?>" id="colFormLabel" placeholder="Masukan pendidikan terakhir">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('pendidikan_terakhir'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Status Perkawinan
                                        </label>
                                        <div class="col-sm-9">
                                            <select name="status_perkawinan" class="custom-select   <?= old('status_perkawinan') == '' ? 'is-valid' : (old('status_perkawinan') == 'Belum Kawin' ? 'is-valid' : (old('status_perkawinan') == 'Kawin' ? 'is-valid' : (old('status_perkawinan') == 'Cerai Hidup' ? 'is-valid' : (old('status_perkawinan') == 'Cerai Mati' ? 'is-valid' : 'is-invalid')))) ?> " required>
                                                <option>Status Perkawinan...</option>
                                                <option value="Belum Kawin" <?= ((old('status_perkawinan')) == 'Belum Kawin' ? 'selected' : ($pegawai->status_perkawinan == 'Belum Kawin' ? 'Selected' : '')) ?>>
                                                    Belum Kawin</option>
                                                <option value="Kawin" <?= $pegawai->status_perkawinan == 'Kawin' ? 'Selected' : '' ?>>
                                                    Kawin</option>
                                                <option value="Cerai Hidup" <?= ((old('status_perkawinan')) == 'Cerai Hidup' ? 'selected' : ($pegawai->status_perkawinan == 'Cerai Hidup' ? 'Selected' : '')) ?>>
                                                    Cerai Hidup</option>
                                                <option value="Cerai Mati" <?= ((old('status_perkawinan')) == 'Cerai Mati' ? 'selected' : ($pegawai->status_perkawinan == 'Cerai Mati' ? 'Selected' : '')) ?>>
                                                    Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="no_telepon" class="form-control <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : (old('no_telepon') ? 'is-valid' : ($pegawai->no_telepon ? 'is-valid' : '')) ?>" value="<?= (old('no_telepon')) ? old('no_telepon') : $pegawai->no_telepon ?>" id="colFormLabel" placeholder="Masukan Nomor Telepon">
                                            <div id="" class="invalid-feedback">
                                                <?= $validation->getError('no_telepon'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-9">
                                            <select name="idjabatan" class="custom-select    <?= old('idjabatan') != $pegawai->idjabatan ? 'is-valid' : (old('idjabatan') ? 'is-valid' : 'is-valid') ?> ">
                                                <option value="0">Choose...</option>
                                                <?php foreach ($jabatan as $key => $value) : ?>
                                                    <option value="<?= $value->idjabatan ?>" <?= $pegawai->idjabatan == $value->idjabatan ? 'Selected' : '' ?>>
                                                        <?= $value->nama_jabatan ?>
                                                    </option>
                                                <?php endforeach ?>
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