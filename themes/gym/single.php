<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>
	<title><?php the_title(); ?></title>

	<div class="content">
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>