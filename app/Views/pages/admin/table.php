<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Tables</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center">
        <h6 class="m-0 text-custom">Table List</h6>
        <button class="btn btn-custom ms-auto px-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Add Table</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">No meja</th>
                    <th scope="col">Kapasistas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td>01</td>
                    <td>2 Orang</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>02</td>
                    <td>2 Orang</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">3</td>
                    <td>03</td>
                    <td>2 Orang</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">4</td>
                    <td>04</td>
                    <td>4 Orang</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">5</td>
                    <td>05</td>
                    <td>4 Orang</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">6</td>
                    <td>06</td>
                    <td>4 Orang</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>