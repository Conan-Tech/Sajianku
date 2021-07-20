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
                                                Makanan
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
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/spagethi.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-5 mx-3 shadow">
                                            <div class="img-wrapper text-center">
                                                <img src="../Assets/images/ice tea.png" class="card-img-top w-50 py-3">
                                            </div>
                                            <div class="card-body menu-body">
                                                <h5 class="card-title">Spagethi</h5>
                                                <p class="card-text text-color">Rp. 15.000</p>
                                                <a href="#" class="btn btn-color btn-add-cart rounded-circle text-white"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
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