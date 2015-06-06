<?php
/**
 * Template Name: Sistema Henji
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
					<h2>Sistema Henji</h2>
					<h5 style="color:#333">Sistema de Gestão para Locadoras de Carros.</h5>
					<p>
						O Sistema de Gestão de Locadoras de Veículos Henji, coloca sua empresa em suas mãos e aonde você estiver.<br/><br/>
						É um sistema de gestão completo que vai atender todas as necessidades da sua empresa, seja ela de pequeno, médio ou grande porte.<br/><br/>
						O sistema Henji tem diferentes níveis de controle de acesso, além de poder ser acessado de qualquer lugar, basta ter uma conexão com internet.
					</p>
				</div>
				<div class="col grid_5_of_12">
					<br/><br/>
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd-grande.png"; ?>"/>
				</div>
			</div><br><br>
			<div class="row site-content">
				<div class="col grid_12_of_12">
					<h3>Descrição dos módulos que compõem o sistema:</h3>
				</div>
			</div>
			<div class="row">
				<div class="col grid_1_of_12" style="padding-top:20px">
					<img class="botaoa closed" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
				</div>
				<div class="col grid_1_of_12" style="padding-top:10px" >
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo1.png"; ?>"/>
				</div>
				<div class="col grid_10_of_12" >
					<h5>Central de Reservas</h5>
					<h5 style="color:#333">Tenha seu próprio site com sua central de Reservas online.</h5>
				</div>
			</div>
			<div class="row tabelaa" style="display:none">
				<div class="col grid_1_of_12"><br/>
				</div>
				<div class="col grid_5_of_12" style="padding-top:10px" >
					<ul>
						<li>Reservas de veículos através da internet.</li>
						<li>Disponibilidade de locais diferentes de entrega e retorno.</li>
						<li>Integrado com o sistema operacional da locadora.</li>
						<li>Confirmação de reservas via e-mail.</li>
					</ul>
				</div>
				<div class="col grid_5_of_12" >
					<ul>
						<li>Cadastro de pontos de atendimentos.</li>
						<li>Imagens de veículos por categoria.</li>
						<li>Tarifas, taxas e adicionais.</li>
						<li>Atualização em tempo real com a locadora.</li>
					</ul>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>
			</div>
			<div class="row">
				<div class="col grid_1_of_12" style="padding-top:20px">
					<img class="botaob closed" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
				</div>
				<div class="col grid_1_of_12" style="padding-top:10px" >
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo2.png"; ?>"/>
				</div>
				<div class="col grid_10_of_12" >
					<h5>Módulo Frota</h5>
					<h5 style="color:#333">Controle de toda a Frota de Veículos, documentação, multas e SAC.</h5>
				</div>
			</div>
			<div class="row tabelab" style="display:none">
				<div class="col grid_1_of_12"><br/>
				</div>
				<div class="col grid_5_of_12" style="padding-top:10px" >
					<ul>
						<li>Loja, filiais, franquias e redes,</li>
						<li>SAC - sitemas de atendimento ao cliente da locadora,</li>
						<li>Cadastro de veículos,</li>
						<li>Assistência 24 horas,</li>
						<li>Imagens,</li>
						<li>IPVA,</li>
						<li>Consultas de lacalização de veículos,</li>
						<li>Licenciamento e documentação,</li>
						<li>Fabricantes,</li>	
						<li>Seguro obrigatório,</li>
						<li>Formas de aquisição,</li>	
						<li>Inspeção veicular para SP,</li>
						<li>Grupos e categorias de veículos,</li> 		
						<li>Termos de declaração,</li>
						<li>Modelos,</li>	
					</ul>
				</div>
				<div class="col grid_5_of_12" >
					<ul>
						<li>Controle de vistoria de veículos,</li>
						<li>Valor de mercado,</li>	 		
						<li>Posição de frota em tempo real,</li>
						<li>Valor atualizado de frota,</li>	 		
						<li>Sumário de utilização da frota,</li>
						<li>Ajuste de hodômetro,</li>	 		
						<li>Idade média,</li>
						<li>Multas e notificações,</li>	 		
						<li>Controle de kilometragem,</li>
						<li>Pontuações,</li>	 		
						<li>Momento de venda para renovação da frota,</li>
						<li>Controle de veículos sublocados e empresas proprietárias,</li>
						<li>Utilização mensal da frota,</li>
						<li>Compra de veículos sublocados.</li>
					</ul>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>
			</div>
			<div class="row">
				<div class="col grid_1_of_12" style="padding-top:20px">
					<img class="botaoc closed" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
				</div>
				<div class="col grid_1_of_12" style="padding-top:10px" >
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo3.png"; ?>"/>
				</div>
				<div class="col grid_10_of_12" >
					<h5>Módulo Operacional</h5>
					<h5 style="color:#333">Gestão completa da Locadora, com controle total das funcionalidades.</h5>
				</div>
			</div>
			<div class="row tabelac" style="display:none">
				<div class="col grid_1_of_12"><br/>
				</div>
				<div class="col grid_5_of_12" style="padding-top:10px" >
					<ul>
						<li>Controle total de clientes</li>
						<li>Totalmente integrado automaticamente com o sitema financeiro </li>	 	 	 
						<li>Imagens de documentação do cliente</li>	 		
						<li>Tarifas por grupos / categorias de veículos</li>
						<li>Ficha financeira do cliente no ato da abertura do contrato para análise de crédito</li>	 		
						<li>Comissões para promotores e colaboradores externos</li>
						<li>Lista de alerta (lista negra) integrada</li>	 
						<li>Controle de motoristas locadora com dias trabalhados e horas extras</li>
						<li>Programa fidelidade do cliente para futuras promoções</li>
						<li>Motorista adicional do cliente</li>
						<li>Ranking de clientes	 </li>		
						<li>Metas de faturamento</li>
						<li>Contratos mensais</li>	 		
						<li>Substituições de veículos em contrato</li>
						<li>Contratos diários - Rent a Car	 </li>		
						<li>Controle de veículos provisórios em contrato - Alerta de troca</li>
						<li>Terceirização de frota 'pacotes'	</li> 		
						<li>Tráfego - uso interno e km improdutiva</li>
						<li>Contratos exclusivos para seguradoras ou convênios</li>	 	
						<li>Controle de pequenas manutenções de veículos em contrato sem efetuar substituição</li>
						<li>Contratos para transfers (vans e ônibus) com agendamento de tarefas (intinerários)</li>	 		
						<li>Controle de reservas efetivas e sob previsão</li>
						<li>Personalização de contratos</li>
						<li>Gerador de relatórios com definições de campos e parâmetros de emissão</li>
						<li>Check list dos veículos, acessórios e opcionais	</li> 		
						<li>Relatórios gerenciais da frota</li>
						<li>Cláusulas contratuais	 </li>		
						<li>Faturamento x terceirizações</li>
						<li>Adendo contratual	 </li>	
						<li>Termos de responsabilidades para reembolso de multas e avarias</li>
						<li>Pro-rata	</li>
					</ul>
				</div>
				<div class="col grid_5_of_12" >
					<ul>
						<li>Controle de compensação de franquia de km para clientes com vários veículos locados</li>
						<li>Renovação automática de contratos	 	</li>	
						<li>Controle de numeração de contratos</li>
						<li>Reajuste de contratos através de índices pré estabelecidos	Gráficos</li>
						<li>Taxas de serviços, entrega e devolução	 </li>		
						<li>Demonstrativos financeiros de contratos para faturamento</li>
						<li>Formas de recebimentos - cash, cartão de crédito, faturados, etc	</li> 		
						<li>Projeção de recebimentos</li>
						<li>Controle de pré autorizações de cartões de crédito	 </li>	
						<li>Daliy Report</li>
						<li>Cadastro de proteções em contratos	 </li>		
						<li>Movimento diário da locadora para acompanhamento operacional x financeiro</li>
						<li>Lavagem	 		</li>
						<li>Over due</li>
						<li>GPS	 		</li>
						<li>Relatório diário de operações</li>
						<li>Despesas adicionais de contrato	 	</li>	
						<li>Clientes x contratos</li>
						<li>Reembolso de avarias em contrato	</li> 		
						<li>Clientes em potencial a serem trabalhados pelo comercial</li>
						<li>Contratos para terceirização com centros de custos e controle de usuários	</li> 		
						<li>Proposta comercial - acompanhamento por etapas pré definidas</li>
						<li>Controle de combustíveis em contrato	</li> 		
						<li>Previsões de locações pelo comercial</li>
						<li>Controle de abastecimentos	 </li>		
						<li>Relação e envio de e-mail para aniversariantes</li>
						<li>Autorização de abastecimentos e serviços em postos	</li> 	
						<li>Comercial - análise de origem do cliente na locadora</li>
						<li>Cadastramento de postos e serviços	 	</li>	
						<li>Análise comercial do ramo de atividade dos clientes para futuras ações</li>
						<li>Clientes inativos para ação comercial	 </li>	 
					</ul>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>
			</div>
			<div class="row">
				<div class="col grid_1_of_12" style="padding-top:20px">
					<img class="botaod closed" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
				</div>
				<div class="col grid_1_of_12" style="padding-top:10px" >
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo4.png"; ?>"/>
				</div>
				<div class="col grid_10_of_12" >
					<h5>Módulo Manutenção</h5>
					<h5 style="color:#333">Gerenciamento das manutenções preventivas e corretivas.</h5>
				</div>
			</div>
			<div class="row tabelad" style="display:none">
				<div class="col grid_1_of_12"><br/>
				</div>
				<div class="col grid_5_of_12" style="padding-top:10px" >
					<ul>
						<li>Controle de manutenções corretivas e preventivas</li>
						<li>Ultimas compras, análise de fornecedores e veículos</li>
						<li>Plano de revisões</li>	 		
						<li>Abertura, fechamento e emissão de ordens de serviços</li>
						<li>Serviços executados nas revisões</li>	 		
						<li>Consulta automática a serviços preventivos</li>
						<li>Grupo de serviços</li>	 		
						<li>Controle de os x notas emitidas</li>
						<li>Subgrupo de serviços</li>	 		
						<li>Faturamento x manutenções</li>
						<li>Itens e serviços</li>	 		
						<li>Análise por cliente de faturamento x despesas</li>
						<li>Definições de serviços a serem executados nas revisões	</li> 	
						<li>Evolução dos custos do km rodado</li>
					</ul>
				</div>
				<div class="col grid_5_of_12" >
					<ul>
						<li>Digitação de km para medições</li>	 		
						<li>Histórico detalhado de manutenção dos veículos</li>
						<li>Fornecedores</li>	 		
						<li>Resumos de manutenção por modelo e grupos de serviços</li>
						<li>Cadastro, análise e aprovação de cotações</li>	 		
						<li>Manutenção reembolsável</li>
						<li>Cadastro de compras	</li> 		
						<li>Cronograma de revisões futuras</li>
						<li>Ordens de compra integrado com a cotação</li>	 		
						<li>Snistros</li>
						<li>Controle de estoque - movimentação de itens	</li> 		
						<li>Imagens de avarias e sinistros</li>
						<li>Apropriação de itens de estoque para cada veículo</li>
					</ul>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>
			</div>
			<div class="row">
				<div class="col grid_1_of_12" style="padding-top:20px">
					<img class="botaoe closed" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.png"; ?>"/>
				</div>
				<div class="col grid_1_of_12" style="padding-top:10px" >
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/modulo5.png"; ?>"/>
				</div>
				<div class="col grid_10_of_12" >
					<h5>Módulo Financeiro</h5>
					<h5 style="color:#333">Controle da movimentação financeira, contas a pagar e faturamento.</h5>
				</div>
			</div>
			<div class="row tabelae" style="display:none">
				<div class="col grid_1_of_12"><br/>
				</div>
				<div class="col grid_5_of_12" style="padding-top:10px" >
					<ul>
						<li>Faturamento integrado com contratos emitidos, cobrança bancaria e notas eletronicas</li>	 		
						<li>Renegociação de saldos de financiamentos</li>
						<li>Controle de títulos bancarios a pagar e a receber</li>	 	
						<li>Faturamento X Contratos de locação</li>
						<li>Variasopções de baixas</li>	 		
						<li>Ficha financeira</li>
						<li>Aprovação de pagamentos parametrizado por permissão de usuário</li>	 		
						<li>Controle de bancos - saldos e extratos</li>
						<li>Calculos para atualizações de multas e juros bancarios</li>	 	
						<li>Cobrança bancária integrada com faturamento - remessa e baixa automática</li>
						<li>Depósito, saques e transferenciais</li>	 		
						<li>Classificação de receitas e despesas através de códigos financeiros</li>
						<li>Conciliação bancaria</li>	 		
						<li>Plano de contas para classificação contábil para exportar dados para qualquer sistema contabil</li>
						<li>Controle de depósitos não identificados</li>	 		
						<li>Centros de custos</li>
						<li>Movimentação bancaria</li>	 		
						<li>Balancete gerencial</li>
						<li>Históricos de movimentação de títulos a pagar e a receber	</li>
						<li>Mala direita - Via etiquetas e e-mail</li>
						<li>Cópia de cheques emitidos</li>	 		
						<li>Controle de recebimentos através de cartões de créditos</li>
						<li>Gráficos</li>
					</ul>
				</div>
				<div class="col grid_5_of_12" >
					<ul>
						<li>Emissão de notas ficais personalizadas	 		
						<li>Tipos de formas de recebimentos e pagamentos flexíveis - A própria locadora cria da forma mais conveniente</li>
						<li>Customização da nota fiscal eletrônica conforme prefeitura	</li>
						<li>Controle de venda de veículos da locadora</li>
						<li>Nota de débito normal e digital - possibilidade de envio via e-mail	 </li>		
						<li>Emissão de contratos de consignação de vendas de veículos</li>
						<li>Controle diferenciado entre notas fiscais e notas de débito	 </li>		
						<li>Emissão de nota fiscal ou recibo para venda do veículo</li>
						<li>Cotrole de cancelamento de notas</li>	 		
						<li>Despesas administrativas</li>
						<li>Notas para emissão de reembolso de multas e avarias</li>	 	
						<li>Fluxo de caixa analítico e sintético</li>
						<li>Nota promissoria e recebimentos personalizados</li>	 		
						<li>Gestão empresarial - Cash Flow</li>
						<li>Parcelamento de títulos	 </li>		
						<li>Apuração de lucro não operacional</li>
						<li>Controle financeiro da aquisição de veículos - CDC e Leasing	 	</li>	
						<li>Relatórios financeiros</li>
						<li>Substituição de garantia</li>	 		
						<li>Movimento operacional e financeiro anual</li>
						<li>Reajuste de parcelas de aquisição de veículos</li>	 		
						<li>Resumo anual</li>
						<li>Verificação de quitação de veículos	</li> 
					</ul>
				</div>
				<div class="col grid_1_of_12"><br/>
				</div>
			</div>


		</div>
	</div>
	<div id="secondary" role="main">
		<div class="site-content row">
			<div class="col grid_5_of_12">
				<h3 style="text-align:center">GMD</h3>
				<h6 style="text-align:center">Gerenciamento e Manutenção a Distância</h6>
				<a href="#"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/gmd.png"; ?>"/></a>
				<p>
					Neste módulo é possível realizar as cotações, negociações e aberturas de Ordens de Serviços pela Internet através da sua própria rede de prestadores de serviços credenciados.
				</p>
				<a href="#"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>

			<div class="col grid_1_of_12" ><br/>
			</div>
			<div class="col grid_1_of_12"><br/>
			</div>	
			<div class="col grid_5_of_12">
				<h3 style="text-align:center">CRIACÃO DE SITE</h3>
				<h6 style="text-align:center">Tenha um site para sua empresa</h6>
				<a href="#"><img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/criacao_site.png"; ?>"/></a>
				<p>
					A Henji está inovando mais uma vez, estamos oferecendo o serviço de criação de sites para locadoras de veículos.
				</p>
				<a href="#"><img class="saiba-mais" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/saiba_mais.png"; ?>"/></a>
			</div>
		</div>
	</div> <!-- /#primary.site-content.row -->

	<?php get_template_part( 'newsletter' ); ?>

<?php get_footer(); ?>
