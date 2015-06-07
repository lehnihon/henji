<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>
	<div id="bannercontainer">
		<div class="banner" >
		</div>
	</div> <!-- /#bannercontainer -->
	<div id="primary" role="main">
		<div class="site-content">
			<div class="row">
				<div class="col grid_12_of_12">
					<h2 style="text-align:center">Módulos Henji</h2>
					<h5 style="text-align:center; color:#333">Sistema para locadora de veículos</h5>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col grid_1_of_12"><br></div>
				<div class="col grid_2_of_12">
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo1.png"; ?>"/></a>
					<h5>Central de Reservas</h5>
					<p>
						Tenha seu próprio site com sua Central de Reservas online.
					</p>
				</div>
				<div  class="col grid_2_of_12">
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo2.png"; ?>"/></a>
					<h5>Módulo Frota</h5>
					<p>
						Controle de toda Frota de Veículos, documentação, multas e SAC.
					</p>			
				</div>
				<div class="col grid_2_of_12">
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo3.png"; ?>"/></a>
					<h5>Módulo Operacional</h5>
					<p>
						Gestão completa da Locadora, com controle total das funcionalidades.
					</p>				
				</div>
				<div class="col grid_2_of_12">
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo4.png"; ?>"/></a>
					<h5>Módulo Manutenção</h5>
					<p>
						Gerenciamento das manutenções preventivas e corretivas.
					</p>			
				</div>
				<div class="col grid_2_of_12">
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo5.png"; ?>"/></a>
					<h5>Módulo Financeiro</h5>
					<p>
						Controle da movimentação financeira, contas a pagas e faturamento.
					</p>			
				</div>
				<div class="col grid_1_of_12"><br></div>

			</div>
			<div class="row">
				<div class="col grid_5_of_12"><br></div>
				<div class="col grid_2_of_12">
					<a href="<?php echo site_url(); ?>/sistema-henji"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
				</div>
				<div class="col grid_5_of_12"><br></div>
			</div>
		</div>
	</div>
	<div id="secondary" role="main">
		<div class="site-content row">
			<div class="col grid_5_of_12">
				<h2 style="text-align:center">GMD</h2>
				<h5 style="text-align:center; color:#333">Gerenciamento e Manutenção a Distância</h5>
				<a href="<?php echo site_url(); ?>/modulo-gmd"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
				<p>
					Neste módulo é possível realizar as cotações, negociações e aberturas de Ordens de Serviços pela Internet através da sua própria rede de prestadores de serviços credenciados.
				</p>
				<a href="<?php echo site_url(); ?>/modulo-gmd"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
			<div class="col grid_1_of_12" ><br/>
			</div>
			<div class="col grid_1_of_12"><br/>
			</div>
			<div class="col grid_5_of_12">
				<h2 style="text-align:center">CRIAÇÃO DE SITE</h2>
				<h5 style="text-align:center; color:#333">Tenha um site para sua empresa</h5>
				<a href="<?php echo site_url(); ?>/criacao-de-site"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/criacao_site.png"; ?>"/></a>
				<p>
					A Henji está inovando mais uma vez, estamos oferecendo o serviço de criação de sites para locadoras de veículos.
				</p>
				<a href="<?php echo site_url(); ?>/criacao-de-site"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
		</div>
	</div> <!-- /#primary.site-content.row -->

	<?php get_template_part( 'newsletter' ); ?>

<?php get_footer(); ?>
