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
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Available</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Booked</button>
                                <div class="row ms-auto justify-content-end">
                                    <label for="inputPasword" class="col-sm-5 col-form-label text-color text-capacity">Capacity</label>
                                    <div class="col-sm-5">
                                        <select class="form-select form-select-sm text-color" aria-label="Default select example">
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
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order" data-bs-toggle="modal" data-bs-target="#modalOrder">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn-order">
                                            <div class="card card-table shadow align-items-center py-4">
                                                <img src="../Assets/images/table.svg" class="card-img-top table-image">
                                                <span class="number">01</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="set2">
                    <div class="card py-4 px-4">
                        <div class="tabs-menu mb-5">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link" id="nav-food-tab" data-bs-toggle="tab" data-bs-target="#nav-food" type="button" role="tab" aria-controls="nav-food" aria-selected="true">
                                    <div class="card card-menu shadow py-4 px-2 active">
                                        <div class="card-body">
                                            <div class="wrapper-nav-tabs-img rounded-circle bg-white">
                                                <i class="fas fa-utensils fa-2x nav-tabs-img active"></i>
                                            </div>
                                            <h5 class="nav-tabs-title active">
                                                Makanan
                                            </h5>
                                            <i class="fas fa-arrow-alt-circle-right fa-2x nav-tabs-arrow active"></i>
                                        </div>
                                    </div>
                                </button>
                                <button class="nav-link" id="nav-drink-tab" data-bs-toggle="tab" data-bs-target="#nav-drink" type="button" role="tab" aria-controls="nav-drink" aria-selected="false">
                                    <div class="card card-menu shadow py-4 px-2">
                                        <div class="card-body">
                                            <div class="wrapper-nav-tabs-img rounded-circle bg-white">
                                                <i class="fas fa-utensils fa-2x nav-tabs-img"></i>
                                            </div>
                                            <h5 class="nav-tabs-title">
                                                Minuman
                                            </h5>
                                            <i class="fas fa-arrow-alt-circle-right fa-2x nav-tabs-arrow"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">
                                <div class="row">

                                    <?php foreach ($foods as $food) : ?>

                                        <div class="col-md-3">
                                            <div class="card mb-5 mx-3 shadow">
                                                <div class="img-wrapper text-center">
                                                    <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                                </div>
                                                <div class="card-body menu-body">
                                                    <h5 class="card-title"><?= $food['Nama_Menu'] ?></h5>
                                                    <p class="card-text text-color">Rp. <?= $food['Harga'] ?></p>
                                                    <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    endforeach;
                                    ?>

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">
                                <div class="row">

                                    <?php
                                    foreach ($drinks as $drink) :
                                    ?>

                                        <div class="col-md-3">
                                            <div class="card mb-5 mx-3 shadow">
                                                <div class="img-wrapper text-center">
                                                    <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                                </div>
                                                <div class="card-body menu-body">
                                                    <h5 class="card-title"><?= $drink['Nama_Menu'] ?></h5>
                                                    <p class="card-text text-color"><?= $drink['Harga'] ?></p>
                                                    <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
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
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom next">Next<i class="fas fa-angle-right ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>

<?php $this->section('script'); ?>

<script>
    $("#menu-toggle").on("click", function(e) {
        e.preventDefault;

        let wrap = $("#wrapper");

        $(wrap).toggleClass("toggled");
        if (wrap.hasClass("toggled")) {
            $("#menu-toggle").html("<i class='fas fa-chevron-left'></i>");
        } else {
            $("#menu-toggle").html("<i class='fas fa-chevron-right'></i>")
        }
    });

    let current_fs, next_fs, previous_fs;
    let left, opacity, scale;

    $(".next").click(function() {
        current_fs = $(".set1");
        next_fs = $(".set2");

        //activate next step on progressbar using the index of next_fs
        $(".progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity,
                    'position': 'relative'
                });
                $("#modalOrder").hide();
                $(".modal-backdrop").hide();
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });

    });
</script>

<?php $this->endSection(); ?>