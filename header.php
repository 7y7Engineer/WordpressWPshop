<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
		<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php //comments_popup_script(); // off by default ?>
		<?php wp_head(); ?>
		
	    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.5.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/functions.js" type="text/javascript" ></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/share42/share42.js"></script> 
		<div class="share42init" data-top1="215" data-top2="20" data-margin="5"></div>
	</head>
	<body>
		<div class="karkas">
			<div class="head">
				<div class="basket">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Корзина')) : ?>
						<p>0 Товаров в корзине</p>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/button-top-red.png" alt="Товаров в корзине"/></a>
					<?php endif; ?>	
				</div>
				<a href="/"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/e-shop-name-bg.png"  alt="Ссылка на главную страницу сайта"/></a>
				<div class="search">
					<form action="" method="GET">
						<div class="input">
							<input type="text" name="s" id="quickquery" placeholder="Поиск по сайту"/>
						</div>
							<script type="text/javascript">
								//<![CDATA[
								placeholderSetup('quickquery');
								//[[>
							</script>
						<input type="image" src="<?php bloginfo('template_url'); ?>/images/bg-ok.png" name="ok"/>
					</form>
				</div>
				<div class="clr"></div>
			</div>
			<ul class="menu">
				<?php wp_list_pages('title_li='); ?>
			</ul>
