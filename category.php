<?php get_header(); ?>
<?php get_sidebar(); ?>
				<div class="content">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<div class="contentpost">
							<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
					<div class="nav">
						<?php posts_nav_link(); ?>
					</div>
				<?php endif; ?>
					<div class="clr"></div>
					<br/>
				</div>
				<div class="clr"></div>
			</div>
		</div>
<?php get_footer(); ?>