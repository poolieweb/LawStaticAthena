<?php
	@define( 'CURRENT_THEME', 'themeXXXX');

	require_once('theme_shortcodes/banner.php');

	// Loading child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, get_stylesheet_directory() . '/languages' );

	// WP Pointers
	add_action('admin_enqueue_scripts', 'myHelpPointers');
	function myHelpPointers() {
	//First we define our pointers 
	$pointers = array(
	   	array(
	       'id' => 'xyz1',   // unique id for this pointer
	       'screen' => 'options-permalink', // this is the page hook we want our pointer to show on
	       'target' => '#submit', // the css selector for the pointer to be tied to, best to use ID's
	       'title' => 'Submit Permalink Structure',
	       'content' => 'This way of links configuration can be used by not only our blog followers but will help in SEO-optimisation as well. The effectiveness and main features of this link configuration method are revealed <a href="http://codex.wordpress.org/Using_Permalinks">here</a>',
	       'position' => array( 
	                          'edge' => 'top', //top, bottom, left, right
	                          'align' => 'left', //top, bottom, left, right, middle
	                          'offset' => '0 5'
	                          )
	       ),

	    array(
	       'id' => 'xyz2',   // unique id for this pointer
	       'screen' => 'themes', // this is the page hook we want our pointer to show on
	       'target' => '#toplevel_page_options-framework', // the css selector for the pointer to be tied to, best to use ID's
	       'title' => 'Import Sample Data',
	       'content' => 'If you want to install sample data from livedemo you need to go to <strong>Cherry Options</strong> > <strong>Import</strong> and follow the tips.',
	       'position' => array( 
	                          'edge' => 'bottom', //top, bottom, left, right
	                          'align' => 'top', //top, bottom, left, right, middle
	                          'offset' => '0 -10'
	                          )
	       ),

	    array(
	       'id' => 'xyz3',   // unique id for this pointer
	       'screen' => 'toplevel_page_options-framework', // this is the page hook we want our pointer to show on
	       'target' => '#toplevel_page_options-framework', // the css selector for the pointer to be tied to, best to use ID's
	       'title' => 'Import Sample Data',
	       'content' => 'If you want to install sample data from livedemo you need to go to <strong>Import</strong> and follow the tips.',
	       'position' => array( 
	                          'edge' => 'left', //top, bottom, left, right
	                          'align' => 'top', //top, bottom, left, right, middle
	                          'offset' => '0 18'
	                          )
	       )
	    // more as needed
	    );
	//Now we instantiate the class and pass our pointer array to the constructor 
	$myPointers = new WP_Help_Pointer($pointers); 
} ?>