<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Employees</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center">
        <h6 class="m-0 text-custom">List Of Employee</h6>
        <button class="btn btn-custom ms-auto px-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Add Employee</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Id Pegawai</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td>10226</td>
                    <td>San Dahago</td>
                    <td>Kasir</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>10227</td>
                    <td>Din Al Farobbi</td>
                    <td>Kasir</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>