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
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="Masukan NIP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="Masukan Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jenis kelamin</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal
                                        lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="colFormLabel"
                                            placeholder="Masukan Tanggal lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat lahir</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="Masukan Tempat lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Islam
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Protestan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Katolik
                                                    </label>
                                                </div>
                                                <!-- <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        Hindu
                                                    </label>
                                                </div> -->
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Hindu
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Buddha
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Khonghucu
                                                    </label>
                                                </div>
                                                <!-- <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Pendidikan
                                        terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="Masukan pendidikan terakhir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Status Perkawinan
                                        terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="Masukan Status Perkawinan terakhir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="Masukan Nomor Telepon">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=" card-footer">
                            <a href="" class="btn-sm btn-success btn-block text-center">SIMPAN</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?= $this->endSection() ?>