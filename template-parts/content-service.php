<?php 
$techup_enable_service_section = get_theme_mod( 'techup_enable_service_section', false );
$techup_service_title = get_theme_mod( 'techup_service_title');
$techup_service_subtitle = get_theme_mod( 'techup_service_subtitle' );
if($techup_enable_service_section==true ) {


        $techup_services_no        = 6;
        $techup_services_pages      = array();
        for( $i = 1; $i <= $techup_services_no; $i++ ) {
             $techup_services_pages[] = get_theme_mod('techup_service_page '.$i); 
             $techup_service_icon[]= get_theme_mod('techup_service_icon '.$i,'fa fa-user');
        }
        $techup_services_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_services_pages ),
        'posts_per_page' => absint($techup_services_no),
        'orderby' => 'post__in'
        ); 
        $techup_services_query = new WP_Query( $techup_services_args );
      

?>
<!-- ======= Services Section ======= -->
    <section id="services" class="services-sec educ-home">
      <div class="container">
          <div class="section-heading text-center">
			<?php if($techup_service_title) : ?>
				<h3 class="bg-title"><?php echo esc_html( $techup_service_title ); ?></h3>
			<?php endif; ?>
			<?php if($techup_service_subtitle) : ?>
				<div class="heading-description">
				  <p><?php echo esc_html($techup_service_subtitle); ?></p>
				</div>
			<?php endif; ?>	
            <div class="heading-divider">
              <div class="heading-seperator">
              </div>
            </div>
          </div>
        <div class="row">
			<?php
			$count = 0;
			while($techup_services_query->have_posts() && $count <= 8 ) :
			$techup_services_query->the_post();
			?> 
			  <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service-box">
				  <div class="icon-box">
					<i class="fa <?php echo esc_attr($techup_service_icon[$count]); ?>"></i>
				  </div>
				  <h4><?php the_title(); ?></h4>
				   <?php the_content(); ?> 
				</div>
			  </div>
        <?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
		?>   
        </div>
      </div>
    </section>
    <!-- End Services Section -->	
	
 <?php } ?>