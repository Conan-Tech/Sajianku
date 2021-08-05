<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Categories</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center">
        <h6 class="m-0 text-custom">List of Categories</h6>
        <button class="btn btn-custom ms-auto px-4 btn-tambah" data-bs-toggle="modal" data-bs-target="#modalAdd">Add Category</button>
    </div>
    <div class="card-body">
        <table id="table-category" class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">ID Kategori</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($categories as $category) :
                ?>

                    <tr>
                        <td scope="row" class="text-center"><?= $no++ ?></td>
                        <td><?= $category['Id_Kategori'] ?></td>
                        <td><?= $category['Nama_Kategori'] ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-edit" data-bs-toggle="modal" data-bs-target="#modalUbah" data-id="<?= $category['Id_Kategori'] ?>"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" data-href="/admin/delete-category/<?= $category['Id_Kategori'] ?>"><i class="far fa-trash-alt"></i></button>
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

<!-- Modal Tambah -->

<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
            </div>
            <form class="tambah-kategori" action="/admin/save-category" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Id Kategori</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tkategori" name="kategori" value="<?= $id ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namakategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tnamakategori" name="namakategori">
                            <div class="invalid-feedback errorKategori">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-custom btn-simpan">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Ubah -->

<div class="modal fade" id="modalUbah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
            </div>
            <form action="/update-category" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Id Kategori</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="ukategori" name="kategori" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="namakategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="unamakategori" name="namakategori">
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
        $('.tambah-kategori').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.error) {
                        if (response.error.namakategori) {
                            $('#tnamakategori').addClass('is-invalid');
                            $('.errorKategori').html(response.error.namakategori);
                        } else {
                            $('#tnamakategori').removeClass('is-invalid');
                            $('.errorKategori').html('');
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

            $("form").attr("action", "/admin/update-category/" + id);

            $.ajax({
                url: "/admin/get-category",
                data: {
                    id: id,
                },
                method: "POST",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    $('#ukategori').val(data.Id_Kategori);
                    $('#unamakategori').val(data.Nama_Kategori);
                },

            });
        });

        //delete
        $("#modalHapus").on("show.bs.modal", function(e) {
            $('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
        });

        $(document).ready(function() {
            $('#table-category').DataTable();
        });
    });
</script>

<?php $this->endSection() ?>