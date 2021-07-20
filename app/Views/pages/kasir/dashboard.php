<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Dashboard</h5>
</div>
<div class="jumbotron card">
    <div class="card-body">
        <div class="title">
            Hello Din,
        </div>
        <div class="sub-title">
            Administrator
        </div>
    </div>
</div>
<div class="card manage-order-wrapper">
    <div class="card manage-order">
        <div class="info-order">
            <div class="badge bg-badge">5</div>
            <span class="title">Pending Transactions</span>
            <a href="" class="btn-link ms-auto">Manage Transactions &nbsp; <i class="far fa-arrow-alt-circle-right fa-lg"></i></a>
        </div>
    </div>
</div>
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
                        <div class="title">886</div>
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
                        <div class="title">886</div>
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
                        <div class="title">Rp 500.000</div>
                        <div class="sub-title mb-1">Total Revenue</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>