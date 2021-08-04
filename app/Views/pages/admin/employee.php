<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Employees</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center">
        <h6 class="m-0 text-custom">List Of Employee</h6>
        <button class="btn btn-custom ms-auto px-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Add Employee</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Id Pegawai</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($employees as $employee) :
                ?>

                    <tr>
                        <td scope="row" class="text-center"><?= $no++; ?></td>
                        <td><?= $employee['Id_Pegawai']; ?></td>
                        <td><?= $employee['Nama_Pegawai']; ?></td>
                        <td><?= $employee['Jabatan']; ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-custom btn-detail" data-bs-toggle="modal" data-bs-target="#modalDetail" data-id="<?= $employee['Id_Pegawai'] ?>"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-success btn-edit" data-bs-toggle="modal" data-bs-target="#modalUpdate" data-id="<?= $employee['Id_Pegawai'] ?>"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus" data-href="/admin/delete-employee/<?= $employee['Id_Pegawai'] ?>"><i class="far fa-trash-alt"></i></button>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
            </div>
            <form action="/admin/save-employee" method="post" class="tambah-employee">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-3 col-form-label">Id Pegawai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tid" name="id">
                            <div class="invalid-feedback error-id">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tnama" name="nama">
                            <div class="invalid-feedback error-nama">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-4">
                            <select class="form-select" name="jabatan" id="tjabatan">
                                <option selected>--Pilih Jabatan--</option>
                                <option value="Admin">Admin</option>
                                <option value="Pelayan">Pelayan</option>
                                <option value="Koki">Koki</option>
                                <option value="Kasir">Kasir</option>
                            </select>
                            <div class="invalid-feedback error-jabatan">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tusername" name="username">
                            <div class="invalid-feedback error-user">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tpassword" name="password">
                            <div class="invalid-feedback error-pass">
                                You must agree before submitting.
                            </div>
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

<!-- Modal Detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Employee</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="id" class="col-sm-3 col-form-label">Id Pegawai</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="did" name="id" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="dnama" name="nama" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="djabatan" name="jabatan" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="dusername" name="username" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="dpassword" name="password" readonly>
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
            <form action="/update-employee" method="post">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-3 col-form-label">Id Pegawai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="uid" name="id" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Pegawai</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="unama" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-4">
                            <select class="form-select" name="jabatan" id="ujabatan">
                                <option selected>--Pilih Jabatan--</option>
                                <option value="Admin">Admin</option>
                                <option value="Pelayan">Pelayan</option>
                                <option value="Koki">Koki</option>
                                <option value="Kasir">Kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="uusername" name="username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="upassword" name="password">
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

    <?= $this->endSection(); ?>

    <?php $this->section('script') ?>

    <script>
        $(document).ready(function() {
            // insert
            $('.tambah-employee').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "post",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.error) {
                            if (response.error.idPegawai) {
                                $('#tid').addClass('is-invalid');
                                $('.error-id').html(response.error.idPegawai);
                            } else {
                                $('#tid').removeClass('is-invalid');
                                $('.error-id').html('');
                            }

                            if (response.error.nama) {
                                $('#tnama').addClass('is-invalid');
                                $('.error-nama').html(response.error.nama);
                            } else {
                                $('#tnama').removeClass('is-invalid');
                                $('.error-nama').html('');
                            }

                            if (response.error.jabatan || $('#tjabatan').val() == "--Pilih Jabatan--") {
                                $('#tjabatan').addClass('is-invalid');
                                $('.error-jabatan').html(response.error.jabatan);
                            } else {
                                $('#tjabatan').removeClass('is-invalid');
                                $('.error-jabatan').html('');
                            }

                            if (response.error.username) {
                                $('#tusername').addClass('is-invalid');
                                $('.error-user').html(response.error.username);
                            } else {
                                $('#tusername').removeClass('is-invalid');
                                $('.error-user').html('');
                            }

                            if (response.error.password) {
                                $('#tpassword').addClass('is-invalid');
                                $('.error-pass').html(response.error.password);
                            } else {
                                $('#tpassword').removeClass('is-invalid');
                                $('.error-pass').html('');
                            }
                        } else if (response.success) {
                            location.reload();
                        }
                    }
                });
                return false;
            });

            //detail
            $(".btn-detail").on("click", function() {
                const id = $(this).data('id');

                $("form").attr("action", "/admin/update-employee/" + id);

                $.ajax({
                    url: "/admin/get-employee",
                    data: {
                        id: id,
                    },
                    method: "POST",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $('#did').val(data.Id_Pegawai);
                        $('#dnama').val(data.Nama_Pegawai);
                        $('#djabatan').val(data.Jabatan);
                        $('#dusername').val(data.Username);
                        $('#dpassword').val(data.Password);
                    },

                });
            });

            //update
            $(".btn-edit").on("click", function() {
                const id = $(this).data('id');

                $("form").attr("action", "/admin/update-employee/" + id);

                $.ajax({
                    url: "/admin/get-employee",
                    data: {
                        id: id,
                    },
                    method: "POST",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $('#uid').val(data.Id_Pegawai);
                        $('#unama').val(data.Nama_Pegawai);
                        $('#ujabatan').val(data.Jabatan);
                        $('#uusername').val(data.Username);
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