<?php
/**
 * Template Name: Criacao Site
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
				<div class="col grid_7_of_12">
					<h2>Criação de Site</h2>
					<h5 style="color:#333">Tenha um site profissional para sua empresa</h5>
					<p>
						Estamos inovando mais uma vez, ofrecendo o serviço de criação de sites para locadoras de veículos.<br/><br/>
						A Henji em parceria com a Agência Rino está oferecendo o serviço de criação de sites, com o objetivo de auxiliar sua locadora de veículos a aumentar as vendas.<br/><br/>
						Um site profissional e bem desenvolvido vai atrair cada vez mais clientes para a sua locadora.<br/><br/>
						Se você ainda não possui um site, está deixando de participar de um universo com mais de 105 milhões de pessoas só aqui no Brasil. A cada dia que passa, a internet se torna um meio importantíssimo para atrair clientes.
					</p>
				</div>
				<div class="col grid_5_of_12">
					<br/><br/>
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/criacao-site-grande.png"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col grid_12_of_12">
					<h3>Planos e Valores</h3>
					<p>
						Confira nossos planos e escolha qual modelo vai atender melhor as suas necessidades.<br/>
						Dê o primeiro passo para colocar sua locadora na internet e sair na frente da conorrência.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col grid_6_of_12">
					<ul class="modelo-premium">
						<li class="modelo-header">
							<p>Modelos Premium</p>
							Com o sistema Henji integrado, seu site será uma locadora online. Venda pela internet
						</li>
						<li style="display:none">Você escolhe o modelo de layout</li>
						<li style="display:none">Seu site integrado ao Sistema Henji</li>
						<li style="display:none">Integração ao Google Maps</li>
						<li style="display:none">Integrado com suas redes sociais</li>
						<li style="display:none">Personalização de cores</li>
					<ul>
					<br />
					<a href="<?php echo site_url(); ?>/contrate"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contrate.jpg"; ?>"/></a>
				</div>
				<div class="col grid_6_of_12">
					<ul class="modelo-basico">
						<li class="modelo-header">
							<p>Modelos Básico</p>
							Dê o primeiro passo para sua locadora de veículos ser encontrada na internet.
						</li>
						<li style="display:none">Você escolhe o modelo de layout</li>
						<li style="display:none">Integração ao Google Maps</li>
						<li style="display:none">Integrado com suas redes sociais</li>
						<li style="display:none">Personalização de cores</li>
					<ul>
					<br />
					<a href="<?php echo site_url(); ?>/contrate"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contrate.jpg"; ?>"/></a>
				</div>			
			</div>
		</div>
	</div>
	<div id="secondary" role="main">
		<div class="site-content row">
			<div class="col grid_6_of_12">
				<h3 style="text-align:center">SISTEMA HENJI</h3>
				<h6 style="text-align:center">Sistema de Gestão para locadoras de veículos.</h6>
				<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
				<p style="text-align:center">
					O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos quando e aonde você estiver.
				</p>
				<a href="<?php echo site_url(); ?>/sistema-henji"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
			<div class="col grid_6_of_12">
				<h3 style="text-align:center">GMD</h3>
				<h6 style="text-align:center">Gerenciamento e Manutenção a Distância</h6>
				<a href="<?php echo site_url(); ?>/modulo-gmd"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
				<p style="text-align:center">
					Neste módulo é possível realizar as cotações, negociações e aberturas de Ordens de Serviços pela Internet através da sua própria rede de prestadores de serviços credenciados.
				</p>
				<a href="<?php echo site_url(); ?>/modulo-gmd"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
		</div>
	</div> <!-- /#primary.site-content.row -->

	<?php get_template_part( 'newsletter' ); ?>

<?php get_footer(); ?>
