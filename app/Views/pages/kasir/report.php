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
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td>01/06/2021</td>
                    <td>238</td>
                    <td>Rp. 5.000.000</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>