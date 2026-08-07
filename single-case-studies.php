<?php
/**
 * Template Name: Case Study Gutenberg
 * Template Post Type: case-study
 */

get_header();
?>

<main id="primary" class="site-main case-study-single case-study-gutenberg">
	<?php if ( have_posts() ) : ?>
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
						<li class="case-study-breadcrumbs__item">
							<a href="<?php echo esc_url( $archive_link ); ?>">
								<?php echo esc_html( $post_type_object->labels->name ); ?>
							</a>
						</li>
					<?php endif; ?>

					<li class="case-study-breadcrumbs__item case-study-breadcrumbs__item--current" aria-current="page">
						<?php the_title(); ?>
					</li>
				</ol>
			</nav>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>

			<?php
			$latest_case_studies = new WP_Query(
				array(
					'post_type'      => 'case-studies',
					'posts_per_page' => 3,
					'post__not_in'   => array( get_the_ID() ),
					'post_status'    => 'publish',
				)
			);
			?>

			<?php if ( $latest_case_studies->have_posts() ) : ?>
				<section class="case-study-latest" aria-labelledby="latest-case-studies-title">
					<div class="case-study-latest__inner">
						<p class="case-study-latest__eyebrow">More Case Studies</p>
						<h2 id="latest-case-studies-title" class="case-study-latest__title">Latest Case Studies</h2>

						<div class="case-study-latest__grid">
							<?php while ( $latest_case_studies->have_posts() ) : $latest_case_studies->the_post(); ?>
								<article <?php post_class( 'case-study-latest__card' ); ?>>
									<a class="case-study-latest__link" href="<?php the_permalink(); ?>">
										<h3 class="case-study-latest__card-title"><?php the_title(); ?></h3>

										<?php if ( has_excerpt() ) : ?>
											<p class="case-study-latest__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
										<?php endif; ?>

										<span class="case-study-latest__cta">Read case study</span>
									</a>
								</article>
							<?php endwhile; ?>
						</div>
					</div>
				</section>

				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>