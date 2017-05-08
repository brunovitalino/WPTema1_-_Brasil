
<div class="footer">
	<div class="wrap">
		<h2>Fale conosco</h2>
		<?php 
			echo FrmFormsController::get_form_shortcode( array('id' => 2, 'key' => '', 'title' => false, 'description' => false, 'readonly' => false, 'entry_id' => false) );
		?>
	</div>
</div>

<div class="footer2">
	<div class="wrap">
		<p>© 2017 - Todos os direitos reservados - Bruno Vitalino.</p>
		<ul class="soc">
		    <li><a class="soc-twitter" href="#"></a></li>
		    <li><a class="soc-facebook" href="#"></a></li>
		    <li><a class="soc-googleplus" href="#"></a></li>
		    <li><a class="soc-pinterest" href="#"></a></li>
		    <li><a class="soc-linkedin" href="#"></a></li>
		    <li><a class="soc-rss soc-icon-last" href="#"></a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>

<script type="text/javascript">
	$("[data-fancybox]").fancybox({
		// Options will go here
		//Dificulta a tentativa de download de suas imagens após desabilitar o click direito
		protect: true
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.bxslider').bxSlider();
	});
</script>

<?php wp_footer(); ?>
</body>
</html>