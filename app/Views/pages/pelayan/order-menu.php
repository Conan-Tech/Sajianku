<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<?php

$request = \Config\Services::request();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['harga'] = array();
    $_SESSION['total_harga'] = 0;
}

?>

<!-- Main Content -->
<div class="page-order">
    <div class="content-heading">
        <h5>Order</h5>
    </div>

    <?php if (isset($_SESSION['message'])) : ?>

        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php endif; ?>

    <!-- Multi Step Form -->
    <div class="row">
        <div class="col-12">
            <form action="" id="msform">
                <!-- Progressbar -->
                <ul class="progressbar">
                    <li class="active">Select Table</li>
                    <li class="active">Select Menu</li>
                </ul>
                <!-- fieldsets -->
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
                                                    <img src="<?= base_url('Assets') ?>/images/<?= $food['Photo'] ?>" class="card-img-top w-50 py-3">
                                                </div>
                                                <div class="card-body menu-body">
                                                    <h5 class="card-title"><?= $food['Nama_Menu'] ?></h5>
                                                    <p class="card-text text-color">Rp. <?= $food['Harga'] ?></p>
                                                    <button type="button" class="btn btn-color btn-add-cart rounded-circle text-white" data-meja="<?= $request->uri->getSegment(3) ?>" data-pemesan="<?= $request->uri->getSegment(4) ?>" data-menu="<?= $food['Id_Menu'] ?>" data-harga="<?= $food['Harga'] ?>"><i class="fas fa-plus"></i></button>
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
                                                    <a href="#" class="btn btn-colorbtn-add-cart rounded-circle text-white" data-meja="<?= $request->uri->getSegment(3) ?>" data-pemesan="<?= $request->uri->getSegment(4) ?>" data-menu="<?= $food['Id_Menu'] ?>" data-harga="<?= $food['Harga'] ?>"><i class="fas fa-plus"></i></a>
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

<!-- Cart -->
<form action="/pelayan/save-order" method="POST">
    <div class="offcanvas offcanvas-end shadow" data-bs-scroll="true" data-bs-backdrop="false" id="cart">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title " id="offcanvasScrollingLabel">Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <?php if (!empty($_SESSION['cart'])) { ?>

                <?php foreach ($carts as $cart) : ?>

                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="cancel-btn">
                                <button type="button" class="btn btn-remove-item text-danger" data-meja="<?= $request->uri->getSegment(3) ?>" data-pemesan="<?= $request->uri->getSegment(4) ?>" data-menu="<?= $cart['Id_Menu'] ?>" data-harga="<?= $cart['Harga'] ?>">
                                    <i class="far fa-times-circle fa-lg"></i>
                                </button>
                            </div>
                            <div class="row h-100">
                                <div class="col-3">
                                    <img class="px-2 py-2" src="<?= base_url('Assets') ?>/images/spagethi.png">
                                </div>
                                <div class="col-4 align-self-center ms-3 container-qty">
                                    <h5><?= $cart['Nama_Menu'] ?></h5>
                                    <p><span class="text-custom">x&nbsp;</span><span class="qty">1</span></p>
                                    <input type="hidden" id="qty" name="qty[]" value="1">
                                    <div class="plus-minus-btn">
                                        <button type="button" class="btn btn-add-order">+</button>
                                        <button type="button" class="btn btn-outline text-custom btn-minus-order">-</button>
                                        <input type="hidden" id="id" name="id[]" value="<?= $cart['Id_Menu'] ?>">
                                        <input type="hidden" id="total-price" name="total-price[]" value="<?= $cart['Harga'] ?>">
                                        <input type="hidden" id="price" name="price" value="<?= $cart['Harga'] ?>">
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ms-auto mt-3">
                                    <p class="total-price mt-4" style="margin-right: 25px;">Rp. <?= $cart['Harga'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            <?php } else { ?>

                <div class="alert alert-warning text-center" role="alert">
                    No Item in Cart
                </div>

            <?php } ?>

        </div>
        <div class="offcanvas-footer">
            <div class="mb-3">
                <textarea class="form-control" id="catatan" name="catatan" rows="4" placeholder="Catatan..."></textarea>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <h5 class="fw-bold">Total Harga</h5>
                </div>
                <div class="col-md-6 text-end">
                    <h5 class="fw-bold grand-total">Rp. <?= (isset($_SESSION['total_harga']) ?  $_SESSION['total_harga'] : '0') ?></h5>
                    <input type="hidden" name="grand-total" id="grand-total" value="0">
                </div>
            </div>
            <button type="submit" class="btn btn-custom w-100">Checkout</button>
        </div>
    </div>
