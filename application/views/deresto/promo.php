<body>
    <div class="navbar-fixed">
        <nav class="grey darken-4" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">
                    <img src="<?= base_url('assets/deresto/img/logo/logo.jpg') ?>" alt="">
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url('deresto'); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('deresto/list_promo'); ?>">Promo</a></li>
                    <li><a href="<?php echo base_url('deresto/list_menu'); ?>">Menu</a></li>
                    <li><a href="<?php echo base_url('deresto/collections'); ?>">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
    <ul id="nav-mobile" class="sidenav grey darken-4">
        <li><a href="<?php echo base_url('deresto'); ?>">Home</a></li>
        <li><a href="<?php echo base_url('deresto/list_promo'); ?>">Promo</a></li>
        <li><a href="<?php echo base_url('deresto/list_menu'); ?>">Menu</a></li>
        <li><a href="<?php echo base_url('deresto/collections'); ?>">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
    </ul>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <h2 class="header center white-text">Deresto Coffee & Kitchen</h2>
                <div class="row center bg-head">
                    <h5 class="header col s12 light">Holidays, Selfie, & Foodies</h5>
                </div>
                <div class="row center">
                    <div class="col s12">
                        <a href="#" id="download-button" class="btn waves-effect waves-light light-green darken-4">Get Promo</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets/deresto/img/uploaded/background/IMG_7761-min.jpg'); ?>" alt="Unsplashed background img 1" class="responsive-img"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 center white-text">
                <blockquote>
                    <h3 class="light">Promo Deresto Coffee & Kitchen</h3>
                </blockquote>
            </div>
        </div>
        <div class="row">
            <?php foreach ($get_promo as $promo) : ?>
                <div class="col m6 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= base_url('assets/deresto/img/uploaded/menu_promo/' . $promo->img); ?>">
                            <span class="card-title"><?= $promo->title; ?></span>
                        </div>
                        <div class="card-content">
                            <p><?= $promo->caption; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center bg-head">
                    <h5 class="header col s12 light">Modern Places. Meeting & Gathering</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="<?= base_url('assets/deresto/img/uploaded/background/IMG_7757-min.jpg'); ?>" alt="Unsplashed background img 3" class="responsive-img"></div>
    </div>

    <div class="container" id="about">
        <div class="section">

            <div class="row white-text">
                <div class="col s12 center">
                    <h4>About Us</h4>
                </div>
                <div class="col m8 s12">
                    Deresto Coffee & Kitchen merupakan Restourant - Cafe yang ada di BNR Bogor.
                    yang telah berdiri sejak tahun 2018.
                    dengan menyajikan beragam menu makanan, minuman, desert dan sampai appetizer.
                </div>
                <div class="col m4 s12">
                    Deresto Coffee & Kitchen menyediakan tempat karouke, gathering, meeting dan room vip.
                    beragam bonus dan fasilitas tersedia.
                </div>
            </div>

        </div>
    </div>

    <footer class="page-footer teal darken-3" id="contact">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Deresto Coffee & Kitchen.</h5>
                    <p class="grey-text text-lighten-4">&copy;&nbsp;Marcomm - <a href="https://github.com/startdz">Creator</a></p>
                    <p class="grey-text">Selfie, Holidays & Foodies</p>
                    <div class="divider"></div>
                    <br>
                    <div class="center">
                        <i class="material-icons">location_on</i>
                    </div>
                    <p class="grey-text lighten-4">
                        Jl. Indigo Raya, RT.01/RW.06, Mulyaharja, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16135
                    </p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">General Links</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Promo</a></li>
                        <li><a class="white-text" href="#!">Contact</a></li>
                    </ul>
                    <div class="divider"></div>
                    <blockquote><a href="">WhatsApp</a></blockquote>
                    <blockquote><a href="">Customer Service</a></blockquote>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Patners</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Devoyage Bogor</a></li>
                        <li><a class="white-text" href="#!">Rumah Air Bogor</a></li>
                        <li><a class="white-text" href="#!">Water Kingdom</a></li>
                    </ul>
                </div>
            </div>
        </div>