<?php get_header(); ?>
<?php get_sidebar(); ?>
				<div class="content">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="clr"></div>
					<br/>
				</div>
				<div class="clr"></div>
			</div>
		</div>
<?php get_footer(); ?>