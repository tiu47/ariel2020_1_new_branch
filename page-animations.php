<?php /* Template Name: home_animation */ ?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?></title>


	<meta name="theme-color" content="#3D0F53">




	<!-- or the reference on CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.11/dist/css/splide.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.11/dist/js/splide.min.js"></script>




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



	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta name="description" content="Ariel Barrios Web Design" />
	<meta name="author" content="Ariel Barrios Web Design" />
	<meta name="generator" content="Ariel Barrios Web Design" />
	<meta property="og:url" content="https://arielbarrios.com" />
	<meta property="og:site_name" content="Ariel Barrios Web Design" />
	<meta property="og:title" content="Ariel Barrios Web Design | Ariel Barrios Web Design" />
	<meta property="og:description" content="Ariel Barrios Web Design" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://arielbarrios.com/portfolio/wp-content/themes/ariel2020/apple-touch-icon.png" />
	<meta property="og:locale" content="en_PK" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Ariel Barrios Web Design" />
	<meta name="twitter:description" content="Ariel Barrios Web Design" />
	<meta name="twitter:image" content="https://arielbarrios.com/portfolio/wp-content/themes/ariel2020/apple-touch-icon.png" />
	<meta name="twitter:image:alt" content="Ariel Barrios Web Design" />



	<link rel="stylesheet" href="https://wowjs.uk/css/libs/animate.css" />
	<script src="https://wowjs.uk/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>




	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/js/splide-2.4.21/dist/css/splide-core.min.css'); ?>" type="text/css" />

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


				<?php get_template_part('header_animation'); ?>

	<?php
    $mobile = false;


    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
        $mobile = true;
    }
    ?>



	<script src="<?php echo esc_url(get_template_directory_uri() . '/processing.js'); ?>"></script>


	<script type="text/javascript">



	</script>
	<!-- intro -->


	<noscript>
		<p>JavaScript is required to view the contents of this page.</p>
	</noscript>


			<div class="container-slides" id="panels-container">







	<div class="container-fluid  intro section ArielBarrios   panel blue" id="ArielBarrios">
		<header class="h2-hi">
			<h2>Hi! </h2>
		</header>






		<div class="row  justify-content-center align-items-center pt-5 pt-lg-0 px-4" style="height: 100%;">
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
										<ul class="pt-3 pe-3">
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
										<ul class="pt-3 pe-3">
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
										<ul class="pt-3 pe-3">
											<li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-Urgente24')" title="JuntosBien">Urgente24</a> </li>
											<li class="clearfix"> <a href="#" onclick="$('.Works').slideto({highlight: false}); triggerPopupSlide('slider-id-JuntosBien')" title="JuntosBien">JuntosBien</a> </li>
											</ul>
									</div>
								</div>
							</div>

							<div class=" col-sm-12  col-md-4 bttt  ms-2">
								<div class="row  ">
									<div class="col-3 border-top text-center">
										<h3>Art</h3>
									</div>
									<div class="col border-top">
										<ul class="pt-3 pe-3">
											<li class="clearfix"> <a href="https://dribbble.com/arielbarrios" target="_blank" title="Dribble">Dribble <i class="demo-icon icon-link-ext"></i></a> </li>
											<li class="clearfix"><a href="https://www.instagram.com/thename_number/" target="_blank" title="Instagram">Instagram <i class="demo-icon icon-link-ext"></i></a> </li>
											<li class="clearfix"> <a href="https://tiu47.tumblr.com/" target="_blank" title="title">My Daily Art <i class="demo-icon icon-link-ext"></i></a> </li>
											<li class="clearfix"> <a href="https://www.figma.com/@arielbarrios" target="_blank" title="title">Figma Projects <i class="demo-icon icon-link-ext"></i></a> </li>
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
									<div class="col col-12 col-md-11 text-center text-md-start ms-0">
										<a href="http://arielbarrios.com/arielbarrioscv.pdf" target="_blank" class="btn btn-primary btn-sm me-2" title="Download my cv here">Download my CV here EN<i class="demo-icon icon-download"></i></a>
										<a href="http://arielbarrios.com/arielbarrios_cv_espanol.pdf" target="_blank" class="btn btn-primary btn-sm" title="Descarga mi cv aquí">Descarga mi CV aquí ES <i class="demo-icon icon-download"></i></a>


									</div>
									<div class="col col-12 col-md-1  me-0 text-center text-md-end pt-4  pt-md-0">
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
	<div class="container-fluid works section Works panel py-5" id="Works">
		<div class="row">
			<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></header>
		</div>
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center align-middle py-5 h-75">
					<script>
						var idCollection = [];
						var idCollectionclass = [];
					</script>

					<div class="col-8">
						<div class="row">

					<?php
                    $allPostsWPQuery = new WP_Query(array('category_name' => 'works'));
                    if ($allPostsWPQuery->have_posts()) : while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>
							<article class="col-6 col-md-4 px-3 px-sm-3 px-md-3 slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>" onclick="triggerPopupSlide('slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>')" data-position="<?php echo get_post_meta(get_the_ID(), 'position', true); ?>" id="<?php echo get_post_meta(get_the_ID(), 'anchorid', true); ?>">
								<h3 class="d-none"><?php the_title(); ?> </h3>
								<div class="front-image"><?php the_post_thumbnail(); ?> </div>

								<div id="slider-id-<?php echo get_post_meta(get_the_ID(), "anchorid", true) ?>" class="splide slidercont ">
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
						<?php endwhile;
                        /* Restore original Post Data
                             * NB: Because we are using new WP_Query we aren't stomping on the
                             * original $wp_query and it does not need to be reset with
                             * wp_reset_query(). We just need to set the post data back up with
                             * wp_reset_postdata().
                             */
                        wp_reset_postdata();
                        ?>
						<!-- <article class="col-6  col-md-4  px-3 px-sm-3 px-md-3 slider-id-Medley">
							<script src="https://apps.elfsight.com/p/platform.js" defer></script>
							<div class="elfsight-app-69f2176f-db9d-4825-9264-c5a304b0a63a"></div>
					</article> -->
					<div class="bg-dakr" onclick="closepopupall();event.stopPropagation()"></div>
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
		</div>
	</div>
	<!-- Works -->


	<?php get_footer(); ?>





	<?php wp_footer(); ?>

