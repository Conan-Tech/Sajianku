<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Employees</h5>
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

                <?php
                $no = 1;
                foreach ($orders as $order) :
                ?>

                    <tr>
                        <td scope="row" class="text-center"><?= $no++ ?></td>
                        <td><?= $order['Id_Order'] ?></td>
                        <td><?= $order['Nama_Pemesan'] ?></td>
                        <td><?= $order['No_Meja'] ?></td>
                        <td>

                            <?php
                            if ($order['Status_Order'] == 0) :
                            ?>

                                <h6><span class="badge btn-color py-2 px-2 w-100">Waiting Cook</span></h6>

                            <?php
                            endif;
                            ?>

                        </td>
                        <td class="text-center">
                            <a href="/koki/updateReady/<?= $order['Id_Order'] ?>" class="btn btn-success"><i class="fas fa-check"></i></a>
                            <button type="button" class="btn btn-custom btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" data-id="<?= $order['Id_Order'] ?>"><i class="far fa-eye"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>

<?php $this->section('modal') ?>

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
                                    <input type="text" readonly class="form-control-plaintext" id="id" name="id">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Atas Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">No Meja</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Total Order</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="toder" name="toder">
                                </div>
                            </div>
                            <textarea class="form-control text-color form-color" id="catatan" name="catatan" rows="9" placeholder="Catatan..." readonly></textarea>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row order">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>

<?php $this->section('script') ?>
<script>
    //detail
    $(".btn-detail").on("click", function() {
        const id = $(this).data('id');

        $.ajax({
            url: "/koki/get-manageorder",
            data: {
                id: id,
            },
            method: "POST",
            dataType: "json",
            success: function(data) {
                console.log(data);
                $('#id').val(data[0].Id_Order);
                $('#nama').val(data[0].Nama_Pemesan);
                $('#nome').val(data[0].No_Meja);
                $('#catatan').val(data[0].Catatan);

                let html = "";
                let total = 0;
                for (let i = 0; i < data.length; i++) {
                    total += Number(data[i].Qty);
                    html += '<div class="col-md-6"> ' +
                        '<div class="card card-detail shadow mb-3 w-100">' +
                        '<div class="card-body">' +
                        '<div class="row h-100">' +
                        '<div class="col-3">' +
                        '<img class="px-2 py-2" src="<?= base_url('Assets') ?>/images/spagethi.png">' +
                        '</div>' +
                        '<div class="col-5 align-self-center ms-3 mt-2">' +
                        '<h5>' + data[i].Nama_Menu + '</h5>' +
                        '<p>' + '<span class="text-custom">' + 'x&nbsp;' + '</span>' + data[i].Qty + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                }
                $('.order').html(html);
                $('#toder').val(total);

            },

        });
    });
</script>
<?= $this->endSection(); ?>