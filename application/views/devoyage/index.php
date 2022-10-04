<body>
    <!-- Navbar -->
    <div class="navbar navbar-fixed z-depth-5">
        <nav class="indigo darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">
                        <img src="<?= base_url('assets/img/'); ?>logo/logo.jpg" alt="logo" id="logo">
                    </a>
                    <a href="#" data-target="side-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#promo">Hot Promo</a></li>
                        <li><a href="#games">Games & Spot</a></li>
                        <li><a href="#deresto">Deresto</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
        </nav>
    </div>

    <ul class="sidenav" id="side-nav">
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#promo">Hot Promo</a></li>
        <li><a href="#fasilitas">Facilities</a></li>
        <li><a href="#deresto">Deresto</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    </div>

    <section id="home" class="section z-depth-5" style="top: 100px;">
        <div class="slider">
            <ul class="slides">
                <?php foreach ($slides as $slide) : ?>
                    <li>
                        <img src="<?= base_url('assets/img/uploaded/slides/' . $slide->img_slides); ?>" class="responsive-img"> <!-- random image -->
                        <div class="caption <?= $slide->animation; ?>">
                            <h3><?= $slide->title_ss; ?></h3>
                            <p class="black-text text-darken-5"><?= $slide->text_ss; ?></p>
                            <button class="btn waves-effect waves-dark deep-purple darken-4
                        " type="submit" name="action"><?= $slide->addons; ?>
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section id="gallery" class="section">

        <div class="container">
            <div class="row">

                <div class="col s12">
                    <div class="section-intro">
                        <h1>Gallerys</h1>
                        <div class="line-intro"></div>
                    </div>
                </div>

            </div>

            <div class="row">
                <?php foreach ($gallerys as $gallery) : ?>
                    <div class="col l4 s12" style="margin-bottom: 5px;">
                        <div class="gallery-item">

                            <img src="<?= base_url('assets/img/uploaded/gallerys/' . $gallery->img_gallery); ?>" class="responsive-img">
                            <div class="gallery-overlay">
                                <div>
                                    <h5><?= $gallery->title_gallery; ?></h5>
                                    <h6><?= $gallery->caption_gallery; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section>

    <section id="promo" class="section">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="section-intro">
                        <h1>Hots Promo</h1>
                        <div class="line-intro"></div>
                    </div>
                </div>
                <?php foreach ($promo_result as $promo) : ?>
                    <div class="col m6 s12">
                        <img class="materialboxed" src="<?= base_url('assets/img/uploaded/promo/' . $promo->img_promo); ?>">
                        <blockquote>
                            <ul>
                                <li>
                                    <h5 class="light text-light"><?= $promo->title; ?></h5>
                                </li>
                                <li><?= $promo->caption; ?></li>
                                <li><?= $promo->periode; ?></li>
                                <li><?= $promo->price; ?></li>
                            </ul>
                        </blockquote>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="games" class="section">
        <div class="container">
            <div class="row">
                <div class="col m12 center">
                    <h2>Games & Spot</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($games as $game) : ?>
                    <div class="col m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?= base_url('assets/img/uploaded/games/' . $game->img_games); ?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><?= $game->title; ?><i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><?= $game->caption_games; ?><i class="material-icons right">close</i></span>
                                <p><?= $game->text_games; ?></p>
                                <p><?= $game->price; ?></p>
                                <p><?= $game->periode; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div class="parallax-container">
        <?php foreach ($parallaxs as $parallax) : ?>
            <div class="parallax"><img src="<?= base_url('assets/img/uploaded/parallax/' . $parallax->img_parallax); ?>"></div>
        <?php endforeach; ?>
        <div class="container abouts">
            <h3 class="center white-text">About Us</h3>
            <div class="row">
                <div class="col s12 center white-text">
                    <h5 class="light white-text">Devoyage Bogor, New Atmosphere Holiday</h5>
                    <p>Taman hiburan bertema pedesaan Eropa dengan makanan, wahana & lokasi untuk berswafoto.</p>
                </div>
                <div class="col m4 s12 center white-text">
                    <h5 class="light">Holidays</h5>
                    <img src="<?= base_url('assets/img/'); ?>logo/35538-83eb71be.png" alt="">
                    <p>Liburan Menyenangkan Bersama pasangan, keluarga, atau teman</p>
                </div>
                <div class="col m4 s12 center white-text">
                    <h5 class="light white-text">Selfie</h5>
                    <img src="<?= base_url('assets/img/'); ?>logo/1077042-43d786b9.png" alt="">
                    <p>Beragam Spot Menarik, Tersedia Costume dan beragam Wahana.</p>
                </div>
                <div class="col m4 s12 center white-text">
                    <h5 class="light white-text">Foodies</h5>
                    <img src="<?= base_url('assets/img/'); ?>logo/562678-c58c70c3.png" alt="">
                    <p>Makanan yang segar dan Anti Mainstream, sangat mudah memanjakan lidah kamu.</p>
                </div>
            </div>
        </div>
    </div>

    <section id="deresto" class="deresto">
        <div class="container">
            <div class="row">
                <h2 class="center gray-text text-darken-3 light">
                    Deresto Coffee & Kitchen
                </h2>
            </div>
            <div class="row">
                <div class="col m6 center offset-m3">
                    <h5>
                        <a href="#" class="btn-floating btn-large waves-effect waves-light red" style="margin-bottom: 24px;">Open Page</a>
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Devoyage Bogor</h5>
                    <p class="grey-text text-lighten-4">New Atmosphere Holidays</p>
                    <img src="<?= base_url('assets/img/'); ?>logo/logo.jpg" alt="" class="circle responsive-img logo">
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Pages</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">WhatsApp</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">0878-2019-3911</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Customer Service</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">0251 88900 1</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Copyright Devoyage Bogor
                <a class="grey-text text-lighten-4 right" href="#!">
                    <i class="bi bi-instagram" style="margin-left: 5px;"></i>
                </a>
                <a class="grey-text text-lighten-4 right" href="#!">
                    <i class="bi bi-facebook" style="margin-left: 5px;"></i>
                </a>
                <a class="grey-text text-lighten-4 right" href="#!">
                    <i class="bi bi-tiktok" style="margin-left: 5px;"></i>
                </a>
                <a class="grey-text text-lighten-4 right" href="#!">
                    <i class="bi bi-youtube" style="margin-left: 5px;"></i>
                </a>
                <a class="grey-text text-lighten-4 right" href="#!">
                    <i class="bi bi-twitter" style="margin-left: 5px;"></i>
                </a>
            </div>
        </div>
    </footer>