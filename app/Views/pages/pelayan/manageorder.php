<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Manage Order</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center py-3">
        <h6 class="m-0 text-custom">List Of New Orders</h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Id Order</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">No Meja</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td>OR-0001</td>
                    <td>Idris Mardefi</td>
                    <td>01</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <a href="order-edit.html" class="btn btn-success">
                            <i class="far fa-edit"></i>
                        </a>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalDetail">
                            <i class="far fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>OR-0002</td>
                    <td>Gilang Romansyah</td>
                    <td>02</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Ready Served</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success">
                            <i class="far fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalAdd">
                            <i class="far fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">3</td>
                    <td>OR-0003</td>
                    <td>Fahriansyah</td>
                    <td>03</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success">
                            <i class="far fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalAdd">
                            <i class="far fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">4</td>
                    <td>OR-0004</td>
                    <td>Siska Khol</td>
                    <td>04</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Ready Served</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success">
                            <i class="far fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalAdd">
                            <i class="far fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">5</td>
                    <td>OR-0005</td>
                    <td>Nur Eka</td>
                    <td>05</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success">
                            <i class="far fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalAdd">
                            <i class="far fa-eye"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">6</td>
                    <td>OR-0006</td>
                    <td>Ramdhani</td>
                    <td>06</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success">
                            <i class="far fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalAdd">
                            <i class="far fa-eye"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>