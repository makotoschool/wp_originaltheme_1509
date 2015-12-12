<?php
register_nav_menus(array(
	'mainnav'=>'メインナビゲーションです',
	'utilitynavi'=>'これは上部のナビゲーションです'
)); 

/*くりかえし書くのがめんどくさいので↓
register_sidebar(array(
	'name'=>'toppageのサイドバー',
	'id'=>'toppage',
	'before_widget'=>'<div class="widget">',
	'after_widget'=>'</div>',
	'before_title'=>'<h3>',
	'after_title'=>'</h3>'
));

register_sidebar(array(
	'name'=>'webのサイドバー',
	'id'=>'web',
	'before_widget'=>'<div class="widget">',
	'after_widget'=>'</div>',
	'before_title'=>'<h3>',
	'after_title'=>'</h3>'
));
*/

wedgetadd('toppageのサイドバー','top');
wedgetadd('webのサイドバー','web');
wedgetadd('dtpのサイドバー','dtp');
wedgetadd('blogのサイドバー','blog');
wedgetadd('accessのサイドバー','access');
wedgetadd('contactのサイドバー','contact');
function wedgetadd($n,$id){
	register_sidebar(array(
	'name'=>$n,
	'id'=>$id,
	'before_widget'=>'<div class="widget">',
	'after_widget'=>'</div>',
	'before_title'=>'<h3>',
	'after_title'=>'</h3>'
));

}

//footerエリアのウィジェット
register_sidebar(array(
	'name'=>'footerのコンテンツ',
	'id'=>'footer',
	'before_widget'=>'<div class="footer_widget">',
	'after_widget'=>'</div>',
	'before_title'=>'<h3>',
	'after_title'=>'</h3>'
));

add_theme_support( 'post-thumbnails' ); 

/*
function my_scripts() {
wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
*/

function my_scripts() {
wp_enqueue_script(array('jquery'));//外部ライブラリjqueryだけほしい場合
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
