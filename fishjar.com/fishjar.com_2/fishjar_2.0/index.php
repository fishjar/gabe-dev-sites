<?php
/**
 * @package WordPress
 * @subpackage Fishjar_Theme
 */

get_header(); ?>
			<div id="container">
				<?php get_sidebar(); ?>
				<div id="content">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="meta"><small>Posted <?php the_time('F jS, Y') ?> | Posted in <?php the_category(', ') ?> | <?php the_tags('Tags: ', ', ', ' | '); ?><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small></div>
						<div class="entry">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
					</div>
					<?php endwhile; ?>
					<?php wp_pagenavi(); ?>
					<?php else : ?>
					<div class="post">
						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					</div>
					<?php endif; ?>
				</div>
				<div class="clearer"></div>
			</div>
<?php get_footer(); ?>
