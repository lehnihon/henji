<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

		<?php	do_action( 'quark_after_woocommerce' ); ?>
	</div> <!-- /#maincontentcontainer -->

	<div id="footercontainer">
		<br>
		<footer class="site-footer row" role="contentinfo">
			<div class="col grid_4_of_12" >
				<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_header.png"; ?>" alt="" /><br><br>
				<h4>Liderança não se conquista por acaso.</h4>
				<p>A Henji é uma empresa que desenvolve sistemas para gestão de locadoras de veículos.</p>
			</div>
			<div class="col grid_2_of_12" ><br/>
			</div>
			<div class="col grid_2_of_12" >
				<h4>Soluções</h4><br>
				<ul>
					<li><a href="<?php echo site_url(); ?>/sistema-henji">Sistema Henji</a></li>
					<li><a href="<?php echo site_url(); ?>/modulo-gmd">GMD</a></li>
					<li><a href="<?php echo site_url(); ?>/criacao-de-site">Criação de Site</a></li>
					<li><a href="<?php echo site_url(); ?>/contato">Experimente</a></li>
				</ul>
			</div>
			<div class="col grid_2_of_12" >
				<h4>Institucional</h4><br>
				<ul>
					<li><a href="#">Sobre Nós</a></li>
					<li><a href="<?php echo site_url(); ?>/parceiros">Parceiros</a></li>
					<li><a href="<?php echo site_url(); ?>/contato">Localização</a></li>
				</ul>
			</div>
			<div class="col grid_2_of_12" >
				<h4>Atendimento</h4><br>
				<ul>
					<li><a href="<?php echo site_url(); ?>/contato">Suporte</a></li>
					<li><a href="<?php echo site_url(); ?>/contato">Contato</a></li>
					<li>Telefone 11 4332-8787</li>
				</ul>
			</div>
		</footer><br>
	</div> <!-- /.footercontainer -->
	<div id="footercontainercopy">

		<footer class="row">
			<p>©Copyright 2015 - Henji</p>
		</footer> 
	</div> <!-- /.footercontainer -->
</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
<script>
	var dirbase = "<?php echo dirname( get_bloginfo('stylesheet_url')) ?>";
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
</body>

</html>
