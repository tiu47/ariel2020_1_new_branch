<!--  Contactfooter -->
<div class="container footer section Contact" id="Contact">
		<div class="row row align-items-center">
			<div class="col text-center">
				<header>
					<h2 class="pb-3">Contact</h2>
				</header>
						 <?php
						/* The 2nd Query (without global var) */
						$query2 = new WP_Query( array( 'category_name' => 'contacto' ) );
						 
						// The 2nd Loop
						while ( $query2->have_posts() ) {
						    $query2->the_post();
						    // echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
						    the_content(); 
						}
						
						// Restore original Post Data
						wp_reset_postdata();
						?>
						<div class="pt-4">
							<p class="fs-4">Others forms of contacts</p>
							<nav>		
							<a href="https://dribbble.com/arielbarrios" target="_blank" class="" title="Dribble">Dribble</a>  
							<a href="https://www.instagram.com/thename_number/" target="_blank" class="" title="Instagram">Instagram</a> 
							<a  href="https://tiu47.tumblr.com/" target="_blank" class="" title="My Daily Art">My Daily Art</a> 
							<!-- <a class="Contacto" title="Contact" href="mailto:soy@arielbarrios.com">Mail</a><small><em>soy@arielbarrios.com<em><small></small></em></em></small> -->
							<a class="Contacto" title="Contact" href="mailto:barriosarielfernando@gmail.com">Mail</a><small><i class="fs-5"> barriosarielfernando@gmail.com<i><small></small></em></em></small>
							</nav>
						</div>
				</div>

			<div class="row">

				<div class="copyright-text col-12 col-md-6">
					<p>
						<?php 
							// echo esc_html( get_theme_mod( 'set_copyright', __( 'Copyright X - All rights reserved' , 'fancy-lab' ) ) );
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->