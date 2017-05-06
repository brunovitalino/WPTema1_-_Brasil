
<div class="footer">
	<div class="wrap">
		<h2>Fale conosco</h2>
		<?php 
			echo FrmFormsController::get_form_shortcode( array('id' => 2, 'key' => '', 'title' => false, 'description' => false, 'readonly' => false, 'entry_id' => false) );
		?>
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