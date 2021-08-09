<?php
$techup_enable_callout_section1 = get_theme_mod( 'techup_enable_callout_section1', true );
$techup_co1_image = get_theme_mod( 'techup_co1_image' );

if($techup_enable_callout_section1 == true ) {
   
$techup_callout_title1 = get_theme_mod( 'techup_callout_title1');
$techup_callout_content1 = get_theme_mod( 'techup_callout_content1');
if($techup_co1_image=="")
{
	$techup_co1_image = esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ); 
}
?>
<section class="edu-home cta-2" style="background-image:url('<?php echo esc_url($techup_co1_image); ?>')">
  <div class="cta-2-wrapper">
	  <div class="row">
		<div class="col-md-6" ></div>
		<div class="col-md-6">
		  <div class="cta-content">
			<h1 class="sub-title">
			  <?php echo esc_html($techup_callout_title1); ?>
			</h1>
			<p class="cta-description"><?php echo esc_html($techup_callout_content1); ?></p>
		  </div>
		</div>          
	  </div>
	</div>
</section>

<?php } ?>