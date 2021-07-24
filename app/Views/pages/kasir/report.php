<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Report</h5>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-1 mt-1">Date :</label>
        <div class="col-sm-2">
            <input type="date" class="form-control form-control-sm" id="inputPassword">
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control form-control-sm" id="inputPassword">
        </div>
        <div class="col-sm-2"><button class="btn btn-custom">Submit</button></div>
        <div class="col-sm-auto ms-auto">
            <button type="button" class="btn btn-success ms-auto"><i class="fas fa-print"></i></button>
        </div>
    </div>
</div>

<div class=" card">
    <div class="card-header d-flex flex-row align-items-center py-3">
        <h6 class="m-0 text-custom">List Report</h6>
    </div>
    <div class="card-body">
        <h2 class="d-flex justify-content-end fs-5 py-2 text-color">Total:Rp.124.480.200</h2>
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Order</th>
                    <th scope="col">Pemasukan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($orders as $order) :
                ?>

                    <tr>
                        <td scope="row" class="text-center"><?= $no++; ?></td>
                        <td><?= $order['Tanggal_Order']; ?></td>
                        <td>255</td>
                        <td><?= $order['Total_Harga']; ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalDetail" data-id=""><i class="far fa-eye"></i></button>
                        </td>
                    </tr>

                <?php
                endforeach;
                ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>

<!-- Modal Detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Report</h5>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header d-flex flex-row align-items-center py-3">
                            <h6 class="m-0 text-color">Table Detail</h6>
                        </div>
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">NO</th>
                                    <th scope="col">ID Order</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">No Meja</th>
                                    <th scope="col">Jumlah Order</th>
                                    <th scope="col">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row" class="text-center">1</td>
                                    <td>OR-0001</td>
                                    <td>Idris Merdefi</td>
                                    <td class="text-center">01</td>
                                    <td class="text-center">5</td>
                                    <td>Rp. 65.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>