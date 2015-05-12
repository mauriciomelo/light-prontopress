<?php
/**
 * @package Protopress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 grid'); ?>>

		<div class="out-thumb col-md-8 col-sm-8">
			<header class="entry-header">
				<h1 class="entry-title title-font"><a class="hvr-underline-reveal" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<div class="postedon"><?php protopress_posted_on(); ?></div>
				<span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></span>
				<span class="readmore"><a class="hvr-underline-from-center" href="<?php the_permalink() ?>"><?php _e('Read More','protopress'); ?></a></span>
			</header><!-- .entry-header -->
		</div><!--.out-thumb-->
			
		
		
</article><!-- #post-## -->
