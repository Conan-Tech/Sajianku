<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Menus</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center">
        <h6 class="m-0 text-custom">Menu List</h6>
        <button class="btn btn-custom ms-auto px-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Add Menu</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Kode Menu</th>
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
                                echo '<h6><span class="badge bg-danger py-2 px-2">Tidak Tersedia</span></h6>';
                            } else {
                                echo '<h6><span class="badge bg-success py-2 px-2"> Tersedia</span></h6>';
                            }
                            ?>

                        <td class="text-center">
                            <button type="button" class="btn btn-custom btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" data-id="<?= $menu['Id_Menu'] ?>"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-success btn-edit" data-bs-toggle="modal" data-bs-target="#modalUpdate" data-id="<?= $menu['Id_Menu'] ?>"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#modalHapus" data-href="/admin/delete-menu/<?= $menu['Id_Menu'] ?>"><i class="far fa-trash-alt"></i></button>
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

<!-- Modal tambah -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
            </div>
            <form action="/admin/save-menu" method="POST" enctype="multipart/form-data" class="tambah-menu">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="kode" class="col-sm-3 col-form-label">Kode Menu</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tkode" name="kode">
                            <div class="invalid-feedback error-kodemenu">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namamenu" class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tnamamenu" name="namamenu">
                            <div class="invalid-feedback error-menu">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tharga" name="harga">
                            <div class="invalid-feedback error-harga">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-4">
                            <select class="form-select" name="kategori" id="tkategori">
                                <option selected>--Pilih Kategori--</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Pelayan</option>
                            </select>
                            <div class="invalid-feedback error-kategori">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-3 col-form-label">Upload Menu</label>
                        <div class="col-sm-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="sampul" name="sampul">
                                <label class="cutom-file-label" for="customFile"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-custom">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="dkategori" name="kategori" readonly>
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

<!-- Modal Update -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
            </div>
            <form action="/update-menu" method="post">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="kodemenu" class="col-sm-3 col-form-label">Kode Menu</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="ukodemenu" name="kodemenu" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namamenu" class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="unamamenu" name="namamenu">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="uharga" name="harga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-4">
                            <select class="form-select" name="kategori" id="ukategori">
                                <option selected>--Pilih kategori--</option>
                                <option value="Makanan">makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="Submit" class="btn btn-custom">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>
<?php $this->section('script') ?>

<script>
    $(document).ready(function() {
                // insert 
                $('.tambah-menu').submit(function(e) {
                    e.preventDefault();

                    $.ajax({
                        type: "post",
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            if (response.error) {
                                if (response.error.kodemenu) {
                                    $('#tkode').addClass('is-invalid');
                                    $('.error-kode').html(response.error.kodemenu);
                                } else {
                                    $('#tkode').removeClass('is-invalid');
                                    $('.error-kode').html('');
                                }

                                if (response.error.namamenu) {
                                    $('#tnamamenu').addClass('is-invalid');
                                    $('.error-namamenu').html(response.error.namamenu);
                                } else {
                                    $('#tnamamenu').removeClass('is-invalid');
                                    $('.error-namamenu').html('');
                                }

                                if (response.error.harga) {
                                    $('#tharga').addClass('is-invalid');
                                    $('.error-harga').html(response.error.harga);
                                } else {
                                    $('#tharga').removeClass('is-invalid');
                                    $('.error-harga').html('');
                                }

                                if (response.error.kategori || $('#tkategori').val() == "--Pilih Kategori--") {
                                    $('#tkategori').addClass('is-invalid');
                                    $('.error-kategori').html(response.error.kategori);
                                } else {
                                    $('#tkategori').removeClass('is-invalid');
                                    $('.error-kategori').html('');
                                }
                            } else if (response.success) {
                                location.reload();
                            }
                        }
                    });
                    return false;
                });

               
               //update
                $(".btn-edit").on("click", function() {
                const id = $(this).data('id');

                $("form").attr("action", "/admin/update-menu/" + id);

                $.ajax({
                    url: "/MenuAdmin/getDataMenus",
                    data: {
                        id: id,
                    },
                    method: "POST",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $('#ukodemenu').val(data.Id_Menu);
                        $('#unamamenu').val(data.Nama_Menu);
                        $('#uharga').val(data.Harga);
                        $('#ukategoti').val(data.kateori);
                    },

                });
            });
                //detail
                $(".btn-detail").on("click", function() {
                    const id = $(this).data('id');

                    $.ajax({
                        url: "/MenuAdmin/getDataMenus",
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
                            $('#dkategori').html(data.Id_Kategori);
                                 if (data.Id_Kategori == 'KT-001') {
                                $('#dkategori').html('Makanan')
                            } else {
                                $('#dkategori').html('Minuman')
                            }

                            $('#dstatus').html(data.Status_Ketersediaan);
                            if (data.Status_Ketersediaan == 0) {
                                $('#dstatus').html('<span class="badge bg-danger py-2 px-2">Tidak Tersedia</span>')
                            } else {
                                $('#dstatus').html('<span class="badge bg-success py-2 px-2">Tersedia</span>')

                            }
                        },

                    });
                });

                 //delete
                $("#modalHapus").on("show.bs.modal", function(e) {
                $('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
            });
        });
</script>
<?= $this->endSection(); ?>