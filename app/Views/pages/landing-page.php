<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="<?= base_url('Assets') ?>/css/styles.css">

    <title>SajianKu</title>
</head>

<body>
    <!--========== SCROLL TOP ==========-->
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bxs-grid'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                    <li class="nav__item"><a href="#location" class="nav__link">Location</a></li>
                    <img src="<?= base_url('Assets') ?>/images/logo.png" alt="SAJIANKU" class="nav__logo">
                </ul>
            </div>
        </nav>
    </header>

    <main class="1-main">
        <!--------------HOME--------------->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">SajianKu</h1>
                    <h2 class="home__motto">Better Ingredients, Better Sajianku</h2>
                    <h4 class="home__description">Food served with priority hygiene and <br>delicacy in every bite</h4>
                </div>

                <div class="home__food">
                    <center><img src="<?= base_url('Assets') ?>/images/food_2.png" alt="" class="home__img"></center>
                </div>

            </div>
        </section>

        <center><img src="<?= base_url('Assets') ?>/images/Vector 1.png" alt="" class="vector"></center>

        <section class="about" id="about">
            <br>
            <br>
            <br>
            <br>
            <br>
            <center><img src="<?= base_url('Assets') ?>/images/logo_2.png" alt="about"></center>
            <h3 class="section-title">-About-</h3>
            <center>
                <p>SajianKu merupakan aplikasi yang dibuat untuk membantu pelanggan dalam melakukan pemesanan makanan.<br>
                    Aplikasi ini merupakan aplikasi berbasis web yang dibangun pada 30 Maret 2021 oleh Tim Wedang IF-2 UNIKOM<br>
                    yang beranggotakan Bagus Budi Wibowo, Nur Sasongko, Dean Gihifari, Megianto Adi, dan Yohana Sri.</p>
            </center>
            <br>
            <br>
            <br>
            <br>
            <br>
        </section>

        <!--------MENU-------->

        <section class="menu" id="menu">
            <center><img src="<?= base_url('Assets') ?>/images/logo_2.png" alt="menu"></center>
            <h3 class="section-title">-Our Best Menu-</h3>
            <br>
            <div class="menu__column">
                <div class="menu__card">
                    <center><img src="<?= base_url('Assets') ?>/images/ayam 1.png" alt="Ayam Goreng Saus Mentega" class="menu__img"></center>
                    <div class="deskripsi_menu">Ayam Goreng Saus Mentega</div>
                    <h5>Menu andalan di restoran kami. Ayam kampung yang dibumbui dengan saus mentega dengan ditaburi biji wijen di atasnya.</h5>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="menu__column">
                <div class="menu__card">
                    <center><img src="<?= base_url('Assets') ?>/images/udon 1.png" alt="Udon Spesial" class="menu__img"></center>
                    <div class="deskripsi_menu">Udon Spesial</div>
                    <h5>Mie Udon asal Jepang dengan telur setengah matang dan potongan ayam yang disajikan selagi hangat, sangat cocok menemanimu disaat udara dingin.</h5>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="menu__column">
                <div class="menu__card">
                    <center><img src="<?= base_url('Assets') ?>/images/topokki 1.png" alt="Topokki" class="menu__img"></center>
                    <div class="deskripsi_menu">Topokki</div>
                    <h5>Makanan asal Negeri Ginseng ini cocok untuk kamu pecinta pedas. Sensasi pedas dari bumbu Gochujang ditambah dengan odeng dan telur sangat cocok sebagai camilan dikala suntuk.</h5>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="menu__column">
                <div class="menu__card">
                    <center><img src="<?= base_url('Assets') ?>/images/grilled bread 1.png" alt="Grilled Cheese Bread" class="menu__img"></center>
                    <div class="deskripsi_menu">Grilled Cheese Bread</div>
                    <h5>Makanan asal Negeri Paman Sam ini merupakan salah satu makanan andalan untuk sarapan. Grilled Cheese Bread ini sangat cocok untuk kamu yang tidak ingin melewatkan waktu sarapanmu!</h5>
                </div>
            </div>
        </section>

        <!-----------LOCATION------------>
        <section class="location" id="location">
            <div class="row">
                <div class="column">
                    <img src="<?= base_url('Assets') ?>/images/location 1.png" alt="Location" class="location__img" width="500">
                </div>
                <div class="column">
                    <center><img src="<?= base_url('Assets') ?>/images/logo_2.png" alt="location"></center>
                    <h3 class="section-title">Our Location</h3>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9972796671664!2d107.61488241436703!3d-6.890927469345784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e654003602b9%3A0x81becb9963e60392!2sJl.%20Dipati%20Ukur%2C%20Kecamatan%20Coblong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040132!5e0!3m2!1sen!2sid!4v1628009398364!5m2!1sen!2sid" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </section>

    </main>


    <!--========== FOOTER ==========-->
    <footer class="footer__section">
        <div class="row">
            <div class="column__footer">
                <h6>Contact</h6>
                <div class="footer__contact">
                    Jl. Dipatiukur 1256<br>
                    Number Phone 02212334<br>
                    Email:sajianku@gmail.com<br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="column__footer">
                <h6>Best Menu</h6>
                <div class="footer__contact">
                    > Ayam Goreng Saus Mentega<br>
                    > Udon Spesial<br>
                    > Topokki<br>
                    > Grilled Cheese Bread<br>
                    <br>
                </div>
            </div>
            <div class="column__footer">
                <h6>Support By</h6>
                <img src="<?= base_url('Assets') ?>/images/gofood.png" alt="gofood" class="support__by1">
                <img src="<?= base_url('Assets') ?>/images/dana.png" alt="dana" class="support__by2">
                <br>
                <br>
            </div>
        </div>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="<?= base_url('Assets') ?>/js/main.js"></script>
</body>

</html>