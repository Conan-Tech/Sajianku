<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('Assets') ?>/scss/main.css">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="page-container page-payment">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    SajianKu
                </div>
                <ul class="list-group list-group-flush">
                    <a href="/dashboard" class="list-group-item "><i class="fas fa-tachometer-alt me-1"></i>Dashboard</a>
                    <div class="sparator">Management</div>
                    <a href="/kasir/payment" class="list-group-item active"><i class="fas fa-cash-register me-1"></i></i>Payment</a>
                    <a href="/kasir/report" class="list-group-item"><i class="fas fa-clipboard-list me-1"></i>Report</a>
                    <a href="/auth/logout" class="list-group-item btn-logout btn-custom"><i class="fas fa-sign-out-alt me-1"></i></i>Logout</a>
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
                                        Hello <?= session()->get('nama') ?> &nbsp; <i class="fas fa-user-circle fa-lg"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/auth/logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row wrapper-content-payment">
                    <div class="col-md-7">
                        <div id="section-content">
                            <!-- Main Content -->
                            <div class="content-heading">
                                <h5>Order</h5>
                            </div>
                            <!-- Form -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Id
                                                    Order</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $payment['Id_Order'] ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Atas
                                                    Nama</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $payment['Nama_Pemesan'] ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">No Meja</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $payment['No_Meja'] ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Total
                                                    Order</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $qty["Qty"] ?>">
                                                </div>
                                            </div>
                                            <textarea class="form-control text-color form-color" id="catatan" name="catatan" rows="9" placeholder="Catatan..." readonly><?= $payment['Catatan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form -->
                            <!-- Footer -->
                            <div class="footer">
                                <div class="text-footer text-center">Copyright © 2021. Sajianku. All RIght Reserved
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 payment">
                        <div class="card h-100">
                            <div class="card-body payment-body">
                                <?php foreach ($orders as $o) : ?>
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="row h-100">
                                                <div class="col-3">
                                                    <img class="px-2 py-2" src="<?= base_url('Assets') ?>/images/<?= $o['Photo'] ?>" width="100" height="100">
                                                </div>
                                                <div class="col-4 align-self-center ms-3">
                                                    <h5><?= $o['Nama_Menu'] ?></h5>
                                                    <p><span class="text-custom">x&nbsp;</span><?= $o['Qty'] ?></p>
                                                </div>
                                                <div class="col-auto align-self-center ms-auto mt-3">
                                                    <p class="price"><?= rupiah($o['Harga']) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="payment-footer">
                                <form action="/kasir/save-payment" method="POST">
                                    <input type="hidden" readonly class="form-control" id="id" name="id" value="<?= $payment['Id_Order'] ?>">
                                    <input type="hidden" name="bayar" id="bayar" value="<?= $payment['Total_Harga'] ?>">
                                    <input type="hidden" name="meja" id="meja" value="<?= $payment['No_Meja'] ?>">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="catatan" rows="4" placeholder="Catatan..." readonly><?= $payment['Catatan']; ?></textarea>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <h5 class="fw-bold">Total Harga</h5>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <h5 class="total fw-bold">Rp. <?= $payment['Total_Harga'] ?></h5>

                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <h5 class="fw-bold mt-1">Tunai</h5>
                                        </div>
                                        <div class="offset-md-1 col-md-5 text-end">
                                            <input type="number" class="form-control" id="tunai" name="tunai" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <h5 class="fw-bold">Kembalian</h5>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <!-- <h5 class="kembalian fw-bold">Rp. 0</h5> -->
                                            <input type="text" class="form-control kembalian text-right" id="kembalian" name="kembalian" readonly>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-custom w-100">Pay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Boostrap JS -->
    <script src="<?= base_url('Vendor') ?>/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
    <script>
        // get element
        $("#tunai").keyup(function(e) {
            e.preventDefault;

            let total = $("#bayar").val();
            let tunai = $("#tunai").val();

            let kembalian = tunai - total;
            // $(".kembalian").html("Rp. " + kembalian);
            $(".kembalian").val(kembalian);
        });


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
</body>

</html>