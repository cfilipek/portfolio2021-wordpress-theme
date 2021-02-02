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
		<?php if ( is_page( $page = 'shop') || is_page( $page = 'blog')) : ?>
			<div class="full-page"></div>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<div class="secondary-section">
		<?php if ( is_front_page() || is_page( $page = 'about' )) : ?>
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
		<?php if ( is_page( $page = 'projects' )) : ?>
			<?php query_posts( 'post_type=projects&posts_per_page=20' ) ?>
			<div class="projects">
			<?php if (have_posts(  )) : while(have_posts(  )): the_post(  ); ?>
	
			<div class="proj-container">
				<div class="proj-img"><?php the_post_thumbnail();?></div>
				<div class="proj-text">
					<h3 class="proj-title"><?php the_title();?></h3>
				</div>
			</div>
			<?php
				endwhile;
				endif;
				?>
			</div>
		<?php endif; ?>

		<?php if ( is_page( $page = 'contact-me' )) : ?>
			<div class="hand full-page-contact">
				<div class="finger">
				</div>
				<div class="finger2">
				</div>
			</div>
		<?php endif; ?>
	</div>
</article>
