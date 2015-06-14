<?php
/**
 * Template Name: Modulo GMD
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
					<h2>Módulo GMD</h2>
					<h5 style="color:#333">Gerenciamento de Manutenção à Distância.</h5>
					<p>
						Neste módulo é possível realizar as cotações, negociações e aberturas de Ordens de Serviços pela Internet através da sua própria rede de prestadores de serviços credenciados.<br/><br/>
						O condutor leva o veículos para o prestador de serviço (fornecedor) que acessa a internet e lança todos os serviços e peças necessárias para a revisão seja ela preventiva ou corretiva.<br/><br/>
						Em tempo real, a empresa recebe o orçamento e inicia o processo de negociação, avaliando últimos preços pagos, necessidade de troca, prazos, descontos concedidos, poder de negociação do administrador, etc.<br/><br/>
						Após ser aprovado, automaticamente, a cotação torna-se uma OS que é integrada ao sistema de Gestão de Locação.
					</p>
				</div>
				<div class="col grid_5_of_12">
					<br/><br/>
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd-grande.png"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col grid_12_of_12">
					<h5 style="color:#333; text-align:center">Gerenciamento de Manutenção a Distância.</h5>
				</div>
			</div>
			<div class="row">
				<div class="col grid_6_of_12">
					<p class="cor-padrao">
						Abertura e análise de orçamentos online, conectando diretamente com seu prestador, sem intermediários, reduzindo custos de manutenção e mão de obra.<br/><br/>
						Tenha um ganho de qualificação profissional de sua rede credenciada e seus funcionários, com acompanhamento de metas estabelecidas e níveis de aprovação.<br/><br/>
						Integração total com o módulo de manutenção.<br/><br/>
						Converta comissões pagas em descontos.
					</p>
				</div>
				<div class="col grid_6_of_12" >
					<p class="cor-padrao">
						Criação de rede credenciada para seu cliente.<br/><br/>
						Análise de serviços executados através de fornecedores por região.<br/><br/>
						Histórico de manutenções dos veículos.<br/><br/>
						Análise de orçamentos através de status (aprovados, não aprovados, em andamento, etc).<br/><br/>
						Fique próximo de seu cliente com o auto atendimento.
					</p>
				</div>
			</div>
			<div class="row site-content">
				<div class="col grid_12_of_12">
					<a href="<?php echo site_url(); ?>/contato"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solicite_senha.jpg"; ?>"/></a>
				</div>
			</div>
		</div>
	</div>
	<div id="secondary" role="main">
		<div class="site-content row">
			<div class="col grid_6_of_12 solucoes-padding">
				<h3 style="text-align:center">SISTEMA HENJI</h3>
				<h6 style="text-align:center">Sistema de Gestão para locadoras de veículos.</h6>
				<a href="<?php echo site_url(); ?>/sistema-henji"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
				<p style="text-align:center">
					O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos quando e aonde você estiver.
				</p>
				<a href="<?php echo site_url(); ?>/sistema-henji"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
			<div class="col grid_6_of_12 solucoes-padding">
				<h3 style="text-align:center">CRIAÇÃO DE SITE</h3>
				<h6 style="text-align:center">Tenha um site para sua empresa</h6>
				<a href="<?php echo site_url(); ?>/criacao-de-site"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/criacao_site.png"; ?>"/></a>
				<p style="text-align:center">
					A Henji está inovando mais uma vez, estamos oferecendo o serviço de criação de sites para locadoras de veículos.
				</p>
				<a href="<?php echo site_url(); ?>/criacao-de-site"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
		</div>
	</div> <!-- /#primary.site-content.row -->

	<?php get_template_part( 'newsletter' ); ?>

<?php get_footer(); ?>
