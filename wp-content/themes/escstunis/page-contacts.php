<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package escstunis
 * @since escstunis 1.0
 * @Template Name: Contactos Template
 */

get_header(home); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">
			
				<div class="">
				

			

					<?php  get_template_part( 'content', 'contactos' ); ?>

				

			

			</div><!-- #content -->
		</div>
		</div><!-- #primary .site-content -->

 <?php get_sidebar(); ?> 
<?php get_footer(); ?>