<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package escstunis
 * @since escstunis 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

<h1>Estamos na página de contactos</h1>
	<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="http://1.bp.blogspot.com/-SWWZ7vOsPcg/TfEUzxRZEZI/AAAAAAAAL_4/btQOrRzYsM8/s1600/a.jpg" data-thumb="http://1.bp.blogspot.com/-SWWZ7vOsPcg/TfEUzxRZEZI/AAAAAAAAL_4/btQOrRzYsM8/s1600/a.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>


	<div class="entry-content">
		pppppppp

		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'escstunis' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'escstunis' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
