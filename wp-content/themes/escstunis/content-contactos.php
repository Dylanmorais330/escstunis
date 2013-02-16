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
	<section class="contacts-names six columns">
		Aqui estão os contactos.
	</section>
	<section class="contacts-form six columns">
		Aqui vai está o form.
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
