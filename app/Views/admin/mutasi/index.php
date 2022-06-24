<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mutasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Mutasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">


            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0 float-left">Tabel Data Mutasi</h5>
                    <a href="<?= base_url('mutasi/create') ?>" class="btn-sm btn-success float-right"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped example2 ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Mutasi</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Mutasi</th>
                                <th>Unit Kerja Lama</th>
                                <th>Unit Kerja Baru</th>
                                <th><i class="fas fa-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody>

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