<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/css/bootstrap.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/img/fontello/css/fontello.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />


    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/'); ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri() . '/'); ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri() . '/'); ?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/'); ?>/site.webmanifest">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel:100,400,600,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:900,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>



    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/js/splide-2.4.21/dist/css/splide-core.min.css'); ?>" type="text/css" />


    <!-- or the reference on CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
 -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>


    <!-- <script  type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . '/js/mine/jquery.js'); ?>"  ></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . '/js/mine/jquery.browser.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . '/js/bootstrap/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . '/js/mine/jquery.slideto.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . '/js/functions.js'); ?>"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NWKDCW3WM7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NWKDCW3WM7');
    </script>

    <?php wp_head(); ?>
</head>

<body>

    <div class="layout "></div>

    <?php get_header(); ?>

    <script src="<?php echo esc_url(get_template_directory_uri() . '/processing.js'); ?>"></script>



    <script type="text/javascript">
        // convenience function to get the id attribute of generated sketch html element
        function getProcessingSketchId() {
            return 'webpageline';
        }
    </script>
    <!-- intro -->
    <!-- <div class="ArielBarrios_guide"></div> -->


    <canvas id="webpageline" data-processing-sources="<?php echo esc_url(get_template_directory_uri() . '/web_page_line.pde'); ?>" width="1800" height="980" class="d-none d-md-block">
        <p>Your browser does not support the canvas tag.</p>
        <!-- Note: you can put any alternative content here. -->
    </canvas>

    <noscript>
        <p>JavaScript is required to view the contents of this page.</p>
    </noscript>

    <div class="container-fluid intro section ArielBarrios " id="ArielBarrios">
        <header class="h2-hi">
            <h2>Hi!</h2>
        </header>
        <div class="row justify-content-md-center" style="position:absolute; ">
            <div class="col col-8 ">
                <div class="text-center clearfix">
                    <h1>
                        <div class="contnombre">
                            <p class="smallsub">psychedelic dog designer</p>
                        </div>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row  justify-content-center align-items-center pt-5 pt-lg-0" style="height: 100%;">
            <div class="col  pt-4 pt-lg-0">
                <div class="container-fluid intro section ">
                    <div class="" id="Bio">
                        <div class="row  justify-content-center align-items-center about">
                            <div class="col col-sm-12 col-md-8 p-4">
                                <article class="post" id="post-2">
                                    <div class="mepresentation clearfix ">

                                        <p>Hi, my name is <b>Ariel Barrios</b>, a front-end designer / developer based in Argentina. Through
                                            these years in order to give life to my designs (<b>UI / UX / Visual</b>) or ideas; I have acquired
                                            knowledge in differents technologies and frameworks; to name a few: java (android), ios,
                                            ruby and rails, vuejs, wordpress, etc. It mainly depends on project requirements.
                                            I also acquired skills related to animations (AE) and video editing (PR) for the creation of
                                            advertisements (banners and publications on social networks) or explanatory videos, also
                                            SEO where part of my responsibility.
                                        </p>

                                        <p>I worked in differents agencies such as: iconosur.com & Beapp.net, ID4You and many others in Argentina and abroad.</p>

                                        <p>
                                            Latley to expand my knolege I have programming <a href="https://www.arduino.cc/" class="" target="_blank" title="Arduino">Arduino <i class="demo-icon icon-link-ext"></i></a> projects, 3D Printing and
                                            3d projects in blender, PWA for timing rounds, exploring videogames making (Unity) or my
                                            own Drawing App or this very background(<a href="https://processing.org/" class="" target="_blank" title="Processing">Processing <i class="demo-icon icon-link-ext"></i></a>)
                                        </p>

                                    </div>
                                </article>
                            </div>
                        </div>







                        <!-- second-row -->
                        <div class="row justify-content-center align-items-stretch about second-row">
                            <div class=" col-sm-12 col-md-4 bttt me-2 ">
                                <div class="row ">
                                    <div class="col-3  border-top   text-center">
                                        <h3>UX</h3>
                                    </div>
                                    <div class="col   border-top  ">
                                        <ul class="pt-3">
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-philips')" title="Philips">Philips</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-banco')" title="Banco Promociones">Banco Promociones</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-PasionPorFutbol')" title="Futbol Transferencias">Futbol </a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-BeTransit')" title="Betransit">Betransit </a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-JuntosBien')" title="JuntosBien">JuntosBien</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>




                            <div class=" col-sm-12 col-md-4 bttt      ms-2">
                                <div class="row   ">
                                    <div class="col-3  border-top    text-center">
                                        <h3>UI</h3>
                                    </div>
                                    <div class="col  border-top  ">
                                        <ul class="pt-3">
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-philips')" title="Philips">Philips</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-banco')" title="Banco Promociones">Banco Promociones</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-GrupoPosadas')" title="GrupoPosadas">GrupoPosadas</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-BeTransit')" title="Betransit">Betransit</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-JuntosBien')" title="JuntosBien">JuntosBien</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second-row -->





                        <!-- third-row -->
                        <div class="row justify-content-center  about third-row ">
                            <div class="  col-sm-12 col-md-4 bttt   me-2">
                                <div class="row">
                                    <div class=" col col-sm-10 col-md-6  col-lg-7  col-xl-7  col-xxl-4  border-top  text-md-left text-lg-center">
                                        <h3 class="front">Front-end</h3>
                                    </div>
                                    <div class="col border-top">
                                        <ul class="pt-3 ">
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-Urgente24')" title="JuntosBien">Urgente24</a> </li>
                                            <li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-JuntosBien')" title="JuntosBien">JuntosBien</a> </li>
                                            <li class="clearfix"><a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-Medley')" title="Medley">And many projects more...</a> </li>
                                            <!-- <li class="clearfix"><a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-Medley')"  title="My Daily Art">My Daily Art</a> </li> -->
                                            <!-- <li class="clearfix"><a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-Medley')"  title="Instagram">Instagram</a>  </li> -->
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class=" col-sm-12  col-md-4 bttt    ms-2">
                                <div class="row  ">
                                    <div class="col-3 border-top text-center">
                                        <h3>Art</h3>
                                    </div>
                                    <div class="col border-top">
                                        <ul class="pt-3">
                                            <li class="clearfix"> <a href="https://dribbble.com/arielbarrios" target="_blank" title="Dribble">Dribble <i class="demo-icon icon-link-ext"></i></a> </li>
                                            <li class="clearfix"><a href="https://www.instagram.com/thename_number/" target="_blank" title="Instagram">Instagram <i class="demo-icon icon-link-ext"></i></a> </li>
                                            <li class="clearfix"> <a href="https://tiu47.tumblr.com/" target="_blank" title="title">My Daily Art <i class="demo-icon icon-link-ext"></i></a> </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--  end third-row -->




                        <!-- third-row fourth -->
                        <div class="row justify-content-center align-items-center about third-row ">
                            <div class="col-sm-12 col-md-8 pt-3 border-top esprow">
                                <div class="row">
                                    <div class="col ms-0">
                                        <p><a href="http://arielbarrios.com/arielbarrioscv.pdf" target="_blank" class="btn btn-primary btn-sm" title="Download my cv here">Download my CV here <i class="demo-icon icon-download"></i></a></p>
                                    </div>
                                    <div class="col col-1 me-0 text-end">
                                        <p>2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end third-row fourth -->




                    </div>

                </div>


            </div>
            <div class="scrolldown-cont">
                <span class="scrolldown" title="Scroll down to see my works" onclick="$('.Works').slideto({highlight: false})">
                    <span class="scrolldown-arrow-cont">
                        <i class="demo-icon"></i>
                        <i class="demo-icon"></i>
                    </span>
                    <span class="legend">Works</span>
                </span>
            </div>
        </div>
    </div>



    <!-- intro -->




    <!-- Works -->
    <!-- <div class="Works_guide"></div> -->




    <!-- Works -->
    <!-- <div class="Works_guide"></div> -->
    <div class="container works section Works" id="Works">

        <div class="row">
            <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


            </header>
        </div>


        <div class="row">
            <div class="container">

                <div class="row   justify-content-md-center">
                    <script>
                        var idCollection = [];
                        var idCollectionclass = [];
                    </script>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <!-- <?php echo get_post_meta(get_the_ID(), 'anchorid', true); ?> -->
                            <!-- <?php echo get_post_meta(get_the_ID(), 'position', true); ?> -->
                            <!--             <?php echo get_home_url() ?>
                                     <?php echo home_url() ?>
                                     <?php echo get_site_url() ?>
                                     <?php echo get_bloginfo() ?>
                                 -->

                            <article class="col-6  col-md-4  px-3 px-sm-3 px-md-3 slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>" onclick="triggerPopupSlide('slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>')" data-position="<?php echo get_post_meta(get_the_ID(), 'position', true); ?>" id="<?php echo get_post_meta(get_the_ID(), 'anchorid', true); ?>">
                                <!-- <h3><?php the_title(); ?> </h3> -->
                                <div class="front-image"><?php the_post_thumbnail(); ?> </div>

                                <div id="slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>" class="splide slidercont">
                                    <div class="slider splide__track">
                                        <ul class="list-unstyled splide__list">
                                            <?php the_content(); ?>
                                        </ul>
                                    </div>
                                    <span class="close-bt" onclick="closepopup('slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>');event.stopPropagation()">
                                        <i class="demo-icon icon-cancel-2"> </i>
                                    </span>
                                </div>
                            </article>


                            <script>
                                idCollection.push('slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>');
                            </script>

                        <?php endwhile; ?>

                        <?php
                        if (get_next_posts_link()) {
                            next_posts_link();
                        }
                        ?>
                        <?php
                        if (get_previous_posts_link()) {
                            previous_posts_link();
                        }
                        ?>

                    <?php else : ?>

                        <p>No posts found. :(</p>




                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Works -->




    <?php get_footer(); ?>

    <?php wp_footer(); ?>


    <div class="bg-dakr" onclick="closepopupall();event.stopPropagation()"></div>

</body>

</html>