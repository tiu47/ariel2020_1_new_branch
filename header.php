	<!-- Header -->

	<!-- <h2><?php bloginfo( 'description' ); ?></h2> -->

	<header class="header person">
		<nav class="navbar navbar-expand-lg  ">
			<div class="container  px-4 ">

				<div class="navbar-header  col col-md-5">

					<div class="h1contlogo">

								<a href="http://arielbarrios.com/">
									<div class="circles">
										<div class="one">
											<div class="two">
												<div class="three"></div>
											</div>
										</div>
									</div>
									<div class="perro"></div>

						</a>
					</div>
					 <h1><a href="#ArielBarrios" class="" title="Ariel Barrios"> <?php bloginfo( 'name' ); ?></a></h1>





<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<div style="background:red">
esto es widget
	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->
</div>

	<?php endif; ?>






  <?php
    wp_nav_menu(
      array(
        'theme_location'  => 'my_new_menu',
				 'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list"  style="background:red" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,

      )
    );
    ?>


				</div>

	 <button class="navbar-toggler navbar-dark text-white border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

		   <div class="collapse navbar-collapse" id="navbarNav">
				<div class=" ms-auto text-end col-12  col-md-4">

						<ul class="navbar-nav py-5 pb-0  py-md-0">
							<li  class="nav-item text-center"><a class="p-2 px-3 rounded-1 active header_ArielBarrios"  href="#ArielBarrios" onclick='$(".ArielBarrios").slideto({highlight: false,slide_duration: 100})'>Hi!</a> </li>
							<li class="nav-item  text-center"><a class="p-2 px-3 rounded-1 header_Works" 		 href="#Works" 		onclick='$(".Works").slideto({highlight: false,slide_duration: 100})' >Works</a> </li>
							<li class="nav-item  text-center"><a class="p-2 px-3 rounded-1 header_Contact" 		 href="#Contact" 		onclick='$(".Contact").slideto({highlight: false,slide_duration: 100})'>Contact</a></li>
						</ul>
     </ul>

      </div>


</div>
</div>



</nav>


	</header>



	<!-- fn Header -->
