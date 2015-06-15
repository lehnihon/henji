<?php
/**
 * Template Name: Solucoes
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
					<h2>Soluções Henji</h2>
					<h5 style="color:#333">Sistema de gestão para locadoras de carros.</h5>
					<p>
						O Sistema Henji coloca sua empresa em suas mãos e onde você quiser. É um sistema completo para Gestão de Locadoras de Veículos.
					</p>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col grid_3_of_12">
					<h3 style="text-align:center">SISTEMA HENJI</h3>
					<h6 style="text-align:center">Sistema de Gestão para locadoras de veículos.</h6>
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
					<p style="text-align:center">
						O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos quando e aonde você estiver.
					</p>
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
				</div>
				<div class="col grid_1_of_12" ><br/>
				</div>
				<div class="col grid_3_of_12">
					<h3 style="text-align:center">GMD</h3>
					<h6 style="text-align:center">Gerenciamento e Manutenção a Distância</h6>
					<a href="<?php echo site_url(); ?>/modulo-gmd"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
					<p style="text-align:center; margin-top:30px; margin-bottom:40px">
						Neste módulo é possível realizar as cotações, negociações e aberturas de Ordens de Serviços pela Internet.
					</p>
					<a href="<?php echo site_url(); ?>/modulo-gmd"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>			
				<div class="col grid_3_of_12">
					<h3 style="text-align:center">CRIAÇÃO DE SITE</h3>
					<h6 style="text-align:center">Tenha um site para sua empresa</h6>
					<a href="<?php echo site_url(); ?>/criacao-de-site"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/criacao_site.png"; ?>"/></a>
					<p style="text-align:center; margin-top:30px">
						A Henji está inovando mais uma vez, estamos oferecendo o serviço de criação de sites para locadoras de veículos.
					</p>
					<a href="<?php echo site_url(); ?>/criacao-de-site"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
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
