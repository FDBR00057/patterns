<?php
/**
 * Template Name: Case Study Gutenberg
 * Template Post Type: case-study
 */

get_header();
?>

<main id="primary" class="site-main case-study-single case-study-gutenberg">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$post_type        = get_post_type();
		$post_type_object = get_post_type_object( $post_type );
		$archive_link     = get_post_type_archive_link( $post_type );
		?>
		
		<nav class="case-study-breadcrumbs" aria-label="Breadcrumb">
			<ol class="case-study-breadcrumbs__list">
				<li class="case-study-breadcrumbs__item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				</li>

				<?php if ( $archive_link && $post_type_object ) : ?>
					<li class="case-study-breadcrumbs__item" aria-hidden="true">/</li>
					<li class="case-study-breadcrumbs__item">
						<a href="<?php echo esc_url( $archive_link ); ?>">
							<?php echo esc_html( $post_type_object->labels->name ); ?>
						</a>
					</li>
				<?php endif; ?>

				<li class="case-study-breadcrumbs__item" aria-hidden="true">/</li>
				<li class="case-study-breadcrumbs__item case-study-breadcrumbs__item--current" aria-current="page">
					<?php the_title(); ?>
				</li>
			</ol>
		</nav>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>