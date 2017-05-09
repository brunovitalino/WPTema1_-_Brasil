<?php get_header(); ?>

<div class="content">
	<div class="wrap">
		<?php 
			if(have_posts())
			{
				while (have_posts())
				{
					the_post();

					the_post_thumbnail('full');
					the_content();
				}
			}
		?>
	</div>
</div>

<?php get_footer(); ?>