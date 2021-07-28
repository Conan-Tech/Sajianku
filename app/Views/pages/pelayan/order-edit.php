<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<?php
$request = \Config\Services::request();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>

<!-- Main Content -->
<div class="page-order">
    <div class="content-heading">
        <h5>Order</h5>
    </div>

    <!-- Form -->
    <div class="row">
        <div class="col-12">
            <form action="" id="msform">
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
                                                    <img src="<?= base_url('Assets') ?>/images/spagethi.png" class="card-img-top w-50 py-3">
                                                </div>
                                                <div class="card-body menu-body">
                                                    <h5 class="card-title"><?= $food['Nama_Menu'] ?></h5>
                                                    <p class="card-text text-color">Rp. <?= $food['Harga'] ?></p>
                                                    <button type="button" class="btn btn-color btn-add-cart rounded-circle text-white" data-id=<?= $request->uri->getSegment(3) ?> data-menu="<?= $food['Id_Menu'] ?>"><i class="fas fa-plus"></i></button>
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
    <!-- Form -->
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

            <?php foreach ($orders as $order) : ?>

                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="cancel-btn">
                            <button type="button" class="btn btn-remove-item text-danger">
                                <i class="far fa-times-circle fa-lg"></i>
                            </button>
                        </div>
                        <div class="row h-100">
                            <div class="col-3">
                                <img class="px-2 py-2" src="<?= base_url('Assets') ?>/images/spagethi.png">
                            </div>
                            <div class="col-4 align-self-center ms-3 container-qty">
                                <h5><?= $order['Nama_Menu'] ?></h5>
                                <p><span class="text-custom">x&nbsp;</span><span class="qty">1</span></p>
                                <input type="hidden" id="qty" name="qty[]" value="1">
                                <div class="plus-minus-btn">
                                    <button type="button" class="btn btn-add-order">+</button>
                                    <button type="button" class="btn btn-outline text-custom btn-minus-order">-</button>
                                    <input type="hidden" id="id" name="id[]" value="<?= $order['Id_Menu'] ?>">
                                    <input type="hidden" id="total-price" name="total-price[]" value="<?= $order['Harga'] ?>">
                                    <input type="hidden" id="price" name="price" value="<?= $order['Harga'] ?>">
                                </div>
                            </div>
                            <div class="col-auto align-self-center ms-auto mt-3">
                                <p class="total-price mt-4" style="margin-right: 25px;">Rp. <?= $order['Harga'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

            <?php if (!empty($_SESSION['cart'])) { ?>

                <?php foreach ($carts as $cart) : ?>

                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="cancel-btn">
                                <button type="button" class="btn btn-remove-item text-danger" data-id="<?= $request->uri->getSegment(3) ?>" data-menu="<?= $cart['Id_Menu'] ?>">
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
                    <h5 class="fw-bold grand-total">Rp. <?= $order['Total_Harga'] ?></h5>
                    <input type="hidden" name="grand-total" id="grand-total" value="0">
                </div>
            </div>
            <button type="submit" class="btn btn-custom w-100">Checkout</button>
        </div>
    </div>
</form>
<?php $this->endSection(); ?>

<?php $this->section('script') ?>

<script>
    $('.btn-add-cart').click(function(e) {
        e.preventDefault;

        let id = $(this).data('id');
        let menu = $(this).data('menu');

        $.ajax({
            method: 'post',
            url: '/pelayan/add-cart',
            data: {
                id: id,
                menu: menu
            },
            success: function(response) {
                window.location = "/pelayan/order-edit/" + id;
            }
        });
    });

    $('.btn-remove-item').click(function(e) {
        e.preventDefault;

        let id = $(this).data('id');
        let menu = $(this).data('menu');

        $.ajax({
            method: 'post',
            url: '/pelayan/remove-item',
            data: {
                id: id,
                menu: menu
            },
            success: function(response) {
                window.location = "/pelayan/order-edit/" + id;
            }
        });
    });
</script>

<?php $this->endSection(); ?>