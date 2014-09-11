<?php
// =============================== My Social Networks Widget ====================================== //
class My_SocialNetworksWidget extends WP_Widget {

	function My_SocialNetworksWidget() {
		$widget_ops = array('classname' => 'social_networks_widget', 'description' => __('Link to your social networks.', CURRENT_THEME));
		$this->WP_Widget('social_networks', __('Cherry - Social Networks', CURRENT_THEME), $widget_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		
		$networks['Twitter']['link'] = $instance['twitter'];
		$networks['Facebook']['link'] = $instance['facebook'];
		$networks['Google']['link'] = $instance['google'];
		$networks['Feed']['link'] = $instance['feed'];
		$networks['Flickr']['link'] = $instance['flickr'];
		$networks['Skype']['link'] = $instance['skype'];
		$networks['Youtube']['link'] = $instance['youtube'];
		
		$networks['Twitter']['label'] = $instance['twitter_label'];
		$networks['Facebook']['label'] = $instance['facebook_label'];
		$networks['Google']['label'] = $instance['google_label'];
		$networks['Feed']['label'] = $instance['feed_label'];
		$networks['Flickr']['label'] = $instance['flickr_label'];
		$networks['Skype']['label'] = $instance['skype_label'];
		$networks['Youtube']['label'] = $instance['youtube_label'];

		$display = $instance['display'];
		

		echo $before_widget;
		if ( $title )
    		echo $before_title . $title . $after_title;
		?>
			<!-- BEGIN SOCIAL NETWORKS -->
			<?php if ($display == "both" or $display =="labels") {
				$addClass = "social__list";
			} elseif ($display == "icons") { 
				$addClass = "social__row clearfix";
			} ?>
			
			<ul class="social <?php echo $addClass ?> unstyled">
				
			<?php foreach(array("Facebook", "Twitter", "Google", "Feed", "Flickr", "Skype", "Youtube") as $network) : ?>
	    		<?php if (!empty($networks[$network]['link'])) : ?>
				<li class="social_li">
					<a class="social_link social_link__<?php echo strtolower($network); ?>" rel="tooltip" data-original-title="<?php echo strtolower($network); ?>" href="<?php echo $networks[$network]['link']; ?>">
				    	<?php if (($display == "both") or ($display =="icons")) { ?>
							<span class="social_ico"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/<?php echo strtolower($network);?>.png" alt=""></span>
						<?php } if (($display == "labels") or ($display == "both")) { ?> 
							<span class="social_label"><?php if (($networks[$network]['label'])!=="") { echo $networks[$network]['label']; } else { echo $network; } ?></span>
						<?php } ?>
					</a>
				</li>
				<?php endif; ?>
			<?php endforeach; ?>
		      
   		</ul>
   		<!-- END SOCIAL NETWORKS -->
      
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['google'] = $new_instance['google'];
		$instance['feed'] = $new_instance['feed'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['skype'] = $new_instance['skype'];
		$instance['youtube'] = $new_instance['youtube'];
		
		$instance['twitter_label'] = $new_instance['twitter_label'];
		$instance['facebook_label'] = $new_instance['facebook_label'];
		$instance['google_label'] = $new_instance['google_label'];
		$instance['feed_label'] = $new_instance['feed_label'];
		$instance['flickr_label'] = $new_instance['flickr_label'];
		$instance['skype_label'] = $new_instance['skype_label'];
		$instance['youtube_label'] = $new_instance['youtube_label'];

		$instance['display'] = $new_instance['display'];

		return $instance;
	}

	function form( $instance ) {
		/* Set up some default widget settings. */
		$defaults = array( 'title' => '', 'twitter' => '', 'twitter_label' => '', 'facebook' => '', 'facebook_label' => '', 'google' => '', 'google_label' => '', 'feed' => '', 'feed_label' => '', 'flickr' => '', 'flickr_label' => '', 'skype' => '', 'skype_label' => '', 'youtube' => '', 'youtube_label' => '', 'display' => 'icons', 'text' => '');
		$instance = wp_parse_args( (array) $instance, $defaults );
			
		$twitter = $instance['twitter'];		
		$facebook = $instance['facebook'];
		$google = $instance['google'];		
		$feed = $instance['feed'];
		$flickr = $instance['flickr'];	
		$skype = $instance['skype'];
		$youtube = $instance['youtube'];
		
		$twitter_label = $instance['twitter_label'];
		$facebook_label = $instance['facebook_label'];
		$google_label = $instance['google_label'];
		$feed_label = $instance['feed_label'];
		$flickr_label = $instance['flickr_label'];
		$skype_label = $instance['skype_label'];
		$youtube_label = $instance['youtube_label'];

		$display = $instance['display'];		
		$title = strip_tags($instance['title']);
		$text = format_to_edit($instance['text']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
    
		<fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Facebook', CURRENT_THEME); ?>:</legend>
			
			<p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" /></p>
			
			<p><label for="<?php echo $this->get_field_id('facebook_label'); ?>"><?php _e('Facebook label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook_label'); ?>" name="<?php echo $this->get_field_name('facebook_label'); ?>" type="text" value="<?php echo esc_attr($facebook_label); ?>" /></p>
		</fieldset>	
		
        <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Twitter', CURRENT_THEME); ?>:</legend>	
		<p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('twitter_label'); ?>"><?php _e('Twitter label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter_label'); ?>" name="<?php echo $this->get_field_name('twitter_label'); ?>" type="text" value="<?php echo esc_attr($twitter_label); ?>" /></p>
        </fieldset>	
		
        <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Google', CURRENT_THEME); ?>:</legend>
		<p><label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google URL:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('google_label'); ?>"><?php _e('Google label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('google_label'); ?>" name="<?php echo $this->get_field_name('google_label'); ?>" type="text" value="<?php echo esc_attr($google_label); ?>" /></p>
        </fieldset>	
		
        <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('RSS feed', CURRENT_THEME); ?>:</legend>
		<p><label for="<?php echo $this->get_field_id('feed'); ?>"><?php _e('RSS feed:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('feed'); ?>" name="<?php echo $this->get_field_name('feed'); ?>" type="text" value="<?php echo esc_attr($feed); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('feed_label'); ?>"><?php _e('RSS label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('feed_label'); ?>" name="<?php echo $this->get_field_name('feed_label'); ?>" type="text" value="<?php echo esc_attr($feed_label); ?>" /></p>
        </fieldset>	
    
    <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Flickr', CURRENT_THEME); ?>:</legend>
    <p><label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr URL:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo esc_attr($flickr); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('flickr_label'); ?>"><?php _e('Flickr label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('flickr_label'); ?>" name="<?php echo $this->get_field_name('flickr_label'); ?>" type="text" value="<?php echo esc_attr($flickr_label); ?>" /></p>
        </fieldset>	
    
    <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Skype', CURRENT_THEME); ?>:</legend>
    <p><label for="<?php echo $this->get_field_id('skype'); ?>"><?php _e('Skype URL:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" type="text" value="<?php echo esc_attr($skype); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('skype_label'); ?>"><?php _e('Skype label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('skype_label'); ?>" name="<?php echo $this->get_field_name('skype_label'); ?>" type="text" value="<?php echo esc_attr($skype_label); ?>" /></p>
        </fieldset>	
    
    <fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
			<legend style="padding:0 5px;"><?php _e('Youtube', CURRENT_THEME); ?>:</legend>
    <p><label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube URL:', CURRENT_THEME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" /></p>
        <p><label for="<?php echo $this->get_field_id('youtube_label'); ?>"><?php _e('Youtube label:', CURRENT_THEME); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('youtube_label'); ?>" name="<?php echo $this->get_field_name('youtube_label'); ?>" type="text" value="<?php echo esc_attr($youtube_label); ?>" /></p>
        </fieldset>	


		<p>Display:</p>
		<label for="<?php echo $this->get_field_id('icons'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="icons" id="<?php echo $this->get_field_id('icons'); ?>" <?php checked($display, "icons"); ?>></input>  Icons</label>
		<label for="<?php echo $this->get_field_id('labels'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="labels" id="<?php echo $this->get_field_id('labels'); ?>" <?php checked($display, "labels"); ?>></input> Labels</label>
		<label for="<?php echo $this->get_field_id('both'); ?>"><input type="radio" name="<?php echo $this->get_field_name('display'); ?>" value="both" id="<?php echo $this->get_field_id('both'); ?>" <?php checked($display, "both"); ?>></input> Both</label>

    
<?php
	}
}

add_action('widgets_init', create_function('', 'return register_widget("My_SocialNetworksWidget");'));
?>