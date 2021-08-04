<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h1>Manage Payment</h1>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center py-3">
        <h6 class="m-0 text-custom">List Of New Orders</h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Id Order</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">No Meja</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payment as $p) : ?>
                    <tr>
                        <td scope="row" class="text-center">1</td>
                        <td><?= $p['Id_Order']; ?></td>
                        <td><?= $p['Nama_Pemesan']; ?></td>
                        <td class="text-center"><?= $p['No_Meja']; ?></td>
                        <td>
                            <h6>
                                <span class="badge btn-color py-2 px-2 w-100">Waiting Payment</span>
                            </h6>
                        </td>
                        <td class="text-center">
                            <a href="/kasir/process-payment/<?= $p['Id_Order']; ?>" class="btn btn-success"><i class="fas fa-coins"></i></a>
                            <a href="/kasir/print/<?= $p['Id_Order']; ?>" class="btn btn-custom" target="_blank"><i class="fas fa-print"></i></a>
                            <!-- <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalDetail"><i class="far fa-eye"></i></button> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>