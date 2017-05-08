<?php get_header(); ?>

<div class="content">
	<div class="wrap">
		

	<div class="blog">

		<div class="box-listar-posts">
			<?php
				$cont = 1;
				if( have_posts() ) :
					while (have_posts()) :
						the_post();
			?>
						<div class="listar-posts <?php if ( ($cont % 2) == 0 ) echo "segundo-post" ?>">
							<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-posts.jpg"> -->
							<?php the_post_thumbnail() ?>
							<div class="box-content-post">
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
								<a class="custom-botao" href="<?php the_permalink(); ?>">Leia mais</a>
							</div>
						</div>
			<?php
					$cont++;
					endwhile;
				endif;
			?>
		</div>

	</div>

	<div class="clear"></div>


	</div>
</div>

<?php get_footer(); ?>


