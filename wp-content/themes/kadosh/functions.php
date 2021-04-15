<?php

	//GET STYLES & SCRIPTS
	function getScripts(){

		wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
		
		wp_enqueue_style( 'slick-css', untrailingslashit( get_template_directory_uri() ) . '/assets/css/slick.css', [], false, 'all' );
		wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . '/assets/css/slick-theme.css', ['slick-css'], false, 'all' );
		wp_enqueue_script( 'slick-js', untrailingslashit( get_template_directory_uri() ) . '/assets/js/slick.min.js', ['jquery'], false, true );
		wp_enqueue_script( 'carousel-js', untrailingslashit( get_template_directory_uri() ) . '/assets/js/index.js', ['jquery', 'slick-js'], filemtime( untrailingslashit( get_template_directory() ) . '/assets/js/index.js' ), true );

		wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array('slick-js','carousel-js'), false, true);
	}

	//GENERATE MENUS
	function getMenus(){

		register_nav_menus(['header_menu' => __('Nav Menu', 'text_domain' )]);
		register_nav_menus(['contact_menu' => __('Contact Menu', 'text_domain' )]);
		register_nav_menus(['social_menu' => __('Social Menu', 'text_domain' )]);
	}

	function getPosts($type,$from,$to,$order,$img,$title,$date,$content,$link){

		$args=array(
			'post_type'=>$type,
			'numberposts'=>$to-$from,
			'offset'=>$from,
			'order'=>$order
		);
		$posts=get_posts($args);

		foreach($posts as $post){

			if($link){
				echo "<a href=".$post->guid.">";
			}
			
			echo "<div class='post'>";
				if($img){
					echo "<img src='".get_the_post_thumbnail_url($post)."'>";
				}
				if($title){
					echo "<h1>".$post->post_title."</h1>";
				}
				if($date){
					echo "<h3>".$post->post_date."</h3>";
				}
				if($content){
					echo "<p>".$post->post_content."</p>";
				}
			echo "</div>";

			if($link){
				echo "</a>";
			}
		}
	}

	//ACTIONS
	add_action('wp_enqueue_scripts', 'getScripts');
	add_action('init', 'getMenus');
	add_theme_support('post-thumbnails');
?>