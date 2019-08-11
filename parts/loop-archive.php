<?php
/*
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article class="card"" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<a href="<?php the_permalink() ?>">
		<?php
			if( has_post_thumbnail() ){
				the_post_thumbnail('full');
			} else { ?>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/src/about-to-snap-logo-full-dark@2x.png" >
			<?php
			}
			?>
	</a>
	<section class="card-section" itemprop="text">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
	</header> <!-- end article header -->
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
	</section> <!-- end article section -->


</article> <!-- end article -->