</div><!-- container-slides -->



			<style media="screen">
				body {
				  overscroll-behavior: none;
				  height: 100vh;
				  margin:0;
				  padding:0;
				  overflow-x: hidden;
				}
				.container-slides {
				  overscroll-behavior: none;
				  width: 300%;
				  height: 100%;
				  display: flex;
				  flex-wrap: nowrap;
				}

				.panel{width: 100%;}

				/* .blue{background: blue}
				.yellow{background: yellow}
				.green{background: green}
				.red{background: red}
				.orange{background: orange}
				.purple{background: purple}
				.gray{background: gray} */

			</style>


			<script src="<?php echo esc_url(get_template_directory_uri() . '/js/gsap-public/umd/gsap.js'); ?>"></script>
			<script src="<?php echo esc_url(get_template_directory_uri() . '/js/gsap-public/umd/ScrollToPlugin.js'); ?>"></script>
			<script src="<?php echo esc_url(get_template_directory_uri() . '/js/gsap-public/umd/ScrollTrigger.js'); ?>"></script>


			<script type="text/javascript">
				gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);



					let sections = gsap.utils.toArray(".panel");


					/* Main navigation */
					let panelsSection =gsap.utils.toArray(".panel");
					let	panelsContainer = document.querySelector("#panels-container");
					// let	panelsContainer = document.querySelectorAll(".container-slides");
					let	tween;

					document.querySelectorAll(".anchor").forEach(anchor => {
						anchor.addEventListener("click", function(e) {
							e.preventDefault();
							let targetElem = document.querySelector(e.target.getAttribute("href")),
								y = targetElem;
							if (targetElem && panelsContainer.isSameNode(targetElem.parentElement)) {
								let totalScroll = tween.scrollTrigger.end - tween.scrollTrigger.start,
									totalMovement = (panels.length - 1) * targetElem.offsetWidth;
								y = Math.round(tween.scrollTrigger.start + (targetElem.offsetLeft / totalMovement) * totalScroll);
							}
							gsap.to(window, {
								scrollTo: {
									y: y,
									autoKill: false
								},
								duration: 1
							});
						});
					});



					gsap.to(sections, {
					  xPercent: -100 * (sections.length - 1),
					  ease: "none",
					  scrollTrigger: {
					    trigger: ".container-slides",
					    pin: true,
					    scrub: 1,
					    snap: 1 / (sections.length - 1),
					    // base vertical scrolling on how wide the container is so it feels more natural.
					    end: "+=2100",
					  }
					});


			</script>


</body>

</html>
