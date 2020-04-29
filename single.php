<?php get_header(); ?>
<?php get_sidebar(); ?>
				<div class="content">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<div class="contentpost">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="clr"></div>
					<br/>
				</div>
				<div class="clr"></div>
			</div>
		</div>
<?php get_footer(); ?>