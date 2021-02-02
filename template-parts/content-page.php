<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio2021
 */

?>

<article>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio2021' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="secondary-section">
		<?php if ( is_front_page() ) : ?>
			<h1 class="title secondary-title">CV</h1>
			<?php query_posts( 'post_type=experiences&posts_per_page=20' ) ?>
			<?php if (have_posts(  )) : while(have_posts(  )): the_post(  ); ?>
			<h3 class="cv-title"><?php the_title();?></h3>
			<div class="cv-content"><?php the_content();?></div>
			<?php
				endwhile;
				endif;
				?>
		<?php endif; ?>
	</div>
</article>
