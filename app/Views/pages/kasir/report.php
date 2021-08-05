<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Report</h5>
    <form action="/kasir/report" method="post">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-1 mt-1">Date :</label>
            <div class="col-sm-2">
                <input type="date" class="form-control form-control-sm" id="tgl1" name="tgl1">
            </div>
            <div class="col-sm-2">
                <input type="date" class="form-control form-control-sm" id="tgl2" name="tgl2">
            </div>
            <div class="col-sm-2"><input type="submit" name="cari" class="btn btn-custom" value="Cari"></input></div>
    </form>
    <div class="col-sm-auto ms-auto">
        <button type="button" class="btn btn-success ms-auto"><i class="fas fa-print"></i></button>
    </div>
</div>
</div>

<div class=" card">
    <div class="card-header d-flex flex-row align-items-center py-3">
        <h6 class="m-0 text-custom">List Report <?php if (isset($tgl1) && isset($tgl2)) : ?> (<?= $tgl1 ?> s/d <?= $tgl2 ?>) <?php endif; ?></h6>
    </div>

    <?php
    $orderModel = new \App\Models\OrderModel();
    ?>

    <div class="card-body">
        <h2 class="d-flex justify-content-end fs-5 py-2 text-color">Total : Rp<?= $orderModel->sumAll()['Total_Harga']; ?></h2>
        <table id="table-report" class="table table-bordered table-hover table-responsive">
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

                    <?php
                    $no = 1;
                    foreach ($orders as $order) :
                    ?>

                        <td scope="row" class="text-center"><?= $no++; ?></td>
                        <td><?= $order['Tanggal_Order']; ?></td>
                        <td><?= $orderModel->get_count($order['Tanggal_Order']); ?></td>
                        <td><?= $orderModel->sum_price($order['Tanggal_Order'])['Total_Harga']; ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-custom btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" data-id="<?= $order['Tanggal_Order']; ?>"><i class="far fa-eye"></i></button>
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
                <div class="row">
                    <div class="col-12">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Detail Report</b></h5>
                    </div>
                    <div class="col-12">
                        <p id="ddate"></p>
                    </div>
                </div>
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
                            <tbody id="tableDetail">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?php $this->section('script') ?>

<script>
    //detail
    $(".btn-detail").on("click", function() {
        const id = $(this).data('id');

        $.ajax({
            url: "/kasir/get-data-order",
            data: {
                id: id,
            },
            method: "POST",
            dataType: "json",
            success: function(data) {
                console.log(data);
                $('#ddate').html("Tanggal : " + data[0].Tanggal_Order);
                $('#tableDetail').empty();
                for (let i = 0; i < data.length; i++) {
                    $('#tableDetail').append('<tr>' +
                        '<td scope="row" class="text-center">' + (i + 1) + '</td>' +
                        '<td>' + data[i].Id_Order + '</td>' +
                        '<td>' + data[i].Nama_Pemesan + '</td>' +
                        '<td class="text-center">' + data[i].No_Meja + '</td>' +
                        '<td class="text-center">' + data[i].Qty + '</td>' +
                        '<td>' + data[i].Total_Harga + '</td>' +
                        '</tr>');
                }
            },

        });
    });

    $(document).ready(function() {
        $('#table-report').DataTable();
    });
</script>

<?= $this->endSection(); ?>