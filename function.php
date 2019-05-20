function modify_jquery_version() {

	if (!is_admin()) { // if it's not admin dashboard / in other words if it's front-end
	
		wp_deregister_script('jquery'); // deregisters the default wordpress jQuery file (which can be outdated)
  
  		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '3.4.1');  // register and automatically enqueue the newest version of jQuery from CDN
	}
}
add_action('wp_enqueue_scripts', 'modify_jquery_version');
