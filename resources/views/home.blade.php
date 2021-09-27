<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primecoconesia</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="{{ asset('home') }}/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('home') }}/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('home') }}/apple-touch-icon-114x114.png">

    <link href="{{ asset('home') }}/fonts.googleapis.com/css069f.css?family=Open+Sans:400,400i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('home') }}/fonts.googleapis.com/cssb119.css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="{{ asset('home') }}/fonts.googleapis.com/css3f99.css?family=Playfair+Display:400,400i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
</head>

<body>

    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <header class="navbar">
        <div class="container">
            <a href="#" class="brand js-target-scroll">
                Primecoconesia
            </a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <nav class="nav-desctop hidden-xs hidden-sm">
                <ul class="nav-desctop-list">
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <nav class="nav-mobile hidden-md hidden-lg">
                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul class="nav-mobile-list">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="arrow-left hidden-xs">
            <span class="icon-chevron-left"></span>
        </div>
        <div class="arrow-right hidden-xs">
            <span class="icon-chevron-right"></span>
        </div>

        <div class="rev_slider_wrapper">
            <div id="rev_slider" class="rev_slider fullscreenbanner">
                <ul>

                    <li data-transition='slotzoom-horizontal' data-slotamount='default' data-masterspeed="2500"
                        data-fsmasterspeed="1000">

                        <img src="{{ asset('home') }}/img/slider/2.jpg"
                            data-lazyload="{{ asset('home') }}/img/slider/2.jpg" data-bgparallax="7" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="slider-title tp-caption" data-x="['center','center','center','center']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['-80']"
                            data-textAlign="['center','center','center','center']"
                            data-fontsize="['70', '60','50','40']" data-lineheight="['80','70', '60','50']"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"><i>Welcome to
                                Primecoconesia</i>
                        </div>

                        <div class="slider-text tp-caption" data-x="['center','center','center','center']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['20']"
                            data-textAlign="['center','center','center','center']" data-fontsize="['18']"
                            data-lineheight="['32']" data-whitespace="normal" data-width="['900','700','600','500']"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2500" data-splitin="none"
                            data-splitout="none"><span style="opacity:0.9">PT. Primecoconesia merupakan perusahaan yang
                                bergerak di indsutri pertanian dan fokus pada komuditas kelapa, khususnya produksi
                                minyak kelapa berkualitas tinggi dan berbagai produk turunan kelapa.</span>
                        </div>

                        <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['-110']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['125']" data-width="none"
                            data-fontsize="['16']" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:2500;e:Power4.easeInOut;"
                            data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2500" data-splitin="on"
                            data-splitout="none" data-responsive_offset="on"><a href="#request" class="btn"
                                data-toggle="modal">Get start now</a>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['110']" data-y="['middle','middle','middle','middle']" data-voffset="['125']"
                            data-width="none" data-fontsize="['18']" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:2500;e:Power4.easeInOut;"
                            data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2500" data-splitin="on"
                            data-splitout="none" data-responsive_offset="on"><a
                                href="https://www.youtube.com/watch?v=ANwf8AE3_d0"
                                class="icon-video-play white js-video-play"></a>
                            <span class="text text-white">watch overview</span>
                        </div>
                    </li>

                    <li data-transition='slotzoom-horizontal' data-slotamount='default' data-masterspeed="2500"
                        data-fsmasterspeed="1000">

                        <img src="{{ asset('home') }}/img/slider/1.jpg"
                            data-lazyload="{{ asset('home') }}/img/slider/1.jpg" data-bgparallax="7" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg">

                        <div class="slider-title tp-caption" data-x="['center','center','center','center']"
                            data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['-80']"
                            data-textAlign="['center','center','center','center']"
                            data-fontsize="['70', '60','50','40']" data-lineheight="['80','70', '60','50']"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="x:[105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                            data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">Creative
                            <i>Primecoconesia</i>
                        </div>

                        <div class="slider-text tp-caption" style="color: black"
                            data-x="['center','center','center','center']" data-hoffset="['0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['20']"
                            data-textAlign="['center','center','center','center']" data-fontsize="['18']"
                            data-lineheight="['32']" data-whitespace="normal" data-width="['900','700','600','500']"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:1000;s:1000;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2500" data-splitin="none"
                            data-splitout="none"><span style="opacity:0.9">Perusahaan kami membuka dan menerima peluang
                                kerjasama dengan perusahan lain, baik nasional maupun internasional yang bergerak dan
                                fokus pada bidang yang sesuai dengan perusahaan kami.</span>
                        </div>

                        <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['-110']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['125']" data-width="none"
                            data-fontsize="['16']" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:2500;e:Power4.easeInOut;"
                            data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2500" data-splitin="on"
                            data-splitout="none" data-responsive_offset="on"><a href="#request" class="btn"
                                data-toggle="modal">Get start now</a>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['110']" data-y="['middle','middle','middle','middle']" data-voffset="['125']"
                            data-width="none" data-fontsize="['18']" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:50px;opacity:0;s:2500;e:Power4.easeInOut;"
                            data-transform_out="y:50px;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="2500" data-splitin="on"
                            data-splitout="none" data-responsive_offset="on"><a
                                href="https://www.youtube.com/watch?v=ANwf8AE3_d0"
                                class="icon-video-play white js-video-play"></a>
                            <span class="text text-white">watch overview</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mouse-helper">
            <i class="icon ion-mouse"></i>
        </div>
    </main>
    <div class="content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2 class="section-title">About Us</h2>
                        <p>PT. Primecoconesia adalah perusahaan yang bergerak di bidang pengolahan kelapa yang fokus
                            pada produksi minyak kelapa berkualitas tinggi. Tidak hanya menjadi produsen minyak kelapa
                            berkualitas tinggi PT. Primecoconesia juga menjadi produsen berbagai produk turunan kelapa
                            berkualitas tinggi, seperti: Kapuk, Briket, Cocopeat, Cocofiber dll.</p>
                        <a href="{{ route('about') }}"><button type="button" class="btn btn-primary">Read
                                More</button></a>
                    </header>
                </div>
            </div>
        </section>

        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2 class="section-title">Our Products</h2>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row-blog row">
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product1.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">1</a>
                                    <h3 class="blog-title">
                                        <a href="#">Minyak Kelapa Murni</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product2.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">2</a>
                                    <h3 class="blog-title">
                                        <a href="#">Minyak Kelapa Biasa</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product3.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">3</a>
                                    <h3 class="blog-title">
                                        <a href="#">Kapuk</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product4.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">4</a>
                                    <h3 class="blog-title">
                                        <a href="#">Cocopeat</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product5.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">5</a>
                                    <h3 class="blog-title">
                                        <a href="#">Cocomesh atau Coconet</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product6.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">6</a>
                                    <h3 class="blog-title">
                                        <a href="#">Coco Rope</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product7.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">7</a>
                                    <h3 class="blog-title">
                                        <a href="#">Briket Arang Kelapa</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product8.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">8</a>
                                    <h3 class="blog-title">
                                        <a href="#">Sapu Lidi</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-blog col-blog-home col-base col-sm-6 col-md-4">
                            <article class="blog">
                                <div class="blog-thumbnail">
                                    <a href="#">
                                        <div class="blog-thumbnail-img"><img alt="" class="img-responsive"
                                                src="{{ asset('home') }}/img/product/product9.jpg"></div>
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <a href="#" class="blog-rubric">9</a>
                                    <h3 class="blog-title">
                                        <a href="#">Gelagah / Buluh</a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="team bg-light">
            <div class="clearfix">
                <div class="col-team col-sm-6 col-lg-3">
                    <figure class="team-profile">
                        <img alt="" src="{{ asset('home') }}/img/team/2/1-370x420.jpg">
        <figcaption class="team-caption">
            <div class="team-meta">
                <strong class="team-name">Jack Wilshere</strong>
                <span class="team-spec">CEO / Founder</span>
            </div>
            <ul class="team-social social-list">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
            </ul>
        </figcaption>
        </figure>
    </div>
    <div class="col-team  col-sm-6 col-lg-3">
        <figure class="team-profile">
            <img alt="" src="{{ asset('home') }}/img/team/2/2-370x420.jpg">
            <figcaption class="team-caption">
                <div class="team-meta">
                    <strong class="team-name">Jack Wilshere</strong>
                    <span class="team-spec">CEO / Founder</span>
                </div>
                <ul class="team-social social-list">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </figcaption>
        </figure>
    </div>
    <div class="col-team col-sm-6 col-lg-3">
        <figure class="team-profile">
            <img alt="" src="{{ asset('home') }}/img/team/2/3-370x420.jpg">
            <figcaption class="team-caption">
                <div class="team-meta">
                    <strong class="team-name">Jack Wilshere</strong>
                    <span class="team-spec">CEO / Founder</span>
                </div>
                <ul class="team-social social-list">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </figcaption>
        </figure>
    </div>
    <div class="col-team col-sm-6 col-lg-3">
        <figure class="team-profile">
            <img alt="" src="{{ asset('home') }}/img/team/2/4-370x420.jpg">
            <figcaption class="team-caption">
                <div class="team-meta">
                    <strong class="team-name">Jack Wilshere</strong>
                    <span class="team-spec">CEO / Founder</span>
                </div>
                <ul class="team-social social-list">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </figcaption>
        </figure>
    </div>
    </div>
    </section> --}}

    <section class="features bg-dark text-muted section">

        <div class="container">
            <div class="row">
                <header class="text-center col-md-8 col-md-offset-2">
                    <h2 class="section-title text-white">Our Company Values</h2>
                </header>
            </div>
        </div>
        <div class="container">
            <div class="row-base row">
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <h6 class="text-white">Menjunjung Tinggi Integritas</h6>
                </div>
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <h6 class="text-white">Mengutamakan kualitas dan pelayanan</h6>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <h6 class="text-white">Kerja tim profesional</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <header class="text-center col-md-12 ">
                    <h2 class="section-title">Philosophy</h2>
                    <p style="font-size: 1.2em">Kami berkomitmen untuk menyediakan produk kelapa berkualitas tinggi
                        kepada pelanggan kami dan memberikan layanan terbaik agar mereka mendapat kepuasaan dan
                        kenyamanan saat menggunakan produk kami. Disamping itu kami juga memberikan feedback yang
                        menguntungkan bagi para pemegang saham kami. Perusahaan kami sengat menjunjung tinggi ketaatan
                        pada aturan Nasional dan Internasional terkait standarisasi pengolahan minyak kelapa dan turunan
                        kelapa. Kami pun berfokus pada pencegahan eksploitasi/kerusakan lingkungan akibat produksi kami
                        dan kami menemukan cara lebih baik untuk melestarikan lingkungan. Bahan baku yang kami gunakan
                        hanya bahan baku berkualitas terbaik dan kami terus memperhatikan peningkatan kualitas produksi.
                        Perusahaan kami menggunakan teknologi terbaru, mutakhir dan canggih.</p>
                </header>
            </div>
        </div>
    </section>

    <section class="features section  bg-light">
        <div class="container">
            <header class="text-center col-md-12 ">
                <h2 class="section-title">Our Key Features</h2>
            </header>
            <div class="row-base row">
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <div class="media-left"><i class="icon text-primary icon-new-tab"></i></div>
                    <div class="media-right">
                        <h5>PRODUK BERKUALITAS TINGGI</h5>
                        <p>Kami senantiasi menyediakan barang secara kuantitas dengan mengutamakan
                            hasil produk dengan kualitas terbaik</p>
                    </div>
                </div>
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <div class="media-left"><i class="icon text-primary icon-tag"></i></div>
                    <div class="media-right">
                        <h5>HARGA TERBAIK</h5>
                        <p>Produk berkualitas tinggi dengan harga terjangkau dan bersaing di pasar</p>
                    </div>
                </div>
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <div class="media-left"><i class="icon text-primary icon-users2"></i></div>
                    <div class="media-right">
                        <h5>INTEGRITAS UTAMA</h5>
                        <p>Kami selalu mengutamakan kepercayaan mitra dan pelanggan</p>
                    </div>
                </div>
                <div class="col-base col-feature col-sm-6 col-md-4">
                    <div class="media-left"><i class="icon text-primary icon-group-work"></i></div>
                    <div class="media-right">
                        <h5>KERJASAMA TERPERCAYA</h5>
                        <p>Kami membangun kerjasama jangka panjang dan saling menguntungkan dengan
                            menyediakan pelayanan terbaik</p>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-base col-feature col-sm-6 col-md-4">

                    <div class="media-right">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners section-sm">
        <div class="container">
            <div class="js-partners-carousel">
                <div class="partner">
                    <img alt="" src="{{ asset('home') }}/img/partners/1.png">
                </div>
                <div class="partner">
                    <img alt="" src="{{ asset('home') }}/img/partners/2.png">
                </div>
                <div class="partner">
                    <img alt="" src="{{ asset('home') }}/img/partners/3.png">
                </div>
                <div class="partner">
                    <img alt="" src="{{ asset('home') }}/img/partners/4.png">
                </div>
                <div class="partner">
                    <img alt="" src="{{ asset('home') }}/img/partners/5.png">
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer bg-dark">
        <div class="container">
            <div class="row-base row-space row">
                <div class="brand-info col-base col-space col-sm-6 col-md-3">
                    <a href="#top" class="brand js-target-scroll">
                        Primecoconesia.
                    </a>
                    <p>Terima kasih atas minat Anda pada produk kami.</p>
                    <address><strong class="text-white">E-mail:</strong> <a
                            href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="503528313d203c35103528313d203c357e2225">[email&#160;protected]</a>
                    </address>
                </div>
                {{-- <div class="col-base col-space col-sm-6 col-md-2">
                    <strong class="footer-title">Links</strong>
                    <ul class="nav-bottom">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-base col-space col-sm-6 col-md-4">
                    <strong class="footer-title">Links</strong>
                    <ul class="nav-bottom">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div> --}}
                {{-- <div class="col-base col-space col-sm-6 col-md-6">
                    <strong class="footer-title">Newsletter</strong>
                    <form class="subscribe-form js-subscribe-form">
                        <div class="input-group">
                            <input id="mc-email" type="email" class="input-round form-control" placeholder="Email">
                            <span class="input-group-btn">
                                <button class="btn" type="submit"><span class="icon-arrow-right"></span></button>
                            </span>
                        </div>
                        <label class="mc-label" for="mc-email" id="mc-notification"></label>
                    </form>
                </div> --}}
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyrights">
                    © Copyright 2021 Primecoconesia. All Rights Reserved
                </div>
                <ul class="social-list">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>

    <div id="request" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>
                    <h2 class="modal-title">Send request</h2>
                </div>
                <div class="modal-body">
                    <form class="form-request js-ajax-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required placeholder="Email *">
                        </div>
                        <div class="form-group">
                            <textarea rows="3" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></span>
                    <h2 class="modal-title">Thank you</h2>
                    <p class="modal-subtitle">Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></span>
                    <h2 class="modal-title">Sorry</h2>
                    <p class="modal-subtitle"> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>



    <script data-cfasync="false"
        src="{{ asset('home') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('home') }}/js/jquery.min.js"></script>
    <script src="{{ asset('home') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('home') }}/js/smoothscroll.js"></script>
    <script src="{{ asset('home') }}/js/jquery.viewport.js"></script>
    <script src="{{ asset('home') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('home') }}/js/wow.min.js"></script>
    <script src="{{ asset('home') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('home') }}/js/jarallax.js"></script>
    <script src="{{ asset('home') }}/js/jquery.magnific-popup.js"></script>
    <script src="{{ asset('home') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('home') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('home') }}/js/imagesloaded.pkgd.js"></script>

    <script src="{{ asset('home') }}/js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/jquery.themepunch.revolution.min.js"></script>

    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider/revolution.extension.video.min.js"></script>
    <script src="{{ asset('home') }}/js/rev-slider-init.js"></script>
    <script src="{{ asset('home') }}/js/interface.js"></script>
</body>

</html>
