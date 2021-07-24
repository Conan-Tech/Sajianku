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

                <?php
                $no = 1;
                foreach ($tables as $table) :
                ?>

                    <tr>
                        <td scope="row" class="text-center"><?= $no++ ?></td>
                        <td><?= $table['No_Meja'] ?></td>
                        <td><?= $table['Kapasitas'] ?> Orang</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-edit" data-bs-toggle="modal" data-bs-target="#modalUpdate" data-id="<?= $table['No_Meja'] ?>"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" data-href="/delete-table/<?= $table['No_Meja'] ?>"><i class="far fa-trash-alt"></i></button>
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

<?= $this->section('modal') ?>

<!-- Modal tambah -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Table</h5>
            </div>
            <form action="/Table/save" method="POST" class="tambah-table">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="meja" class="col-sm-3 col-form-label">No Meja</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tmeja" name="meja">
                            <div class="invalid-feedback error-meja">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                        <div class="col-sm-4">
                            <select class="form-select" name="kapasitas" id="tkapasitas">
                                <option selected>--Pilih Kapasistas--</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                            </select>
                            <div class="invalid-feedback error-kapasitas">
                                You must agree before submitting.
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

<!-- Modal Ubah -->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Table</h5>
            </div>
            <form action="/update-table" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="meja" class="col-sm-3 col-form-label">No Meja</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="umeja" name="meja" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kapasitas" class="col-sm-3 col-form-label">Kapasitas</label>
                        <div class="col-sm-4">
                            <select class="form-select" name="kapasitas" id="ukapasitas">
                                <option selected>--Pilih Kapasistas--</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-custom">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content py-3">
            <div class="modal-body row text-center">
                <div class="col-12 mb-4">
                    <span class="material-icons alert-icon">
                        error_outline
                    </span>
                    <h3 class="text-alert mt-3">Warning</h3>
                    <p class="sub-text-alert">you won't to be able to revert this</p>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-secondary btn-alert me-3" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-custom btn-alert btn-delete">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?php $this->section('script') ?>

<script>
    $(document).ready(function() {
        // insert 
        $('.tambah-table').submit(function(e) {
            e.preventDefault();
            console.log($(this).serialize())

            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.error) {
                        if (response.error.meja) {
                            $('#tmeja').addClass('is-invalid');
                            $('.error-meja').html(response.error.meja);
                        } else {
                            $('#meja').removeClass('is-invalid');
                            $('.error-meja').html('');
                        }

                        if (response.error.kapasitas) {
                            $('#tkapasitas').addClass('is-invalid');
                            $('.error-kapasitas').html(response.error.kapasitas);
                        } else {
                            $('#tkapasitas').removeClass('is-invalid');
                            $('.error-kapasitas').html('');
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

            $("form").attr("action", "/update-table/" + id);

            $.ajax({
                url: "Table/getDataTable",
                data: {
                    id: id,
                },
                method: "POST",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    $('#umeja').val(data.No_Meja);
                    $('#ukapasitas').val(data.Kapasistas);
                },

            });
        });

        //delete
        $("#modalHapus").on("show.bs.modal", function(e) {
            $('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>

<?php $this->endSection() ?>