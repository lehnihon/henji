<?php
/**
 * Template Name: Sobre
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
					<h2>A Henji</h2>
					<h5 style="color:#333">A maior desenvolvedora de sistema de gestão para locadoras de veículos.</h5>
					<p>A Henji é uma empresa brasileira fundada em 1994. Desenvolve sistemas de gestão para locadoras de veículos e tem como objetivo, proporcionar aos usuários de seus sistemas, um completo e personalizado treinamento para que o objetivo da implantação, seja alcançado com segurança e confiabilidade.
						<br>Prestando serviços de consultoria, assessoria com treinamento interno e externo, efetuando customizações de acordo com as necessidades do cliente, mantém seus sistemas sempre atualizados com o que há de mais moderno em tecnologia.
						<br>Atualmente a Henji contabiliza mais de 500 sistemas instalados em todo o país e com aproximadamente 3 mil usuários ativos e conta com uma equipe altamente qualificada e estrutura adequada para um atendimento de excelente qualidade.
					</p>
					<h5 style="color:#333">Implantação e Treinamento.</h5>
					<p>A Henji presta toda assistência no processo de implantação e treinamento do sistema Love. Nossos clientes são acompanhados in-loco por profissionais altamente capacitados, com profundos conhecimentos técnicos e gestão do negócio, auxiliando-os nas definições de regras e parâmetros do sistema, além de capacitar os usuários de cada área para o uso do sistema de gestão de veículos Love.</p>
					<h5 style="color:#333">Desenvolvimento de Aplicativos Específicos.</h5>
					<p>Conforme a necessidade, a Henji também customiza e desenvolve programas específicos, com objetivo de atender a demanda de cada cliente.</p>
					<h5 style="color:#333">Consultoria Operacional e Tecnológica.</h5>
					<p>A Henji conta com uma equipe de consultores voltados para as áreas operacional e tecnologia de seus clientes.</p>
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
