<?php
/**
 * Template Name: Parceiros
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
					<h2>Parceiros</h2>
					<h5 style="color:#333">Liderança não se conquista por acaso.</h5>
					<p>
						Construimos ao longo de mais de 20 anos uma sólida rede de parcerias, que fortalece ainda mais nossos produtos.<br/>
						A Henji e seus parceiros estão focados em um objetivo: o sucesso dos clientes.
					</p>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col grid_12_of_12">
					<h3 style="text-align:center">Conheça nossos parceiros:</h3>
				</div>
			</div>
			<div class="row site-content">
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro1.jpg"; ?>"/>
				</div>
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro2.jpg"; ?>"/>
				</div>
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro3.jpg"; ?>"/>
				</div>
			</div>
			<div class="row site-content">
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro4.jpg"; ?>"/>
				</div>
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro5.jpg"; ?>"/>
				</div>
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/parceiro6.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</div>
	<div id="secondary" role="main">
		<div class="site-content row">
		</div>
	</div> <!-- /#primary.site-content.row -->

	<?php get_template_part( 'newsletter' ); ?>

<?php get_footer(); ?>
