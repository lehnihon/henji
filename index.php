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
	<div id="primary" role="main">
		<div class="site-content">
			<div class="row">
				<div class="col grid_12_of_12">
					<h2>Módulos Henji</h2>
					<h5>Sistema para locadora de veículos</h5>
				</div>
			</div>
			<div class="row">
				<div class="col grid_1_of_12"><br></div>
				<div class="col grid_2_of_12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo1.png"; ?>"/>
					<p>
						Tenha seu próprio site com sua Central de Reservas online.
					</p>
				</div>
				<div  class="col grid_2_of_12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo2.png"; ?>"/>
					<p>
						Controle de toda Frota de Veículos, documentação, multas e SAC.
					</p>			
				</div>
				<div class="col grid_2_of_12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo3.png"; ?>"/>
					<p>
						Gestão completa da Locadora, com controle total das funcionalidades.
					</p>				
				</div>
				<div class="col grid_2_of_12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo4.png"; ?>"/>
					<p>
						Gerenciamento das manutenções preventivas e corretivas.
					</p>			
				</div>
				<div class="col grid_2_of_12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo5.png"; ?>"/>
					<p>
						Controle da movimentação financeira, contas a pagas e faturamento.
					</p>			
				</div>
				<div class="col grid_1_of_12"><br></div>

			</div>
			<div class="row">
				<div class="col grid_5_of_12"><br></div>
				<div class="col grid_2_of_12">
					<a href="#"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
				</div>
				<div class="col grid_5_of_12"><br></div>
			</div>
		</div>
	</div>
	<div id="secondary" class="site-content row" role="main">
		<div class="site-content row">
			<div class="col grid_12_of_12">
				conteudo
			</div>
		</div>
	</div> <!-- /#primary.site-content.row -->
	<div id="tertiary" class="site-content row" role="main">
		<div class="site-content row">
			<div class="col grid_12_of_12">
				conteudo
			</div>
		</div>
	</div>

<?php get_footer(); ?>
