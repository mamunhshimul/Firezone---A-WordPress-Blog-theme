<?php get_header();?>

<div class="main-container">	
		<main class="site-main">			
			<!-- Content Block -->
			<div class="container-fluid no-left-padding no-right-padding content-block">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Content Area -->
						<div class="col-md-8 col-sm-7 col-xs-12 content-area content-area-space no-left-padding no-right-padding">


 	                  	<?php
						if ( have_posts() ) :
						
						   if ( is_home() && ! is_front_page() ) : ?>
								<header>
							    	<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header> 
						    <?php
							 endif;
							
							/* Start the Loop */
							while ( have_posts() ) : the_post(); 
							
							     get_template_part( 'template-parts/content', get_post_format() );
							
							endwhile;
							
					                  ?>
                        
                        <?php
			                  /*  the_posts_pagination(array(*/
											
	  								// 		'prev_text'=>'New Post',
											// 'next_text'=>'Old Post',
											// 'screen_reader_text'=>'Pagination',
											// 'mid_size'            =>4,
											// 'before_paga_number'  =>'',
											// 'after_paga_number'   =>'',
											// 'show_all'   =>'false',
                              /*  )); */  ?>
                    


                    <?php  
                    iBlogger_pagination(); ?>
							
					       <?php else :
							
							get_template_part( 'template-parts/content', 'none' );
							
							endif; ?>
				 
				 
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<?php get_sidebar();?>
                        <!-- Widget Area /- -->
					</div><!-- Row /- -->
					<div class="clearfix"></div>

				</div><!-- Container /- -->
			</div><!-- Content Block /- -->			
		</main>		
	</div>


 
<?php get_footer(); ?>