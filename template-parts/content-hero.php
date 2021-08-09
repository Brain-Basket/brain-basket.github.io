<?php
/**
 * Template part for displaying section of banner content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage techup
 * @since 1.0 
 */
$techup_enable_banner_section = get_theme_mod( 'techup_enable_banner_section', true );
$techup_banner_image = get_theme_mod( 'techup_banner_image', esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ) );
$techup_banner_title = get_theme_mod( 'techup_banner_title','');
$techup_banner_content = get_theme_mod( 'techup_banner_content','');
$techup_banner_button_label1 = get_theme_mod( 'techup_banner_button_label1','');
$techup_banner_button_link1 = get_theme_mod( 'techup_banner_button_link1','');
      
if($techup_enable_banner_section==true ) {
?>  
<!-- ======= Hero Section ======= -->
 <section class="hero-sec beg-img educ-home" style="background-image:url(<?php if($techup_banner_image) { echo esc_url($techup_banner_image); } else { echo esc_url(get_header_image()); } ?>)">
      <div class="container">
        <div class="row">
          <div class="content-sec">
            <div class="col-md-6">
              <h2 class="section-title"><?php echo esc_html($techup_banner_title); ?> </h2>
              <p class="section-subtitle"><?php echo esc_html($techup_banner_content); ?></p>
				<?php if($techup_banner_button_label1) :?>	
					<div class="btn-wraper">
						<a href="<?php echo esc_url($techup_banner_button_link1); ?>" class="home-btn"><?php echo esc_html($techup_banner_button_label1); ?></a>
					</div>
				<?php endif; ?>	 
            </div>
          </div>
        </div>
      </div>
    </section>
 
<?php
}
?>