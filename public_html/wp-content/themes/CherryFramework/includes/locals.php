<?php
	function theme_locals($label) {
		$domain = CURRENT_THEME;
		$locals = array(
			//general
			'no' => __('No', $domain),
			'yes' => __('Yes', $domain),
			'slow_speed' => __('Slow', $domain),
			'normal_speed' => __('Normal', $domain),
			'fast_speed' => __('Fast', $domain),
			'normal_size' => __('Normal size', $domain),
			'large_size' => __('Large size', $domain),
			'font_size' => __('Font Size', $domain),
			'lineheight' => __('Lineheight', $domain),
			'font_face' => __('Font Face', $domain),
			'character_sets' => __('Character Sets', $domain),
			'font_style' => __('Font Style', $domain),
			'color' => __('Color', $domain),
			'import' => __('Import', $domain),
			'export' => __('Export', $domain),
			'done' => __('Done', $domain),
			'error' => __('Error', $domain),
			'success' => __('success', $domain),
			'upload' => __('Upload', $domain),
			'try_again' => __('try again', $domain),
			'finish' => __('Finish', $domain),
			'skip' => __('Skip this step', $domain),
			'install_next' => __('next', $domain),
			'none' => __('None', $domain),
			'date' => __('Date', $domain),
			'title' => __('Title', $domain),
			'info' => __('Info', $domain),
			'rand' => __('Random', $domain),
			'comment_count' => __('Comment count', $domain),
			'enable_lightbox' => __('Enable Lightbox', $domain),
			'enable_lightbox_desc' => __('Check this to enable the lightbox.', $domain),
			'permalink_to' => __('Permalink', $domain),
			'read_more' => __('Read more', $domain),
			'view_all' => __('View all', $domain),
			'width' => __('Width', $domain),
			'height' => __('Height', $domain),
			'excerpt_length' => __('Excerpt length (words):', $domain),
			'link_text' => __('Link Text:', $domain),
			'link_url' => __('Link URL', $domain),
			'standard' => __('Standard', $domain),
			'aside' => __('Aside', $domain),
			'quote' => __('Quote', $domain),
			'link' => __('Link', $domain),
			'image' => __('Image', $domain),
			'gallery' => __('Gallery', $domain),
			'audio' => __('Audio', $domain),
			'video' => __('Video', $domain),
			'categories' => __('Categories', $domain),
			'tags' => __('Tags', $domain),
			'show_all' => __('Show All', $domain),
			'search' => __('search', $domain),
			'go' => __('Go', $domain),
			'prev_post' => __('&laquo; Previous post.', $domain),
			'next_post' => __('Next Post &raquo;', $domain),
			'url' => __('URL', $domain),
			'url_1' => __('URL #1', $domain),
			'url_2' => __('URL #2', $domain),
			'uncategorized' => __('Uncategorized', $domain),
			'last' => __('Last', $domain),
			'first' => __('First', $domain),
			'delete' => __('Delete', $domain),
			
			//Output Audio
			'prev' => __('Previous', $domain),
			'next' => __('Next', $domain),
			'play' => __('Play', $domain),
			'pause' => __('Pause', $domain),
			'stop' => __('Stop', $domain),
			'mute' => __('Mute', $domain),
			'unmute' => __('Unmute', $domain),
			'update_required' => __("<span>Update Required. </span>To play the media you will need to either update your browser to a recent version or update your <a href='http://get.adobe.com/flashplayer/' target='_blank'>Flash plugin</a>.", $domain),
			
			//Cherry theme options
			'cherry_options' => __('Cherry Options', $domain),
			'customize' => __('Customize', $domain),
			'support' => __('Support', $domain),
			'documentation' => __('Documentation', $domain),
			'save_options' => __('Save Options', $domain),
			'restore_defaults' => __('Restore Defaults', $domain),
			'restore_defaults_desc' => __('Click OK to reset. Any theme settings will be lost!', $domain),
			
			//general options
			'general' => __('General', $domain),
			'body_name' => __('Body styling', $domain),
			'body_desc' => __('Change the background style', $domain),
			'background_image' => __('Background Image', $domain),
			'background_color' => __('Background Color', $domain),
			'header_name' => __('Header background color', $domain),
			'header_desc' => __('Change the header background color', $domain),
			'buttons_name' => __('Link color', $domain),
			'buttons_desc' => __('Change the color of link', $domain),
			'links_color_hover' => __('Link color hover', $domain),
			'links_color_hover_desc' => __('Change the color of link hover state', $domain),
			'body_text_name' => __('Body Text', $domain),
			'body_text_desc' => __("Choose your prefered font for body text. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'h1_name' => __('H1 Heading', $domain),
			'h1_desc' => __("Choose your prefered font for H1 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'h2_name' => __('H2 Heading', $domain),
			'h2_desc' => __("Choose your prefered font for H2 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'h3_name' => __('H3 Heading', $domain),
			'h3_desc' => __("Choose your prefered font for H3 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'h4_name' => __('H4 Heading', $domain),
			'h4_desc' => __("Choose your prefered font for H4 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'h5_name' => __('H5 Heading', $domain),
			'h5_desc' => __("Choose your prefered font for H5 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'h6_name' => __('H6 Heading', $domain),
			'h6_desc' => __("Choose your prefered font for H6 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'search_name' => __('Display search box?', $domain),
			'search_desc' => __('Display search box in the header?', $domain),
			'breadcrumbs_name' => __('Display breadcrumbs?', $domain),
			'breadcrumbs_desc' => __('Display breadcrumbs in the page?', $domain),
			'css_name' => __('Custom CSS', $domain),
			'css_desc' => __('Want to add any custom CSS code? Put in here, and the rest is taken care of. This overrides any other stylesheets. eg: a.button{color:green}', $domain),
			
			//Logo & Favicon options
			'logo' => __('Logo', $domain),
			'logo_favicon' => __('Logo & Favicon', $domain),
			'logo_name' => __('What kind of logo?', $domain),
			'logo_desc' => __('Select whether you want your main logo to be an image or text. If you select "image" you can put in the image url in the next option, and if you select "text" your Site Title will be shown instead.', $domain),
			'image_logo' => __('Image Logo', $domain),
			'text_logo' => __('Text Logo', $domain),
			'logo_t_name' => __('Logo Typography', $domain),
			'logo_t_desc' => __("Choose your prefered font for menu. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'logo_image_path' => __('Logo Image Path', $domain),
			'logo_image_path_desc' => __('Click Upload or Enter the direct path to your <strong>logo image</strong>. For example <em>http://your_website_url_here/wp-content/themes/themeXXXX/images/logo.png</em>', $domain),
			'favicon_name' => __('Favicon', $domain),
			'favicon_desc' => __('Click Upload or Enter the direct path to your <strong>favicon</strong>. For example <em>http://your_website_url_here/wp-content/themes/themeXXXX/favicon.ico</em>', $domain),
			
			//Navigation options
			'navigation' => __('Navigation', $domain),
			'menu_t_name' => __('Menu Typography', $domain),
			'menu_t_desc' => __("Choose your prefered font for menu. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href='http://www.google.com/webfonts'>Google Web Fonts</a> library.</em>", $domain),
			'delay_name' => __('Delay', $domain),
			'delay_desc' => __('Miliseconds delay on mouseout.', $domain),
			'fade_name' => __('Fade-in animation', $domain),
			'fade_desc' => __('Fade-in animation.', $domain),
			'slide_name' => __('Slide-down animation.', $domain),
			'slide_desc' => __('Slide-down animation.', $domain),
			'enable fade-in animation' => __('Enable fade-in animation', $domain),
			'disable fade-in animation' => __('Disable fade-in animation', $domain),
			'enable slide-down animation' => __('Enable slide-down animation', $domain),
			'disable slide-down animation' => __('Disable slide-down animation', $domain),
			'speed_name' => __('Speed', $domain),
			'speed_desc' => __('Animation speed.', $domain),
			'arrows_name' => __('Arrows markup.', $domain),
			'arrows_desc' => __('Do you want to generate arrow mark-up?', $domain),
			'mobile_menu_name' => __('Mobile menu label.', $domain),
			'mobile_menu_desc' => __('This text is visible in mobile select menu.', $domain),
			'mobile_menu_std' => __('Navigate to...', $domain),
			
			//Slider Settings options
			'slider' => __('Slider Settings', $domain),
			'slider_name' => __('Slider', $domain),
			'slider_type_name' => __('The type of slider', $domain),
			'slider_type_desc' => __('You can choose the type of slider that suits you best.', $domain),
			'slider_off' => __('Disable slider', $domain),
			'camera_slider' => __('Slideshow', $domain),
			'accordion_slider' => __('Slides', $domain),
			'effect_name' => __('Sliding effect', $domain),
			'effect_desc' => __('Select your animation type.', $domain),
			'random' => __('random', $domain),
			'simpleFade' => __('simpleFade', $domain),
			'curtainTopLeft' => __('curtainTopLeft', $domain),
			'curtainTopRight' => __('curtainTopRight', $domain),
			'curtainBottomLeft' => __('curtainBottomLeft', $domain),
			'curtainBottomRight' => __('curtainBottomRight', $domain),
			'curtainSliceLeft' => __('curtainSliceLeft', $domain),
			'curtainSliceRight' => __('curtainSliceRight', $domain),
			'blindCurtainTopLeft' => __('blindCurtainTopLeft', $domain),
			'blindCurtainTopRight' => __('blindCurtainTopRight', $domain),
			'blindCurtainBottomLeft' => __('blindCurtainBottomLeft', $domain),
			'blindCurtainBottomRight' => __('blindCurtainBottomRight', $domain),
			'blindCurtainSliceBottom' => __('blindCurtainSliceBottom', $domain),
			'blindCurtainSliceTop' => __('blindCurtainSliceTop', $domain),
			'stampede' => __('stampede', $domain),
			'mosaic' => __('mosaic', $domain),
			'mosaicReverse' => __('mosaicReverse', $domain),
			'mosaicRandom' => __('mosaicRandom', $domain),
			'mosaicSpiral' => __('mosaicSpiral', $domain),
			'mosaicSpiralReverse' => __('mosaicSpiralReverse', $domain),
			'topLeftBottomRight' => __('topLeftBottomRight', $domain),
			'bottomRightTopLeft' => __('bottomRightTopLeft', $domain),
			'bottomLeftTopRight' => __('bottomLeftTopRight', $domain),
			'columns_name' => __('Number of columns', $domain),
			'columns_desc' => __('Number of columns', $domain),
			'rows_name' => __('Number of rows', $domain),
			'rows_desc' => __('Number of rows', $domain),
			'banner_name' => __('Banner effect', $domain),
			'moveFromLeft' => __('moveFromLeft', $domain),
			'moveFromRight' => __('moveFromRight', $domain),
			'moveFromTop' => __('moveFromTop', $domain),
			'moveFromBottom' => __('moveFromBottom', $domain),
			'fadeIn' => __('fadeIn', $domain),
			'fadeFromLeft' => __('fadeFromLeft', $domain),
			'fadeFromRight' => __('fadeFromRight', $domain),
			'fadeFromTop' => __('fadeFromTop', $domain),
			'fadeFromBottom' => __('fadeFromBottom', $domain),
			'banner_desc' => __('Select your banner animation type.', $domain),
			'pause_name' => __('Pause time', $domain),
			'pause_desc' => __('Pause time (ms).', $domain),
			'animation_name' => __('Animation speed', $domain),
			'animation_desc' => __('Animation speed (ms)', $domain),
			'slideshow_name' => __('Slideshow', $domain),
			'slideshow_desc' => __('Animate slider automatically?', $domain),
			'thumbnails_name' => __('Thumbnails', $domain),
			'thumbnails_desc' => __('Display thumbnails?', $domain),
			'pagination_name' => __('Pagination', $domain),
			'pagination_desc' => __('Display pagination?', $domain),
			'navigation_name' => __('Next & Prev navigation', $domain),
			'navigation_desc' => __('Display next & prev navigation?', $domain),
			'hover_name' => __('Display next & prev navigation only on hover?', $domain),
			'hover_desc' => __('If true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always', $domain),
			'button_name' => __('Play/Pause button', $domain),
			'button_desc' => __('Display Play/Pause button?', $domain),
			'loader_name' => __('Loader', $domain),
			'loader_desc' => __('Slider loader', $domain),
			'pie' => __('Pie', $domain),
			'bar' => __('Bar', $domain),

			//Accardion Slider Settings options
			'show_post_name' => __('Slides to display', $domain),
			'show_post_desc' => __('Select the slides that you want to be displayed on slider. If no slide is selected, all slides will be displayed.', $domain),
			'hover_pause_name' => __('Pause on mouseover', $domain),
			'hover_pause_desc' => __('The auto play will pause when you mouse over the slider.', $domain),
			'easing_name' => __('Animation slowdown', $domain),
			'easing_desc' => __('You can choose different types of animation slowdown for transition of slides.', $domain),
			'trigger_name' => __('Mouse events for transition of slides', $domain),
			'trigger_desc' => __('You can choose different types of mouse events for transition of slides.', $domain),
			'click' => __('Click', $domain),
			'mouseover' => __('Mouseover', $domain),
			'dblclick' => __('Double click', $domain),
			'starting_slide_name' => __('Active slide', $domain),
			'starting_slide_desc' => __('Set the number of slide that will be active by default. If the value is 0, all slides will be of the same width when page loads.', $domain),
			'linear' => __('linear', $domain),
			'easeInSine' => __('easeInSine', $domain),
			'easeOutSine' => __('easeOutSine', $domain),
			'easeInOutSine' => __('easeInOutSine', $domain),
			'easeInQuad' => __('easeInQuad', $domain),
			'easeOutQuad' => __('easeOutQuad', $domain),
			'easeInOutQuad' => __('easeInOutQuad', $domain),
			'easeInCubic' => __('easeInCubic', $domain),
			'easeOutCubic' => __('easeOutCubic', $domain),
			'easeInOutCubic' => __('easeInOutCubic', $domain),
			'easeInQuart' => __('easeInQuart', $domain),
			'easeOutQuart' => __('easeOutQuart', $domain),
			'easeInOutQuart' => __('easeInOutQuart', $domain),
			'easeInQuint' => __('easeInQuint', $domain),
			'easeOutQuint' => __('easeOutQuint', $domain),
			'easeInOutQuint' => __('easeInOutQuint', $domain),
			'easeInExpo' => __('easeInExpo', $domain),
			'easeOutExpo' => __('easeOutExpo', $domain),
			'easeInOutExpo' => __('easeInOutExpo', $domain),
			'easeInCirc' => __('easeInCirc', $domain),
			'easeOutCirc' => __('easeOutCirc', $domain),
			'easeInOutCirc' => __('easeInOutCirc', $domain),
			'easeInBack' => __('easeInBack', $domain),
			'easeOutBack' => __('easeOutBack', $domain),
			'easeInOutBack' => __('easeInOutBack', $domain),
			'easeInElastic' => __('easeInElastic', $domain),
			'easeOutElastic' => __('easeOutElastic', $domain),
			'easeInOutElastic' => __('easeInOutElastic', $domain),
			'easeInBounce' => __('easeInBounce', $domain),
			'easeOutBounce' => __('easeOutBounce', $domain),
			'easeInOutBounce' => __('easeInOutBounce', $domain),

			//Blog options
			'blog' => __('Blog', $domain),
			'blog_name' => __('Blog Title', $domain),
			'blog_desc' => __('Enter Your Blog Title used on Blog page.', $domain),
			'posts_name' => __('Related Posts Title', $domain),
			'posts_desc' => __('Enter Your Title used on Single Post page for related posts.', $domain),
			'posts_std' => __('Related Posts', $domain),
			'sidebar_name' => __('Sidebar position', $domain),
			'sidebar_desc' => __('Choose sidebar position.', $domain),
			'image_size_name' => __('Blog image size', $domain),
			'image_size_desc' => __('Featured image size on the blog.', $domain),
			'load_image_name' => __('Should images be uploaded on page scroll?', $domain),
			'load_image_desc' => __('You can enable images load only as you scroll down the page. Otherwise images will load all at once.', $domain),
			'display_share_name' => __('Display share button in single post?', $domain),
			'display_share_desc' => __('Display share button in single post?', $domain),
			'single_post_image_name' => __('Single post image size', $domain),
			'single_post_image_desc' => __('Featured image size on the single page.', $domain),
			'meta_name' => __('View meta of the blog.', $domain),
			'meta_desc' => __('Select meta block type which will be displayed on blog and post pages.', $domain),
			'excerpt_name' => __('Enable excerpt for blog posts?', $domain),
			'excerpt_desc' => __('Enable or Disable excerpt for blog posts.', $domain),
			'button_text_name' => __('Button text for blog posts.', $domain),
			'button_text_desc' => __('Button text for blog posts.', $domain),
			'hide' => __('Do not show.', $domain),
			'line' => __('Lines.', $domain),
			'grid' => __('Columns.', $domain),
			'icon' => __('Icons.', $domain),
			'post_date_name' => __('Post publication date.', $domain),
			'post_date_desc' => __('Should the post publication date be displayed?', $domain),
			'post_author_name' => __('Author of the post.', $domain),
			'post_author_desc' => __('Display the author of the post?', $domain),
			'post_permalink_name' => __('Direct link to the post.', $domain),
			'post_permalink_desc' => __('Should the direct link to the post be displayed? ', $domain),
			'post_category_name' => __('Post categories.', $domain),
			'post_category_desc' => __('Should the post categories be displayed?', $domain),
			'post_tag_name' => __('Tags be displayed.', $domain),
			'post_tag_desc' => __('Should the tags be displayed?', $domain),
			'post_comment_name' => __('Number of comments.', $domain),
			'post_comment_desc' => __('Should the number of comments be displayed?', $domain),
			'post_views_name' => __('Number of view.', $domain),
			'post_views_desc' => __('Should the number of view be displayed?', $domain),
			'post_like_name' => __('Number of likes.', $domain),
			'post_like_desc' => __('Should the number of likes be displayed?', $domain),
			'post_dislike_name' => __('Number of dislikes.', $domain),
			'post_dislike_desc' => __('Should the number of dislikes be displayed?', $domain),
			//'' => __('', $domain),
			
			//Portfolio options
			'portfolio' => __('Portfolio', $domain),
			'filter_name' => __('Filter', $domain),
			'filter_desc' => __('Portfolio filter.', $domain),
			'by_category' => __('By category', $domain),
			'by_tags' => __('By tags', $domain),
			'both' => __('Both (by category and tags)', $domain),
			'show_title_name' => __('Show title?', $domain),
			'show_title_desc' => __('Enable or Disable title for portfolio posts.', $domain),
			'show_excerpt_name' => __('Show excerpt?', $domain),
			'show_excerpt_desc' => __('Enable or Disable excerpt for portfolio posts.', $domain),
			'folio_button_text_name' => __('Button text for portfolio posts.', $domain),
			'folio_button_text_desc' => __('Button text for portfolio posts.', $domain),
			'excerpt_words_name' => __('Excerpt words', $domain),
			'excerpt_words_desc' => __('Excerpt length (words).', $domain),
			'show_button_name' => __('Show button?', $domain),
			'show_button_desc' => __('Enable or Disable button for portfolio posts.', $domain),
			'show_meta_name' => __('Show portfolio meta?', $domain),
			'show_meta_desc' => __('Enable or Disable meta for single portfolio posts.', $domain),
			'folio_enable_lightbox_desc' => __('Enable or Disable lightbox for portfolio posts.', $domain),
			'layout_name' => __('Layout', $domain),
			'layout_desc' => __('Portfolio has different layout modes. You can set and change the layout mode via this option.', $domain),
			'fit_rows' => __('Fit rows', $domain),
			'masonry' => __('Masonry', $domain),
			'portfolio_2_name' => __('Portfolio 2 columns items amount', $domain),
			'portfolio_2_desc' => __('Portfolio items amount for Portfolio 2 columns template.', $domain),
			'portfolio_3_name' => __('Portfolio 3 columns items amount', $domain),
			'portfolio_3_desc' => __('Portfolio items amount for Portfolio 3 columns template.', $domain),
			'portfolio_4_name' => __('Portfolio 4 columns items amount', $domain),
			'portfolio_4_desc' => __('Portfolio items amount for Portfolio 4 columns template.', $domain),
			
			//Footer options
			'footer' => __('Footer', $domain),
			'copyright_text_name' => __('Footer copyright text', $domain),
			'copyright_text_desc' => __('Enter text used in the right side of the footer. HTML tags are allowed.', $domain),
			'google_name' => __('Google Analytics Code', $domain),
			'google_desc' => __('You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.', $domain),
			'feedburner_name' => __('Feedburner URL', $domain),
			'feedburner_desc' => __('Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website.', $domain),
			'footer_menu_name' => __('Display Footer Menu?', $domain),
			'footer_menu_desc' => __('Do you want to display footer menu?', $domain),
			'footer_menu_typography_name' => __('Footer Menu Typography', $domain),
			'footer_menu_typography_desc' => __('Choose your prefered font for menu. <em>Note: fonts marked with <strong>*</strong> symbol will be loaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>', $domain),
			
			//Other cherry theme options
			'no_repeat' => __('No Repeat', $domain),
			'r_h' => __('Repeat Horizontally', $domain),
			'r_v' => __('Repeat Vertically', $domain),
			'r_a' => __('Repeat All', $domain),
			't_l' => __('Top Left', $domain),
			't_c' => __('Top Center', $domain),
			't_r' => __('Top Right', $domain),
			'm_l' => __('Middle Left', $domain),
			'm_c' => __('Middle Center', $domain),
			'm_r' => __('Middle Right', $domain),
			'b_l' => __('Bottom Left', $domain),
			'b_c' => __('Bottom Center', $domain),
			'b_r' => __('Bottom Right', $domain),
			's_n' => __('Scroll Normally', $domain),
			'f_p' => __('Fixed in Place', $domain),
			
			//import & export options
			'Step_1' => __('<span>Step <i>1</i></span>Theme Options Import', $domain),
			'Select the file that contains Theme Options' => __('Select the file that contains Theme Options (e.g. <b>options.json</b> )', $domain),
			'Upload File and Import' => __('Upload File and Import', $domain),
			'Step_1_export' => __('<span>Step <i>1</i></span>Theme Options Export', $domain),
			'Welcome to the OptionsFramework Backup Manager' => __('Welcome to the OptionsFramework Backup Manager.', $domain),
			'problem_importing' => __('There was a problem importing your settings. Please Try again.', $domain),
			'problem_exporting' => __('There was a problem exporting your settings. Please Try again.', $domain),
			'provided_is_invalid.' => __('The import file you\'ve provided is invalid. Please try again.', $domain),
			
			'step_1_export_widget' => __('<span>Step <i>1</i></span> Widget Settings Export', $domain),
			'step_3' => __('<span>Step <i>3</i></span> Widget Settings Import', $domain),
			'step_4' => __('<span>Step <i>4</i></span> Widget Settings Import', $domain),
			'import_settings' => __('Import Settings', $domain),
			'please_try_again' => __("Incorrect file. Please, <a href='admin.php?page=options-framework-import&amp;step=1'>try again</a>.", $domain),
			'select_the_file' => __('Select the file that contains Widget Settings (e.g. <b>your_template_package/sources/sample_data/widgets.json</b>)', $domain),
			'show_widget_settings' => __('Show Widget Settings', $domain),
			'no_widget' => __('Your have no widgets. Please, click next to go to the next step.', $domain),
			'widget_import_warning' => __('Disable the widgets you don\'t need and click "Next". All the selected widgets will be imported into the theme by default.', $domain),
			'go_to_widgets' => __('go to widgets', $domain),
			'empty_widgets' => __('File widgets.json incorrect or empty. For this reason, none of the widget will be imported into your theme.', $domain),
			
			//wordpress-importer.php
			'sorry' => __('Sorry, there has been an error.', $domain),
			'not_exist' => __('The file does not exist, please ', $domain),
			'please' => __('Please', $domain),
			'WXR_file' => __('This WXR file (version %s) may not be supported by this version of the importer. Please consider updating.', $domain),
			'export_file' => __('The export file could not be found at <code>%s</code>. It is likely that this was caused by a permissions problem.', $domain),
			'import_author' => __('Failed to import author %s. Their posts will be attributed to the current user.', $domain),
			'Assign Authors' => __('Assign Authors', $domain),
			'To make it easier' => __('To make it easier for you to edit and save the imported content, you may want to reassign the author of the imported item to an existing user of this site. For example, you may want to import all the entries as <b>admin</b> entries.', $domain),
			'If a new user is' => __('If a new user is created by WordPress, a new password will be randomly generated and the new user&#8217;s role will be set as %s. Manually changing the new user&#8217;s details will be necessary.', $domain),
			'Download and import' => __('Download and import file attachments', $domain),
			'import_data' => __('Import Data', $domain),
			'import_author_2' => __('Import author:', $domain),
			'existing_user' => __('assign posts to an existing user:', $domain),
			'select' => __('- Select -', $domain),
			'create_new_user' => __('Failed to create new user for %s. Their posts will be attributed to the current user.', $domain),
			'import_category ' => __('Failed to import category %s ', $domain),
			'import_post_tag' => __('Failed to import post tag %s', $domain),
			'failed_to_import' => __('Failed to import %s %s ', $domain),
			'failed_to_import_2' => __('Failed to import &#8220;%s&#8221;: Invalid post type %s ', $domain),
			'already_exists' => __('%s &#8220;%s&#8221; already exists.', $domain),
			'failed_to_import_3' => __('Failed to import %s &#8220;%s&#8221; ', $domain),
			'menu_item' => __('Menu item skipped due to missing menu slug ', $domain),
			'menu_item_2' => __('Menu item skipped due to invalid menu slug: %s ', $domain),
			'attachments' => __('Fetching attachments is not enabled ', $domain),
			'Invalid file type' => __('Invalid file type', $domain),
			'remote' => __('Remote server did not respond', $domain),
			'remote_2' => __('Remote server returned error response %1$d %2$s ', $domain),
			'remote_3' => __('Remote file is incorrect size ', $domain),
			'zero_size' => __('Zero size file downloaded ', $domain),
			'remote_4' => __('Remote file is too large, limit is %s ', $domain),
			'step_1' => __('<span>Step <i>1</i></span> Data Import', $domain),
			'step_2' => __('<span>Step <i>2</i></span> Assign Authors', $domain),
			'A new version of' => __('A new version of this importer is available. Please update to version %s to ensure compatibility with newer export files. ', $domain),
			'select_xml' => __('Select (<b>.xml</b>) file to upload sample data.<br>If you do not want to install sample data from livedemo you need to <b>skip this step</b>.', $domain),
			'sample_data_import_warning' => __('Please note that certain content is already installed. You may simply need to skip this step. Otherwise, you can proceed with the installation.', $domain),
			
			'server_settings_error' => __('Some of your server settings do not meet the requirements for installing the sample data. Please, consult with your hosting provider on how to increase the required values.', $domain),
			'server_settings' => __('Server Settings', $domain),
			'current' => __('Current', $domain),
			'note' => __('NOTE', $domain),
			'settings_can_not_be_adjusted' => __('if for some reason those settings can not be adjusted, you may install the sample data using an <strong>alternative method</strong> - importing the <strong>.sql</strong> file directly into the database. Refer to the template documentation for instructions.', $domain),
			'template_installation' => __('You can proceed with the template installation without updating server settings, however in this case you can get errors or only part of your content will be loaded.', $domain),
			'congratulations' => __('Congratulations', $domain),
			'congratulations_msg' => __('You have successfully installed your <b>Cherry WordPress Theme</b>.<br /> You can look theme now', $domain),
			'visit_site' => __('visit site', $domain),
			'settings_output_buffering' => __('You might see only the white screen on the next step. Don\'t worry, the importing is being continued. Please wait until the installation is finished.', $domain),
			'jigoshop_attention' => __('<b>Attention:</b> the Jigoshop plugin is not activated. We recommend that you install and activate this plugin to ensure correct data importing. Otherwise, some data may be lost during the import.', $domain),
			'woocommerce_attention' => __('<b>Attention:</b> the WooCommerce plugin is not activated. We recommend that you install and activate this plugin to ensure correct data importing. Otherwise, some data may be lost during the import.', $domain),

			//function.php
			'login_error' => __('The login information you have entered is incorrect.', $domain),
			'warning_notice_1' => __('You need to enable write permissions on your server to use these functions.', $domain),
			'warning_notice_2' => __('Cherry Framework is not able to perform necessary changes for the correct work with your child theme.', $domain),
			'warning_notice_3' => __('See <a target="_blank" href="http://codex.wordpress.org/Changing_File_Permissions">the Codex</a> for more information.', $domain),
			
			//theme-init.php
			'header_menu' => __('Header Menu', $domain),
			'footer_menu' => __('Footer Menu', $domain),
			'slides' => __('Slides', $domain),
			'testimonial' => __('Testimonial', $domain),
			'services' => __('Services', $domain),
			'faqs' => __('FAQs', $domain),
			'our_team' => __('Our Team', $domain),
			'category' => __('Category', $domain),
			'tag' => __('Tag', $domain),
			
			//theme-function.php
			'thumbnail' => __('Thumbnail', $domain),
			'your_comment' => __('Your comment is awaiting moderation.', $domain),

			//theme-portfoliometa.php
			'portfolio_format' => __('Please choose desired Portfolio Format and fill additional fields.', $domain),
			'slideshow' => __('Slideshow', $domain),
			'grid_gallery' => __('Grid Gallery', $domain),
			'portfolio_options' => __('Portfolio Options', $domain),
			'format' => __('Format', $domain),
			'format_desc' => __('Choose post format that most fit your needs.', $domain),
			'date_desc' => __('Input project end date.', $domain),
			'client' => __('Client', $domain),
			'client_desc' => __('Input project owner name.', $domain),
			'info_desc' => __('Additional info for this portfolio item.', $domain),
			'url_desc' => __('Input the project URL (external link)', $domain),
			'image_settings' => __('Image Settings', $domain),
			'video_settings' => __('Video Settings', $domain),
			'video_settings_desc' => __('Input the video title (for playlist)', $domain),
			'artist' => __('Artist', $domain),
			'artist_desc' => __('Input the video artist (for playlist).', $domain),
			'url_1_desc' => __('Input URL to the <b>m4v</b> video format.', $domain),
			'url_2_desc' => __('Input URL to the <b>ogv</b> video format.', $domain),
			'embedded_code' => __('Embedded Code', $domain),
			'embedded_code_desc' => __('You can include embedded code here.<br><b>Attention!</b> This code overwrite your video URL(s).', $domain),
			'audio_settings' => __('Audio Settings', $domain),
			'audio_title_desc' => __('Input the audio title (for playlist).', $domain),
			'audio_artist_desc' => __('Input the audio artist (for playlist).', $domain),
			'audio_format' => __('Audio format', $domain),
			'audio_format_desc' => __('Choose audio format.', $domain),
			'audio_url' => __('Audio URL', $domain),
			'audio_url_desc' => __('Input the audio URL.', $domain),
			
			//theme-slidermeta.php
			'slider_options' => __('Slider Options', $domain),
			'caption' => __('Caption', $domain),
			'caption_desc' => __('Input your caption for slide (HTML tags are allowed).', $domain),
			'url_desc_slidermeta' => __('Input the slide URL (can be external link)', $domain),
			'slider_options_desc' => __('Please fill additional fields for slide.', $domain),
			
			//theme-teammeta.php
			'personal_options' => __('Personal Options', $domain),
			'personal_options_desc' => __('Please fill additional fields for person.', $domain),
			'position' => __('Position', $domain),
			'position_desc' => __('Input position of the person.', $domain),
			'info_desc_2' => __('Input additional info.', $domain),
			's_n' => __('Social Networks', $domain),
			'page_url' => __('Page URL', $domain),
			'your_s_n' => __('Your Social Networks.', $domain),
			'icon_desc' => __('In icon field you need to specify the icon name that can be copied from the <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/#brand">website</a>. E.g. "icon-facebook".', $domain),
			'network_title' => __('Social Networks Title', $domain),
			'network_title_desc' => __('Specify the heading for the social networks block.', $domain),

			//theme-testimeta.php
			'testimonial_options' => __('Testimonial Options', $domain),
			'testimonial_options_desc' => __('Please fill additional fields for testimonial.', $domain),
			'name' => __('Name', $domain),
			'name_desc' => __('Input author\'s name.', $domain),
			'url_desc_2' => __('Input author\'s URL.', $domain),
			'info_desc_3' => __('Input author\'s additional info.', $domain),
			
			//theme-postmeta.php
			'quote_settings' => __('Quote Settings', $domain),
			'quote' => __('The Quote', $domain),
			'quote_desc' => __('Put your quote in this field.', $domain),
			'author' => __('Author', $domain),
			'author_desc' => __('Put quote author in this field.', $domain),
			'link_settings' => __('Link Settings', $domain),
			'the_url' => __('The URL', $domain),
			'the_url_desc' => __('Insert the URL you wish to link to.', $domain),
			'image_settings' => __('Image Settings', $domain),
			'title_desc' => __('Input the video title (for playlist).', $domain),

			//theme-pagemeta.php
			'category_include' => __('Category Include', $domain),
			'category_slug' => __('The Category Slug', $domain),
			'category_desc' => __('Name of the custom category that is displayed on this page. You need to use the slug of the category here.', $domain),
			
			//class-tgm-plugin-activation.php, register-plugins.php
			'page_title' => __('Install Required Plugins', $domain),
			'menu_title' => __('Install Plugins', $domain),
			'installing' => __('Installing Plugin: %s', $domain),
			'oops' => __('Something went wrong', $domain),
			'notice_can_install_required' => __('This theme requires the following plugin: %1$s.', $domain),
			'notice_can_install_required_2' => __('This theme requires the following plugins: %1$s.', $domain),
			'notice_can_install_recommended' => __('This theme recommends the following plugin: %1$s.', $domain),
			'notice_can_install_recommended_2' => __('This theme recommends the following plugins: %1$s.', $domain),
			'notice_cannot_install' => __('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', $domain),
			'notice_cannot_install_2' => __('Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', $domain),
			'notice_can_activate_required' => __('The following required plugin is currently inactive: %1$s.', $domain),
			'notice_can_activate_required_2' => __('The following required plugins are currently inactive: %1$s.', $domain),
			'notice_can_activate_recommended' => __('The following recommended plugin is currently inactive: %1$s', $domain),
			'notice_can_activate_recommended_2' => __('The following recommended plugins are currently inactive: %1$s.', $domain),
			'notice_cannot_activate' => __('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', $domain),
			'notice_cannot_activate_2' => __('Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', $domain),
			'notice_ask_to_update' => __('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', $domain),
			'notice_ask_to_update_2' => __('The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s', $domain),
			'notice_cannot_update' => __('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', $domain),
			'notice_cannot_update_2' => __('Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', $domain),
			'install_link' => __('Begin installing plugin', $domain),
			'install_link_2' => __('Begin installing plugins', $domain),
			'activate_link' => __('Activate installed plugin', $domain),
			'activate_link_2' => __('Activate installed plugins', $domain),
			'return' => __('Return to Required Plugins Installer', $domain),
			'plugin_activated' => __('Plugin activated successfully', $domain),
			'complete' => __('All plugins installed and activated successfully. %1$s', $domain),
			'dashboard' => __('Return to the Dashboard', $domain),
			'following_plugin' => __('The following plugin was activated successfully: %s.', $domain),
			'dismiss' => __('Dismiss this notice', $domain),
			'external_link' => __('External Link', $domain),
			'private_repository' => __('Private Repository', $domain),
			'pre_packaged' => __('Pre-Packaged', $domain),
			'wordpress_repository' => __('WordPress Repository', $domain),
			'required' => __('Required', $domain),
			'recommended' => __('Recommended', $domain),
			'not_installed' => __('Not Installed', $domain),
			'installed_but' => __('Installed But Not Activated', $domain),
			'no_plugins' => __("No plugins to install or activate.", $domain),
			'r_dashboard' => __("Return to the Dashboard", $domain),
			'plugin_' => __('Plugin', $domain),
			'source' => __('Source', $domain),
			'type' => __('Type', $domain),
			'status' => __('Status', $domain),
			'install' => __('Install', $domain),
			'activate' => __('Activate', $domain),
			'following_plugin' => __('The following plugin was activated successfully:', $domain),
			'following_plugins' => __('The following plugins were activated successfully:', $domain),
			'no_package' => __('Install package not available.', $domain),
			'downloading_package' => __("Downloading install package from <span class='code'>%s</span>&#8230;", $domain),
			'unpack_package' => __('Unpacking the package&#8230;', $domain),
			'installing_package' => __('Installing the plugin&#8230;', $domain),
			'process_failed' => __('Plugin install failed.', $domain),
			'process_success' => __('Plugin installed successfully.', $domain),
			'activation_failed' => __('Plugin activation failed.', $domain),
			'activation_success' => __('Plugin activated successfully.', $domain),
			'skin_upgrade_start' => __('The installation and activation process is starting. This process may take a while on some hosts, so please be patient.', $domain),
			'skin_update_successful' => __('%1$s installed and activated successfully.', $domain),
			'skin_update_successful_2' => __('Show Details', $domain),
			'skin_update_successful_3' => __('Hide Details', $domain),
			'skin_upgrade_end' => __('All installations and activations have been completed.', $domain),
			'skin_before_update_header' => __('Installing and Activating Plugin %1$s (%2$d/%3$d)', $domain),
			'skin_upgrade_start_2' => __('The installation process is starting. This process may take a while on some hosts, so please be patient.', $domain),
			'skin_update_failed_error' => __('An error occurred while installing %1$s: <strong>%2$s</strong>.', $domain),
			'skin_update_failed' => __('The installation of %1$s failed.', $domain),
			'skin_update_successful_4' => __('%1$s installed successfully.', $domain),
			'skin_upgrade_end_2' => __('All installations have been completed.', $domain),
			'skin_before_update_header_2' => __('Installing Plugin %1$s (%2$d/%3$d)', $domain),
			'oops_2' => __('Something went wrong with the plugin API._', $domain),
			'updated' => __('updated', $domain),

			//class.wp-help-pointers.php
			'pointer_close' => __('Close', $domain),

			//sidebar-init.php
			'sidebar' => __('Sidebar', $domain),
			'sidebar_desc' => __('Located at the right side of pages.', $domain),
			'footer_1' => __('Footer Area 1', $domain),
			'footer_2' => __('Footer Area 2', $domain),
			'footer_3' => __('Footer Area 3', $domain),
			'footer_4' => __('Footer Area 4', $domain),
			'footer_desc' => __('Located at the bottom of pages.', $domain),
			'archives' => __('Archives', $domain),
			'meta' => __('Meta', $domain),
			
			//post-meta.php
			'no_comments' => __('No comments', $domain),
			'comment' => __('1 comment', $domain),
			'comments' => __('comments', $domain),
			'comments_link' => __('comments-link', $domain),
			'comments_closed' => __('Comments are closed', $domain),
			'has_not_tags' => __('No tags', $domain),
			'has_not_category' => __('No category', $domain),
			'number_views' => __('Number of view.', $domain),
			'like' => __('I like it.', $domain),
			'dislike' => __('I don\'t like.', $domain),
			'not_voting' => __('Only registered users can vote!', $domain),
			'have_voting' => __('You have already voted.', $domain),
			
			//post-nav.php
			'older' => __('&laquo; Older Entries', $domain),
			'newer' => __('Newer Entries &raquo;', $domain),

			//dialog.php
			'shortcode_options' => __('Shortcode Options', $domain),
			'cancel' => __('Cancel', $domain),
			'insert_shortcode' => __('Insert Shortcode', $domain),
			
			//editor_plugin.php
			'posts' => __('Posts', $domain),
			'posts_grid' => __('Posts Grid', $domain),
			'posts_list' => __('Posts List', $domain),
			'mini_posts_grid' => __('Mini Posts Grid', $domain),
			'mini_posts_list' => __('Mini Posts List', $domain),
			'recentposts' => __('Recent Posts', $domain),
			'recenttesti' => __('Recent Testimonials', $domain),
			'basic' => __('Basic', $domain),
			'banner' => __('Banner', $domain),
			'recentcomments' => __('Comments', $domain),
			'post_cycle' => __('Post Cycle', $domain),
			'carousel_elasti' => __('Carousel (Elasti)', $domain),
			'carousel_owl' => __('Carousel (OWL)', $domain),
			'roundabout' => __('Roundabout', $domain),
			'service_box' => __('Service Box', $domain),
			'hero_unit' => __('Hero Unit', $domain),
			'columns' => __('Columns', $domain),
			'fluid_column' => __('Fluid Column', $domain),
			'2_columns' => __('2 Columns', $domain),
			'3_columns' => __('3 Columns', $domain),
			'4_columns' => __('4 Columns', $domain),
			'elements' => __('Elements', $domain),
			'label' => __('Label', $domain),
			'highlight' => __('Text Highlight', $domain),
			'button' => __('Button', $domain),
			'dropcap' => __('Drop Cap', $domain),
			'blockquote' => __('Blockquote', $domain),
			'icon' => __('Icon', $domain),
			'frame' => __('Frame', $domain),
			'hr' => __('Horizontal Rule', $domain),
			'sm_hr' => __('Small Horizontal Rule', $domain),
			'vr' => __('Vertical Rule', $domain),
			'spacer' => __('Spacer', $domain),
			'progressbar' => __('Progressbar', $domain),
			'address' => __('Address', $domain),
			'clear' => __('Clear', $domain),
			'extra_wrap' => __('Extra Wrap', $domain),
			'lists' => __('Lists', $domain),
			'list_un' => __('Unstyled', $domain),
			'check_list' => __('Check List', $domain),
			'check2_list' => __('Check 2 List', $domain),
			'arrow_list' => __('Arrow List', $domain),
			'arrow2_list' => __('Arrow 2 List', $domain),
			'star_list' => __('Star List', $domain),
			'plus_list' => __('Plus List', $domain),
			'minus_list' => __('Minus List', $domain),
			'custom_list' => __('Custom List', $domain),
			'audio_video' => __('Audio & Video', $domain),
			'video_preview' => __('Video Preview', $domain),
			'misc' => __('Misc', $domain),
			'alert_box' => __('Alert Box', $domain),
			'close' => __('Close icon', $domain),
			'well' => __('Well', $domain),
			'small' => __('Small', $domain),
			'title_box' => __('Title Box', $domain),
			'template_url' => __('Template URL', $domain),
			'tabs' => __('Tabs', $domain),
			'accordions' => __('Accordion', $domain),
			'table' => __('Table', $domain),
			'map' => __('Google Map', $domain),
			'site_map' => __('Sitemap', $domain),
			
			//my-banners-widget.php
			'add_125_125' => __('Add 125x125 ads.', $domain),
			'add_125_125_desc' => __('Cherry - 125x125 Ads', $domain),
			'ad_1' => __('Ad 1', $domain),
			'ad_2' => __('Ad 2', $domain),
			'ad_3' => __('Ad 3', $domain),
			'ad_4' => __('Ad 4', $domain),
			'image_ad_link' => __('Image Ad Link:', $domain),
			'ad_link' => __('Ad Link:', $domain),
			
			//my-comment-widget.php
			'recent_comments' => __('Cherry - Recent Comments', $domain),
			'recent_comments_decs' => __('My Recent Comments', $domain),
			'go_to_c' => __('Go to this comment', $domain),
			'comments_count' => __('Number of comments to show', $domain),
			'display_avatar' => __('Display avatar', $domain),
			'avatar_size' => __('Avatar size (px)', $domain),
			'display_author_name' => __('Display the comment author', $domain),
			'display_date' => __('Display the comment date', $domain),
			'display_post_title' => __('Display post title', $domain),
			'meta_format' => __('Meta format', $domain),
			'comment_date' => __('Date', $domain),
			'comment_author' => __('Author', $domain),
			'comment_in' => __('Comment in', $domain),
			
			//my-flickr-widget.php
			'flickr' => __('Cherry - Flickr', $domain),
			'flickr_id' => __('Flickr ID:', $domain),
			'images_count' => __('Images count:', $domain),
			
			//my-posts-type-widget.php
			'advanced_cycle' => __('Cherry - Advanced Cycle', $domain),
			'advanced_cycle_desc' => __('Show custom posts', $domain),
			'posts_type' => __('Posts type', $domain),
			'posts_num' => __('Number of posts to show', $domain),
			'sort_by' => __('Sort by', $domain),
			'reverse_sort' => __('Reverse sort order (ascending)', $domain),
			'show_number' => __('Show number of comments', $domain),
			'show_meta' => __('Show meta', $domain),
			'container_class' => __('Container class', $domain),
			'default_featured_custom' => __('(default: "featured_custom_posts")', $domain),
			'post_title' => __('Post title', $domain),
			'show_post_title' => __('Show post title', $domain),
			'date_as_title' => __("Date as title <span style='font-size:11px; color:#999;'>('[mm-dd-yyyy]')</span>", $domain),
			'excerpt' => __('Excerpt', $domain),
			'post_excerpt' => __('Show post excerpt', $domain),
			'excerpt_link' => __('Excerpt as link', $domain),
			'more_link' => __('More link', $domain),
			'show_more_link' => __('Show "More link', $domain),
			'default_read_more' => __('(default: "Read more")', $domain),
			'link_class' => __('Link class', $domain),
			'default_link' => __('(default: "link")', $domain),
			'thumbnail_dimensions' => __('Thumbnail dimensions', $domain),
			'show_post_thumbnail' => __('Show post thumbnail', $domain),
			'thumbnail_as_link' => __('Thumbnail as link', $domain),
			'all_posts_link' => __('Link to all posts', $domain),
			'show_global_link' => __('Show global link to all posts', $domain),
			'default_view_all' => __('(default: "View all")', $domain),
			
			//my-recent-posts
			'recent_posts' => __('Cherry - Recent Posts', $domain),
			'permanent_link_to' => __('Permanent Link to', $domain),
			'category_slug' => __('Category Slug:', $domain),
			'post_format' => __('Post format:', $domain),
			'post_order' => __('Post order:', $domain),
			'posts_per_page' => __('Posts per page:', $domain),
			
			//my-social-widget.php
			'social_networks' => __('Cherry - Social Networks', $domain),
			'social_networks_desc' => __('Link to your social networks.', $domain),
			//'label' => __(' label:', $domain),
			'display' => __('Display:', $domain),
			'icons' => __('Icons', $domain),
			'labels' => __('Labels', $domain),
			'both' => __('Both', $domain),
			
			//my-twitter-widget.php
			'twitter' => __('Cherry - Twitter', $domain),
			'twitter_name' => __('Twitter Name:', $domain),
			'twitter_num' => __('Twitts Number:', $domain),
			
			//my-vcard-widget.php
			'vCard_name' => __('Cherry - vCard', $domain),
			'vCard_desc' => __('Use this widget to add a vCard', $domain),
			'vCard' => __('vCard', $domain),
			'street' => __('Street Address:', $domain),
			'map_url' => __('HTML map code:', $domain),
			'map_width' => __('Map width:', $domain),
			'map_height' => __('Map height:', $domain),
			'gmap_disable' => __('Display map', $domain),
			'city' => __('City/Locality:', $domain),
			'state' => __('State/Region:', $domain),
			'zipcode' => __('Zipcode/Postal Code:', $domain),
			'telephone' => __('Telephone:', $domain),
			'email' => __('Email:', $domain),

			//my-facebook-widget.php
			'facebook_widget_name' => __('Cherry - Facebook Like Box Widget', $domain),
			'facebook_widget_disc' => __('Cherry - Facebook Like Box Widget', $domain),
			'facebook_url' => __('Facebook page url', $domain),
			'facebook_desc' => __('The Like Box only works with <a target="_blank" href="https://www.facebook.com/help/174987089221178/" title="Facebook Pages">Facebook Pages.</a>', $domain),
			'color_scheme' => __('Color Scheme', $domain),
			'light' => __('Light', $domain),
			'dark' => __('Dark', $domain),
			'display_haeder' => __('Display header', $domain),
			'display_stream' => __('Display stream', $domain),
			'display_border' => __('Display border', $domain),
			'display_faces' => __('Display faces', $domain),
			'facebook_title' => __('My Facebook Page', $domain),

			//options-framework.php
			'default_options' => __('Default options restored.', $domain),
			'options_saved' => __('Options saved.', $domain),
			'cherry_store' => __('Cherry Store', $domain),
			'latest_templates' => __('Latest Templates', $domain),
			'news_and_updates' => __('News & Updates', $domain),
			'help_and_supports' => __('Help & Support', $domain),
			'no_items' => __('No items', $domain),
			'posted' => __('Posted', $domain),
			'all_templates' => __('All templates', $domain),

			//options-backup.php
			'start' => __('Start', $domain),

			//data_management_interface.php
			'data_management' => __('Data Management', $domain),
			'cherry_framework' => __('Cherry Framework', $domain),
			'update_info' => __('Update Info', $domain),
			'child_theme' => __('Child Theme', $domain),
			'update' => __('Update', $domain),
			'backup' => __('Backup', $domain),
			'restore' => __('Restore', $domain),
			'download_backup' => __('Download Backup', $domain),
			'name' => __('Name', $domain),
			'author' => __('Author', $domain),
			'your_version' => __('Your Version', $domain),
			'update_version' => __('Update Version', $domain),
			'backup_version' => __('Backup Version', $domain),
			'backup_date' => __('Last Backup Date', $domain),
			'preview' => __('Preview', $domain),
			'description' => __('Description', $domain),
			'no_backup' => __('No backup.', $domain),
			'not_defined' => __('Not defined', $domain),
			'unfortunately' => __('Unfortunately theme ', $domain),
			'please_try' => __(' backup file not found. Please try to create backup once again.', $domain),
			'info_box_1' => __('Data Management allows to update or backup framework and themes. Framework is regularly updated thus delivering new opportunities for your site.<br> To keep your data safe, you can back up the framework or child theme, to be able to download it later. If necessary, you can restore the framework or your theme using the backup.', $domain),
			'info_box_2' => __('<b>Warning!</b> Before updating framework you are strongly advised to backup your data.', $domain),
			'info_box_3' => __('You can back up your theme. If the theme has a backup copy, it is possible to restore it or download. The date of the latest backup copy is displayed in the column <b>Last Backup Date</b>.', $domain),
			'info_box_4' => __('<b style="color:red;">Warning!</b> Before updating framework you are strongly advised to <a href="admin.php?page=options-framework-data-management">backup</a> your data.', $domain),

			
			//options-medialibrary-uploader.php
			'view_file' => __('View File', $domain),
			'previously_uploaded' => __('Previously Uploaded', $domain),
			
			//options-sanitize.php
			'latin' => __('Latin', $domain),
			'latin_extended' => __('Latin Extended', $domain),
			'greek' => __('Greek', $domain),
			'greek_extended' => __('Greek Extended', $domain),
			'cyrillic' => __('Cyrillic', $domain),
			'cyrillic_extended' => __('Cyrillic Extended', $domain),
			'vietnamese' => __('Vietnamese', $domain),
			'normal' => __('Normal', $domain),
			'italic' => __('Italic', $domain),
			'bold' => __('Bold', $domain),
			'bold_italic' => __('Bold Italic', $domain),
			
			//parsers.php
			'there_was' => __('There was an error when reading this WXR file', $domain),
			'details_are' => __('Details are shown above. The importer will now try again with a different parser...', $domain),
			'SimpleXML_parse_error' => __('There was an error when reading this WXR file', $domain),
			'WXR_parse_error' => __('This does not appear to be a WXR file, missing/invalid WXR version number', $domain),
			
			//update.php
			'themes_api_failed' => __("<p>An Unexpected HTTP Error occurred during the API request.</p><p><a href='#' onclick='document.location.reload(); return false;'>Try again</a></p>", $domain),
			'themes_api_failed_2' => __('An unknown error occurred', $domain),
			'new_version' => __('There is a new version of Cherry framework available', $domain),
			'view_version' => __('View version ', $domain),
			'details' => __(' details', $domain),
			'or' => __('or', $domain),
			'update_now' => __('update now.', $domain),
			'dismiss_notice' => __('Dismiss this notice', $domain),
			
			//comments.php
			'please_do_not' => __('Please do not load this page directly. Thanks!', $domain),
			'password' => __('This post is password protected. Enter the password to view comments.', $domain),
			'response' => __('1 Response', $domain),
			'responses' => __('%1$s Responses', $domain),
			'no_comments_yet' => __('No Comments Yet.', $domain),
			'comments_are_closed' => __('Comments are closed.', $domain),
			'leave_a_reply' => __('Leave a comment', $domain),
			'you_must_be' => __('You must be', $domain),
			'post_a_comment' => __('to post a comment.', $domain),
			'logged_in' => __('Logged in', $domain),
			'logged_in_as' => __('Logged in as', $domain),
			'log_account' => __('Log out of this account;', $domain),
			'log_out' => __('Log out &raquo;', $domain),
			'name_comment' => __('Name', $domain),
			'email_comment' => __('Email (will not be published)', $domain),
			'website_comment' => __('Website', $domain),
			'your_comment' => __('Your comment*', $domain),
			'submit_comment' => __('Submit Comment', $domain),
			
			//share-buttons.php
			'tweet_this_article' => __('Tweet this article', $domain),
			
			//loop-archives.php
			'continue_reading' => __('Continue Reading', $domain),
			'pages' => __('Pages:', $domain),
			'last_posts' => __('Last 30 Posts', $domain),
			'archives_month' => __('Archives by Month:', $domain),
			'archives_subject' => __('Archives by Subject:', $domain),
			
			//loop-author.php
			'about' => __('About:', $domain),
			'recent_posts_by' => __('Recent Posts by', $domain),
			'no_post_yet' => __('No post yet', $domain),
			'recent_comments_by' => __('Recent Comments by', $domain),
			'no_comments_author' => __('%1$s on %2$s', $domain),
			'no_comments_by' => __('No comments by', $domain),
			'yet' => __('yet.', $domain),
			
			//loop-blog.php //loop-single-testi.php
			'there_has' => __('There has been an error.', $domain),
			'we_apologize' => __('We apologize for any inconvenience, please', $domain),
			'return_to' => __('return to the home page', $domain),
			'search_form' => __('or use the search form below.', $domain),
			
			//loop-faq.php
			'q' => __('Q?', $domain),
			'a' => __('A.', $domain),
			
			//loop-single.php
			'written_by' => __('Written by', $domain),
			'view_all' => __('View all posts by', $domain),
			
			//portfolio-loop.php
			'not_found' => __('Not Found', $domain),
			'apologies' => __('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', $domain),
			
			//static-footer-text.php
			'powered_by' => __('is proudly powered by', $domain),
			'entries_rss' => __('Entries (RSS)', $domain),
			'comments_rss' => __('Comments (RSS)', $domain),
			'privacy_policy' => __('Privacy Policy', $domain),
			
			//title.php
			'category_archives' => __('Category Archives', $domain),
			'portfolio_category' => __('Portfolio Category', $domain),
			'fearch_for' => __('Search for', $domain),
			'daily_archives' => __('Daily Archives', $domain),
			'monthly_archives' => __('Monthly Archives', $domain),
			'yearly_archives' => __('Yearly Archives', $domain),
			'by' => __('by ', $domain),
			'tag_archives' => __('Tag Archives', $domain),
			'portfolio_tag' => __('Portfolio Tag', $domain),
			
			//header.php
			'category_for' => __('Category Archive for', $domain),
			'tag_for' => __('Tag Archive for', $domain),
			'archive' => __('Archive', $domain),
			'error_404' => __('Error 404 Not Found', $domain),
			
			//loop-single-portfolio.php
			'launch_project' => __('Launch Project', $domain),
			
			//static-not-found.php
			'sorry' => __('Sorry!', $domain),
			'page_not_found' => __('Page Not Found', $domain),
			'page_you_are_looking' => __('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', $domain),
			'please_try_using' => __('Please try using our search box below to look for information on the internet.', $domain),
			
			//posts_list.php
			'posted_in' => __('Posted in', $domain),

			//standard.php
			'featured' => __('Featured', $domain),

			//Child theme
			//custom-function.php
			'submit_permalink' => __('Submit Permalink Structure', $domain),
			'submit_permalink_desc' => __("This way of links configuration can be used by not only our blog followers but will help in SEO-optimisation as well. The effectiveness and main features of this link configuration method are revealed <a href='http://codex.wordpress.org/Using_Permalinks'>here</a>", $domain),
			'import_sample_data' => __('Import Sample Data', $domain),
			'import_sample_data_desc' => __('If you want to install sample data from livedemo you need to go to <strong>Cherry Options</strong> > <strong>Import</strong> and follow the tips.', $domain),
			'import_sample_data_desc_2' => __('If you want to install sample data from livedemo you need to go to <strong>Import</strong> and follow the tips.', $domain),
			
			//options-interface.php
			'no_lable' => __('No lable.', $domain),

			//other
			'theme_options_media' => __('Theme Options Media', $domain),

			//widgets-manager.php
			'visibility'            => __('Visibility', $domain),
			'visible_at'            => __('Visible at', $domain),
			'visible_on'            => __('Visible on', $domain),
			'visible_for'           => __('Visible for', $domain),
			'all_pages'             => __('All pages', $domain),
			'all_pages_expecting'   => __('All pages expecting', $domain),
			'no_pages_expecting'    => __('No pages expecting', $domain),
			'homepage'              => __('Homepage', $domain),
			'page'                  => __('Page', $domain),
			'post'                  => __('Post', $domain),
			'archive'               => __('Archive', $domain),
			'page_template'         => __('Page Template', $domain),
			'search_page'           => __('Search page', $domain),
			'404_page'              => __('404 page', $domain),
			'page_id_title_slug'    => __('Page ID/Title/slug', $domain),
			'post_id_title_slug'    => __('Post ID/Title/slug', $domain),
			'category_id_name_slug' => __('Category ID/Name/slug', $domain),
			'tag_id_name'           => __('Tag ID/Name', $domain),
			'template'              => __('Template', $domain),
			'add_page'              => __('Add page', $domain),
			'selected_pages'        => __('Selected pages', $domain),
			'no_pages'              => __('No pages', $domain),
			'all_devices'           => __('All devices', $domain),
			'desktops'              => __('Desktops', $domain),
			'tablets'               => __('Tablets', $domain),
			'phones'                => __('Phones', $domain),
			'desktops_tablets'      => __('Desktops/Tablets', $domain),
			'tablets_phones'        => __('Tablets/Phones', $domain),
			'desktops_phones'       => __('Desktops/Phones', $domain),
			'all_users'             => __('All users', $domain),
			'only_guests'           => __('Only guests', $domain),
			'only_registered_users' => __('Only registered users', $domain),
			'only_administrator'    => __('Only administrator', $domain),
			'select_page_to_add'    => __('Select page to add', $domain),
			'custom_css_class'      => __('Custom CSS class', $domain),

			//seo_settings_page.php
			'sitemap_xml' => __('Sitemap XML', $domain),
			'include_post_types' => __('Include post types.', $domain),
			'priority' => __('Priority.', $domain),
			'change_freq' => __('Change freq.', $domain),
			'post_types_settings' => __('Post types settings.', $domain),
			'include_post_types_desc' => __('<strong>Include post types</strong> - specify the post types which will be included into your sitemap.', $domain),
			'priority_desc' => __('<strong>Priority</strong> - set post type priorities on your site. For example, if the blog page content is more important for search engines than the portfolio page content, set the priority for blog posts as 1, for portfolio pages as 0.9 and so on.', $domain),
			'change_freq_desc' => __('<strong>Change frequency</strong> - specify how often you change certain post types. It helps the search engines to determine how relevant your information is at the moment of search.', $domain),
			'ping_sitemap_desc' => __('<strong>Ping sitemap</strong> - choose the search engines which will receive the link to your sitemap.', $domain),
			'ping_sitemap' => __('Ping sitemap.', $domain),
			'seo' => __('SEO', $domain),
			'index_settings' => __('Your website indexation settings.', $domain),
			'forbid' => __('Forbid the search engines to index the following directories of your site.', $domain),
			'these_settings' => __('These settings will help reduce the information search range on your site. ', $domain),
			'admin_index' => __('WordPress engine system files and folders <em>(recommended)</em>', $domain),
			'plagin_index' => __('Your plugins system files and folders <em>(recommended)</em>', $domain),
			'theme_index' => __('Your themes system files and folders <em>(recommended)</em>', $domain),
			'media_index' => __('Media library files (images, video, audio, etc.) <em>(not recommended)</em>', $domain),
			'nofollow_name' => __('Add the <em>"rel"</em> attribute with the <em>"nofollow"</em> value to content links.', $domain),
			'nofollow_desc' => __('This option will stop the search engines from going to other sites following the links in your site content.', $domain),

			'' => '' // empty value
			);
		return $locals[$label];
	};
?>