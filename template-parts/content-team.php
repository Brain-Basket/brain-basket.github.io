<?php 
$techup_enable_team_section = get_theme_mod( 'techup_enable_team_section', false );
$techup_team_title  = get_theme_mod( 'techup_team_title' );
$techup_team_subtitle  = get_theme_mod( 'techup_team_subtitle' );
?>
	
<?php 
if($techup_enable_team_section==true ) {
    

        $techup_teams_no        = 6;
        $techup_teams_pages      = array();
        for( $i = 1; $i <= $techup_teams_no; $i++ ) {
             $techup_teams_pages[] = get_theme_mod('techup_team_page'.$i);

        }
        $techup_teams_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_teams_pages ),
        'posts_per_page' => absint($techup_teams_no),
        'orderby' => 'post__in'
        ); 
        $techup_teams_query = new WP_Query( $techup_teams_args );
      

?>
<!-- ======= Team Section ======= -->
    <section id="team" class="team-5 educ-home">
      <div class="container">
        <div class="section-heading text-center">
			<?php if($techup_team_title) : ?>
				<h3 class="bg-title"><?php echo esc_html($techup_team_title); ?></h3>
			<?php endif; ?>	
			<?php if($techup_team_subtitle) : ?>
				<div class="heading-description">
				  <p><?php echo esc_html($techup_team_subtitle); ?></p>
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
			while($techup_teams_query->have_posts() && $count <= 5 ) :
			$techup_teams_query->the_post();
			?> 
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="our-team">
                <?php the_post_thumbnail(); ?>
                <div class="team-content">
                    <h3 class="team-prof">
                        <?php the_title(); ?>
					<small><?php echo esc_html(get_the_excerpt()); ?></small>	
                    </h3>
                </div>
              </div>
            </div>
			<?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
			?>     
           
          
        </div>
      </div>
    </section><!-- End Team Section -->

<?php } ?>