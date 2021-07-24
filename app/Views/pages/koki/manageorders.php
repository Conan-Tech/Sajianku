<?= $this->extend('layout/koki'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    Employees
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
                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalDetail"><i class="far fa-eye"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>OR-0002</td>
                    <td>Gilang Romansyah</td>
                    <td>02</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
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
                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">4</td>
                    <td>OR-0004</td>
                    <td>Siska Khol</td>
                    <td>04</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">5</td>
                    <td>OR-0005</td>
                    <td>Nur Eka</td>
                    <td>5</td>
                    <td>
                        <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
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
                        <button type="button" class="btn btn-success"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Id Order</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": OR-0001">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Atas Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": Idris Merdefi">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">No Meja</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Total Order</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 8">
                                </div>
                            </div>
                            <textarea class="form-control text-color form-color" id="catatan" name="catatan" rows="9" placeholder="Catatan..."></textarea>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-detail shadow mb-3 w-100">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-3">
                                                <img class="px-2 py-2" src="../Assets/images/spagethi.png">
                                            </div>
                                            <div class="col-5 align-self-center ms-3 mt-2">
                                                <h5>Spagethi</h5>
                                                <p><span class="text-custom">x&nbsp;</span>1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>