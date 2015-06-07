<?php
/**
 * Template Name: Contrate
 *
 * Description: Displays a full-width front page. The front page template provides an optional
 * banner section that allows for highlighting a key message. It can contain up to 2 widget areas,
 * in one or two columns. These widget areas are dynamic so if only one widget is used, it will be
 * displayed in one column. If two are used, then they will be displayed over 2 columns.
 * There are also four front page only widgets displayed just beneath the main content. Like the
 * banner widgets, they will be displayed in anywhere from one to four columns, depending on
 * how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>
	<div id="primary" role="main">
		<div class="site-content">
			<div class="row">
				<div class="col grid_12_of_12">
					<h2>Contrate</h2>
					<h5 style="color:#333">Entre em contato com a Henji.</h5>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col grid_6_of_12">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 11 ); } ?>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>	
				<div class="col grid_5_of_12">
					<iframe id="map-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.410867648702!2d-46.5429436!3d-23.6970174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423ad6ecf095%3A0xc7729dbdc8ce38e5!2sR.+Am%C3%A9rico+Batista%2C+12+-+Baeta+Neves%2C+S%C3%A3o+Bernardo+do+Campo+-+SP%2C+09760-330!5e0!3m2!1spt-BR!2sbr!4v1433612421303" frameborder="0" ></iframe>
					<h6>Endereço</h6>
					<p>
						Rua Américo Batista, 12 - Baeta Neves<br/>
						São Bernardo do Campo - SP
					</p>
					<h6>Telefones</h6>
					<p>
						11 4332-1944<br/>
						11 4332-9871<br/>
						11 4337-8404
					</p>
				</div>		
			</div>
		</div>
	</div>
	<div id="secondary" role="main">
		<div class="site-content row">
		</div>
	</div> <!-- /#primary.site-content.row -->


<?php get_footer(); ?>
