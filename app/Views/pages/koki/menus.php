<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Menus</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center py-3">
        <h6 class="m-0 text-custom">List Of Menu</h6>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Kode Makanan</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($menus as $menu) :
                ?>

                    <tr>
                        <td scope="row" class="text-center"><?= $no++; ?></td>
                        <td><?= $menu['Id_Menu']; ?></td>
                        <td><?= $menu['Nama_Menu']; ?></td>
                        <td><?= $menu['Harga']; ?></td>
                        <td class="text-center">

                            <?php
                            if ($menu['Status_Ketersediaan'] == 0) {
                                echo '<h6><span class="badge bg-danger py-2 px-2 w-100">Tidak Tersedia</span></h6>';
                            } else {
                                echo '<h6><span class="badge bg-success py-2 px-2 w-100"> Tersedia</span></h6>';
                            }
                            ?>

                        </td>
                        <td class="text-center">

                            <?php
                            if ($menu['Status_Ketersediaan'] == 0) {
                            ?>
                                <a href="/koki/updateAvailableMenu/<?= $menu['Id_Menu'] ?>" button type="button" class="btn btn-success"><i class="fas fa-check"></i></a>
                            <?php
                            } else {
                            ?>
                                <a href="/koki/updateNotAvailableMenu/<?= $menu['Id_Menu'] ?>" button type="button" class="btn btn-danger px-3"><i class="fas fa-times"></i></a>
                            <?php
                            }
                            ?>

                            <button type="button" class="btn btn-custom btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" data-id="<?= $menu['Id_Menu'] ?>"><i class="far fa-eye"></i></button>
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
                <h5 class="modal-title" id="exampleModalLabel">Detail Menu</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="kode" class="col-sm-3 col-form-label">Kode Makanan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="dkode" name="kode" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="menu" class="col-sm-3 col-form-label">Nama Menu</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="dmenu" name="menu" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="dharga" name="harga" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-4">
                        <h6 id="dstatus"><span class="badge bg-success py-2 px-2"></span></h6>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
            url: "/koki/get-menus",
            data: {
                id: id,
            },
            method: "POST",
            dataType: "json",
            success: function(data) {
                console.log(data);
                $('#dkode').val(data.Id_Menu);
                $('#dmenu').val(data.Nama_Menu);
                $('#dharga').val(data.Harga);
                $('#dstatus').html(data.Status_Ketersediaan);
                if (data.Status_Ketersediaan == 0) {
                    $('#dstatus').html('<span class="badge bg-danger py-2 px-2">Tidak Tersedia</span>')
                } else {
                    $('#dstatus').html('<span class="badge bg-success py-2 px-2">Tersedia</span>')

                }
            },

        });
    });
</script>

<?= $this->endSection(); ?>