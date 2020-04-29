<?php 
	if(function_exists('register_sidebar'))
	register_sidebar(array('name'=>'Категории')); //Виджет под категории в сайдбаре
	register_sidebar(array('name'=>'Категории 2')); //Виджет под категории в футере
	register_sidebar(array('name'=>'Корзина')); //Виджет под корзину
	
	add_theme_support('post_thumbnails'); //поддержка миниатюр
	set_post_thumbnail_size(150, 100, TRUE);
?>