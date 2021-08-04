<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('Assets') ?>/scss/main.css">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="page-container page-payment">
        <div class="d-flex" id="wrapper">

            <!-- Page Content -->
            <div id="page-content-wrapper" class="w-100">
                <!-- <div class="col-md-4 text-center p-3 border"> -->
                <div class="col-lg-4 col-md-4 p-4 border">
                    <div class="text-center">
                        <img src="<?= base_url('Assets') ?>/images/logo.png" alt="">
                    </div>
                    <div class="my-2">
                        <table class="w-100">
                            <tr>
                                <td style="font-weight: bold;">No Bill</td>
                                <td>:<?= $payment['Id_Order']; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Kasir</td>
                                <td>:<?= $cashier['Nama_Pegawai']; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Tanggal</td>
                                <td>:<?= ($payment['Tanggal_Order']); ?></td>
                                <!-- <td>:date_format(($payment['Tanggal_Order']), "d-m-Y H:i");</td> -->
                            </tr>
                        </table>
                    </div>
                    <?php
                    // dd($orders);
                    $number =  0;
                    ?>
                    <div class="mt-2">
                        <table class="w-100 border-bottom">
                            <tr class="border-top border-bottom text-center" style="font-weight: bold;">
                                <td>No</td>
                                <td>Order</td>
                                <td>Qty</td>
                                <td>Harga</td>
                                <td>Sub</td>
                            </tr>
                            <?php foreach ($orders as $o) : ?>
                                <tr>
                                    <td class="text-center"><?= ++$number ?></td>
                                    <td><?= $o['Nama_Menu'] ?></td>
                                    <td class="text-center"><?= $o['Qty'] ?>x</td>
                                    <td style="text-align: right;"><?= rupiah($o['Harga']) ?></td>
                                    <td style="text-align: right;"><?= rupiah($o['Harga'] *  $o['Qty']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="border-bottom mt-2">
                        <div class="d-flex d-column justify-content-between">
                            <div style="font-weight: bold;">Total</div>
                            <div><?= rupiah($payment["Total_Harga"]); ?></div>
                        </div>
                        <div class="d-flex d-column justify-content-between">
                            <div style="font-weight: bold;">Tunai</div>
                            <div><?= rupiah(0); ?></div>
                        </div>
                        <div class="d-flex d-column justify-content-between">
                            <div style="font-weight: bold;">Kembalian</div>
                            <div><?= rupiah(0); ?></div>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        Thank you for coming to the restaurant Sajianku
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
</body>

</html>