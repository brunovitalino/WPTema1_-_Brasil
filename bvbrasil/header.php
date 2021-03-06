<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Adiciona o mais recente jQuery para fancyBox e sliding-swipe-menu -->
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Adiciona os arquivos fancyBox -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

	<!-- bxSlider Javascript file -->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.css" rel="stylesheet" />

	<!-- CSS stylesheet for sliding-swipe-menu -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slide-and-swipe-menu.css">
    <!-- touchSwipe library -->
    <script src="http://labs.rampinteractive.co.uk/touchSwipe/jquery.touchSwipe.min.js"></script>
	<!-- Slider Javascript file -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.slideandswipe.min.js"></script>

	<?php wp_head(); ?>
</head>
<body>

	<!-- Frame do Menu que abrira na lateral da tela -->
	<nav class="nav">
	    <?php
	    	wp_nav_menu('menu');
	    ?>
	</nav>

<?php 
	if(is_home()) :
?>
		<div class="header">
			<div class="wrap">
				<!-- Logomarca -->
				<h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">BVWP</a></h1>				
				<!-- Menu -->
			    <div class="menu-topo">
			    	<a href="#" class="ssm-toggle-nav" title="open nav">
			    		<span></span>
			    		<span></span>
			    		<span></span>
			    	</a>
			    </div>
				<!-- Resumo Sobre -->
				<div class="info">
					<?php
						$args = array('post_type' => 'page', 'pagename' => 'sobre');
						$my_page = get_posts( $args );
					?>
					<?php
						if($my_page) :
							foreach( $my_page as $post )
							{
								setup_postdata( $post );
					?>
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="custom-botao">Leia mais</a>
					<?php
							}
						else:
					?>
							<p>Nenhum conteudo inserido na pagina sobre.</p>
					<?php
						endif;
					?>					
				</div>
			</div>
		</div>
<?php 
	else:
?>
		<div class="header-page">
			<div class="wrap">
				<!-- Logomarca -->
				<h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">BVWP</a></h1>
				<!-- Menu -->
			    <div class="menu-topo menu-interno">
			    	<a href="#" class="ssm-toggle-nav" title="open nav">
			    		<span></span>
			    		<span></span>
			    		<span></span>
			    	</a>
			    </div>
			</div>
			<div class="clear"></div>
		    <!--Pagina interna -->
			<div class="bg-page">
				<div class="wrap">
					<?php 
						if(is_category()) :
					?>
							<h2>Blog</h2>
					<?php 
						else:
					?>
							<h2><?php the_title(); ?></h2>
					<?php 
						endif;
						wp_custom_breadcrumbs();
					?>
				</div>
			</div>
		</div>
<?php
	endif;
?>