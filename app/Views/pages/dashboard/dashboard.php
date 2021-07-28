<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Dashboard</h5>
</div>
<div class="jumbotron card">
    <div class="card-body">
        <div class="title">
            Hello <?= session()->get('nama') ?>,
        </div>
        <div class="sub-title">
            <?= session()->get('jabatan') ?>
        </div>
    </div>
</div>

<?php if (session()->get('jabatan') == 'Pelayan') : ?>

    <div class="card manage-order-wrapper">
        <div class="card manage-order">
            <div class="info-order">
                <div class="badge bg-badge"><?= $complete ?></div>
                <span class="title">Complete Orders</span>
                <a href="/pelayan/manageorder" class="btn-link ms-auto">Manage Orders &nbsp; <i class="far fa-arrow-alt-circle-right fa-lg"></i></a>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php if (session()->get('jabatan') == 'Koki') : ?>

    <div class="card manage-order-wrapper">
        <div class="card manage-order">
            <div class="info-order">
                <div class="badge bg-badge"><?= $new ?></div>
                <span class="title">New Orders</span>
                <a href="/koki/manageorder" class="btn-link ms-auto">Manage Orders &nbsp; <i class="far fa-arrow-alt-circle-right fa-lg"></i></a>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php if (session()->get('jabatan') == 'Kasir') : ?>

    <div class="card manage-order-wrapper">
        <div class="card manage-order">
            <div class="info-order">
                <div class="badge bg-badge"><?= $transaction ?></div>
                <span class="title">Pending Transaction</span>
                <a href="#" class="btn-link ms-auto">Manage Transactions &nbsp; <i class="far fa-arrow-alt-circle-right fa-lg"></i></a>
            </div>
        </div>
    </div>

<?php endif; ?>

<div class="row info mt-5">
    <!-- Card Total Menus -->
    <div class="col-md-4 mb-4">
        <div class="card border-left-info shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-utensils fa-2x fa-color"></i>
                    </div>
                    <div class="col mr-2">
                        <div class="title"><?= $menu ?></div>
                        <div class="sub-title mb-1">Total Menus</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Total Orders -->
    <div class="col-md-4 mb-4">
        <div class="card border-left-info shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x fa-color"></i>
                    </div>
                    <div class="col mr-2">
                        <div class="title"><?= $order ?></div>
                        <div class="sub-title mb-1">Total Orders</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Total Revenue -->
    <div class="col-md-4 mb-4">
        <div class="card border-left-info shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-coins fa-2x fa-color"></i>
                    </div>
                    <div class="col mr-2">
                        <div class="title">Rp <?= rupiah($revenue['Total_Harga']) ?></div>
                        <div class="sub-title mb-1">Total Revenue</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>