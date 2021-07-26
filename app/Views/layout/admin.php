<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url("Assets") ?>/scss/main.css">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="page-container">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    SajianKu
                </div>
                <ul class="list-group list-group-flush">

                    <?php if (session()->get('jabatan') == 'Admin') : ?>

                        <a href="dashboard.html" class="list-group-item"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a>
                        <div class="sparator">Management</div>
                        <a href="/admin/employee" class="list-group-item "><i class="fas fa-users me-1"></i>Employees</a>
                        <a href="/admin/table" class="list-group-item "><i class="fas fa-th me-1"></i>Tables</a>
                        <a href="/admin/category" class="list-group-item active"><i class="fas fa-th-list me-1"></i>Categories</a>
                        <a href="/admin/menu" class="list-group-item"><i class="fas fa-utensils me-1"></i>Menus</a>
                        <a href="/logout" class="list-group-item btn-logout btn-custom"><i class="fas fa-sign-out-alt me-1"></i></i>Logout</a>

                    <?php endif; ?>

                    <?php if (session()->get('jabatan') == 'Pelayan') : ?>

                        <a href="dashboard.html" class="list-group-item active"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a>
                        <div class="sparator">Management</div>
                        <a href="order.html" class="list-group-item"><i class="fas fa-users me-1"></i>Order</a>
                        <a href="manageorder.html" class="list-group-item"><i class="fas fa-th me-1"></i>Manage Order</a>
                        <a href="#" class="list-group-item btn-logout btn-custom"><i class="fas fa-sign-out-alt me-1"></i></i>Logout</a>

                    <?php endif; ?>

                    <?php if (session()->get('jabatan') == 'Koki') : ?>

                        <a href="dashboard.html" class="list-group-item active"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a>
                        <div class="sparator">Management</div>
                        <a href="manageorders.html" class="list-group-item"><i class="fas fa-users me-1"></i>Manage Orders</a>
                        <a href="menus.html" class="list-group-item"><i class="fas fa-utensils me-1"></i>Menus</a>
                        <a href="#" class="list-group-item btn-logout btn-custom"><i class="fas fa-sign-out-alt me-1"></i></i>Logout</a>

                    <?php endif; ?>

                    <?php if (session()->get('jabatan') == 'Kasir') : ?>

                        <a href="dashboard.html" class="list-group-item active"><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a>
                        <div class="sparator">Management</div>
                        <a href="payment.html" class="list-group-item"><i class="fas fa-cash-register me-1"></i>Payment</a>
                        <a href="report.html" class="list-group-item"><i class="fas fa-clipboard-list me-1"></i></i>Report</a>
                        <a href="#" class="list-group-item btn-logout btn-custom"><i class="fas fa-sign-out-alt me-1"></i></i>Logout</a>

                    <?php endif; ?>

                </ul>
            </div>

            <!-- Page Content -->
            <div id="page-content-wrapper" class="w-100">
                <!-- Top Bar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid">
                        <button class="btn mr-auto mr-2 sidebar-supported-content d-md-none" id="menu-toggle">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hello Din &nbsp; <i class="fas fa-user-circle fa-lg"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Main Content -->
                <div id="section-content">

                    <?= $this->renderSection('content') ?>

                    <!-- Footer -->
                    <div class="footer">
                        <div class="text-footer text-center">Copyright © 2021. Sajianku. All RIght Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->renderSection('modal') ?>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Boostrap JS -->
    <script src="<?= base_url("Vendor") ?>/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
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
    </script>

    <?php $this->renderSection('script'); ?>

</body>

</html>