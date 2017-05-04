<?php get_header(); ?>

<div class="blog">
	<div class="wrap">
		<h2>BLOG</h2>

		<div class="box-listar-posts">

			<?php 
				$args = array('post_type' => 'post', 'show_posts' => 2);
				$my_posts = get_posts( $args );
			?>
			<?php
				$cont = 1;
				if( $my_posts ) :
					foreach ($my_posts as $post) :
						setup_postdata( $post );
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
					endforeach;
				endif;
			?>

		</div>
	</div>
</div>

<?php get_footer(); ?>