</form>
<?php $this->endSection(); ?>

<?php $this->section('script'); ?>

<script>
    $('.btn-add-cart').click(function(e) {
        e.preventDefault;

        let meja = $(this).data('meja');
        let pemesan = $(this).data('pemesan');
        let menu = $(this).data('menu');
        let harga = $(this).data('harga');

        $.ajax({
            method: 'post',
            url: '/pelayan/add-cart',
            data: {
                meja: meja,
                pemesan: pemesan,
                menu: menu,
                harga: harga
            },
            success: function(response) {
                console.log(response)
                window.location = "/pelayan/order-menu/" + meja + "/" + pemesan;
            }
        });
    });

    $('.btn-remove-item').click(function(e) {
        e.preventDefault;

        let meja = $(this).data('meja');
        let pemesan = $(this).data('pemesan');
        let menu = $(this).data('menu');
        let harga = $(this).data('harga');

        $.ajax({
            method: 'post',
            url: '/pelayan/remove-item',
            data: {
                meja: meja,
                pemesan: pemesan,
                menu: menu,
                harga: harga
            },
            success: function(response) {
                console.log(response);
                window.location = "/pelayan/order-menu/" + meja + "/" + pemesan;
            }
        });
    });

    $('.btn-add-order').click(function(e) {
        e.preventDefault;

        let price = $(this).parent().parent().find('#price').val();
        let qty = $(this).parent().parent().find('.qty');
        let iqty = $(this).parent().parent().find('#qty');
        let total = $(this).parent().parent().parent().find('.total-price');
        let itotal = $(this).parent().parent().find('#total-price');

        iqty.val(Number(iqty.val()) + 1);
        qty.html(Number(qty.html()) + 1);
        total.html("Rp " + Number(price) * Number(qty.html()));
        itotal.val(Number(price) * Number(qty.html()));

        let grand_total = 0.0;
        $('.offcanvas-body > .card').each(function() {
            let amount = Number($(this).find('#total-price').val());
            grand_total += amount
        });

        $('.grand-total').html("Rp. " + grand_total);
        $('#grand-total').val(grand_total);

        // $.ajax({
        //     method: 'post',
        //     url: '/pelayan/set-session-qty',
        //     data: {
        //         qty: qty
        //     },
        //     success: function(response) {
        //         console.log(response);
        //     }
        // });
    });

    $('.btn-minus-order').click(function(e) {

        let price = $(this).parent().parent().find('#price').val();
        let qty = $(this).parent().parent().find('.qty');
        let iqty = $(this).parent().parent().find('#qty');
        let total = $(this).parent().parent().parent().find('.total-price');
        let itotal = $(this).parent().parent().find('#total-price')

        iqty.val(Number(iqty.val()) - 1);
        qty.html(Number(qty.html()) - 1);
        total.html("Rp " + Number(price) * Number(qty.html()));
        itotal.val(Number(price) * Number(qty.html()));

        let grand_total = 0.0;
        $('.offcanvas-body > .card').each(function() {
            let amount = Number($(this).find('#total-price').val());
            grand_total += amount
        });

        $('.grand-total').html("Rp. " + grand_total);
        $('#grand-total').val(grand_total);


        // $.ajax({
        //     method: 'post',
        //     url: '/pelayan/set-session-qty',
        //     data: {
        //         qty: qty
        //     },
        //     success: function(response) {
        //         console.log(response);
        //     }
        // });
    });
</script>

<?php $this->endSection(); ?>