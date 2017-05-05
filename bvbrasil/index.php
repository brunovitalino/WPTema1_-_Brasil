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

<!-- Como os posts listados ficam flutuando na div blog, então a div seguinte acabará ficando na mesma área. Para evitar isso foi declaro explícitamente uma div de separação -->
<div class="clear"></div>

<div class="galeria">
	<div class="wrap">
		<?php 
			$args = array( 'post_type' => 'page', 'pagename' => 'galeria' );
			$my_page = get_posts( $args );
		?>
		<?php
			$cont = 1;
			if( $my_page ) :
				foreach ( $my_page as $post ) :
					setup_postdata( $post );
		?>
					<?php the_content(); ?>
					<?php
						$images = easy_image_gallery_get_image_ids();
						if($images) :
							foreach ( $images as $attachment_id ) :
					?>
								<?php $imagefull = wp_get_attachment_image_src ( $attachment_id, '' ); ?>
								<?php $image = wp_get_attachment_image_src ( $attachment_id, 'thumb-custom' ); ?>
								<a data-fancybox="gallery" href="<?php echo $imagefull[0]; ?>">

									<img src="<?php echo $image[0]; ?>">

								</a>
					<?php
							endforeach;
						endif;
					?>
		<?php
			$cont++;
				endforeach;
			endif;
		?>
	</div>
</div>

<?php get_footer(); ?>