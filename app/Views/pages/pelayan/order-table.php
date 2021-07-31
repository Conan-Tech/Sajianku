<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="page-order">
    <div class="content-heading">
        <h5>Order</h5>
    </div>

    <!-- Multi Step Form -->
    <div class="row">
        <div class="col-12">
            <form action="" id="msform">
                <!-- Progressbar -->
                <ul class="progressbar">
                    <li class="active">Select Table</li>
                    <li>Select Menu</li>
                </ul>
                <!-- fieldsets -->
                <fieldset class="set1">
                    <div class="card py-5 px-4">
                        <div class="tabs-table">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-available-tab" data-bs-toggle="tab" data-bs-target="#nav-available" type="button" role="tab" aria-controls="nav-available" aria-selected="true">Available</button>
                                <button class="nav-link" id="nav-booked-tab" data-bs-toggle="tab" data-bs-target="#nav-booked" type="button" role="tab" aria-controls="nav-booked" aria-selected="false">Booked</button>
                                <div class="row ms-auto justify-content-end">
                                    <label for="inputPasword" class="col-sm-5 col-form-label text-color text-capacity">Capacity</label>
                                    <div class="col-sm-5">
                                        <select class="form-select form-select-sm text-color" id="filter" aria-label="Default select example">
                                            <option selected>Select Capacity</option>
                                            <option value="2">2</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-available" role="tabpanel" aria-labelledby="nav-available-tab">
                                <div class="row mt-4 available-table">

                                    <?php
                                    foreach ($availableTable as $table) :
                                    ?>

                                        <div class="col-md-2">
                                            <button type="button" class="btn-order btn-table-order" data-bs-toggle="modal" data-bs-target="#modalOrder" data-id="<?= $table['No_Meja'] ?>">
                                                <div class="card card-table shadow align-items-center py-4">
                                                    <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                    <span class="number"><?= $table['No_Meja'] ?></span>
                                                </div>
                                            </button>
                                        </div>

                                    <?php
                                    endforeach;
                                    ?>

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-booked" role="tabpanel" aria-labelledby="nav-booked-tab">
                                <div class="row mt-4">

                                    <?php
                                    foreach ($bookedTable as $table) :
                                    ?>

                                        <div class="col-md-2">
                                            <button type="button" class="btn-order btn-table-order">
                                                <div class="card card-table shadow align-items-center py-4">
                                                    <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                    <span class="number"><?= $table['No_Meja'] ?></span>
                                                </div>
                                            </button>
                                        </div>

                                    <?php
                                    endforeach;
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- Multi Step Form -->
</div>

<?= $this->endSection(); ?>

<?php $this->section('modal') ?>

<!-- Modal -->
<div class="modal fade" id="modalOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order</h5>
            </div>
            <form action="/pelayan/order-menu/" method="post">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="meja" class="col-sm-4 col-form-label">No Meja</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="meja" name="meja" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Pemesan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-custom next">Next<i class="fas fa-angle-right ms-1"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>

<?php $this->section('script') ?>

<script>
    $('.btn-table-order').click(function(e) {
        e.preventDefault;

        let id = $(this).data('id');

        $('#meja').val(id);


        $('#nama').keyup(function() {
            let pemesan = $('#nama').val();
            $("form").attr("action", "/pelayan/order-menu/" + id + "/" + pemesan);
        })
    })

    $('#filter').change(function(e) {
        e.preventDefault;

        let kapasitas = $(this).val();

        $.ajax({
            method: 'post',
            url: '/pelayan/filter-meja',
            data: {
                kapasitas: kapasitas
            },
            dataType: "json",
            success: function(response) {
                console.log(response)

                let html = "";
                for (let i = 0; i < response.length; i++) {
                    html += '<div class="col-md-2">' +
                        '<button type="button" class="btn-order btn-table-order" data-bs-toggle="modal" data-bs-target="#modalOrder" data-id="' + response[i].No_Meja + '">' +
                        '<div class="card card-table shadow align-items-center py-4">' +
                        '<img src="../Assets/images/table.svg" class="card-img-top table-image">' +
                        '<span class="number">' + response[i].No_Meja + '</span>' +
                        '</div>' +
                        '</button>' +
                        '</div>'
                }
                $('.available-table').html(html);
            }
        });
    })
</script>

<?php $this->endSection(); ?>