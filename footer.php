		<div class="footer">
		<?php wp_footer(); ?>
			<div class="footer-in">
				<div class="foot-cat">
					<h3>Страницы</h3>
					<ul>
						<?php wp_list_pages('title_li='); ?>
						<!--<li><a href="#">ГЛАВНАЯ</a></li>
						<li><a href="#">О МАГАЗИНЕ</a></li>
						<li><a href="#">АКЦИИ</a></li>
						<li><a href="#">ДОСТАВКА И ОПЛАТА</a></li>
						<li><a href="#">КОНТАКТЫ</a></li>-->
					</ul>	
				</div>
				<div class="foot-cat">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Категории 2')) : ?>
							<p>здесь будут категории</p>
						<?php endif; ?>	
				<!--<h3>Категории</h3>
					<ul>
						<li><a href="#">Катигория 1</a></li>
						<li><a href="#">Катигория 2</a></li>
						<li><a href="#">Катигория 3</a></li>
						<li><a href="#">Катигория 4</a></li>
						<li><a href="#">Катигория 5</a></li>
						<li><a href="#">Катигория 6</a></li>
					</ul>
					<ul>
						<li><a href="#">Катигория 7</a></li>
						<li><a href="#">Катигория 8</a></li>
						<li><a href="#">Катигория 9</a></li>
						<li><a href="#">Катигория 10</a></li>
						<li><a href="#">Катигория 11</a></li>
						<li><a href="#">Катигория 12</a></li>
					</ul>-->
				</div>
				<div class="copy">
					<a href="#"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/e-shop-name-bg.png"  alt="Ссылка на главную страницу сайта"/></a>
					<p>&copy ; E-shop name 2015<br/>E-mail:<a href="faqbigsale@gmail.com">faqbigsale@gmail.com</a></p>
				</div>
			</div>
		</div>
	</body>
</html>