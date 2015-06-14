<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

<div id="tertiary" role="main">
	<div class="site-content row">
		<div class="col grid_4_of_12" >
			<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/newsletter.png"; ?>"/>
		</div>		
		<div class="col grid_8_of_12" style="height:100%" >
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }	?>		
		</div>
	</div>
</div>