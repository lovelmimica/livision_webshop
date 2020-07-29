<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>
    <div class='blog-sidebar'>
		<span class='blog-sidebar__title'>Blog</span>
        <a class='blog-sidebar__link'>Vijesti</a>
        <a class='blog-sidebar__link'>Anatomija i fizika oka</a>
        <a class='blog-sidebar__link'>Kontaktne leće</a>
        <a class='blog-sidebar__link'>Njega oka i kontaktnih leća</a>
        <a class='blog-sidebar__link'>Bolesti i poremečaji oka</a>
    </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
