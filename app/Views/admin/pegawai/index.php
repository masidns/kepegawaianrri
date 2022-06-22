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
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="float-left m-0">Tabel Data Pegawai</h5>
                    <a href="<?= base_url('/pegawai/insert') ?>" class="float-right btn-sm btn-success ">Tambah data</a>
                </div>
                <div class="card-body">
                    <table class="example2 table table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>No. Telepeon</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pegawai as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->nip ?></td>
                                    <td><?= $value->nama ?></td>
                                    <td><?= $value->no_telepon ?></td>
                                    <td><?= $value->nama_jabatan ?></td>
                                    <td align="center">
                                        <a href="" class="btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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

<?= $this->endSection() ?>