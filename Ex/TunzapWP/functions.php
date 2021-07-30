<?php
    
add_action("after_setup_theme","tunzapSetup");
add_action("init","tunzapWidgets");

function tunzapSetup(){
	add_editor_style();
}
function tunzapWidgets(){
	register_sidebar(array(
		'name' => 'Sponsor',
		'description' => 'Banner pubblicitari nella barra laterale',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
    
/*function caricaScript(){
	if(!is_admin()){
		wp_deregister_script("jquery");
		
		wp_register_script("jquery","https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js",null,"1.6.4",true)
		
		wp_enqueue_script("jquery");
	}
}*/
    
?>