<?php
/**
 * Add the general options to the theme customizer
 */
function nuovo_general_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'general',
        array(
            'title' => __('General Settings', 'nuovo'),
            'description' => __('This is the general settings section.', 'nuovo'),
            'priority' => 35,
        )
    );

    // Add in the RSS Feed Option
    $wp_customize->add_setting(
   		'nuovo-rss-feed',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_link',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-rss-feed',
    	array(
        	'label' => __('Custom RSS Feed', 'nuovo'),
        	'section' => 'general',
        	'type' => 'text',
    	)
	);

	// Add in the Color Theme Option
    $wp_customize->add_setting(
   		'nuovo-color-theme',
    	array(
        	'default' => 'default',
        	'sanitize_callback' => 'nuovo_sanitize_select',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-color-theme',
    	array(
        	'label' => __('Color Theme', 'nuovo'),
        	'section' => 'general',
        	'type' => 'select',
        	'choices' => array(
        		'default' => __('Default', 'nuovo'),
        		'blue' => __('Blue', 'nuovo'),
        		'green' => __('Green', 'nuovo'),
        		'orange' => __('Orange', 'nuovo'),
        		'purple' => __('Purple', 'nuovo'),
        		'red' => __('Red', 'nuovo'),
        		'yellow' => __('Yellow', 'nuovo')
        	)
    	)
	);

	// Add in the Top Menu Option
    $wp_customize->add_setting(
   		'nuovo-top-menu',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_checkbox',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-top-menu',
    	array(
        	'label' => __('Top Menu', 'nuovo'),
        	'section' => 'general',
        	'type' => 'checkbox',
    	)
	);

	// Add in the Author Bio Option
    $wp_customize->add_setting(
   		'nuovo-author-bio',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_checkbox',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-author-bio',
    	array(
        	'label' => __('Author Bio', 'nuovo'),
        	'section' => 'general',
        	'type' => 'checkbox',
    	)
	);
}
add_action( 'customize_register', 'nuovo_general_customizer' );

/**
 * Add the social media options to the theme customizer
 */
function nuovo_social_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'social_media',
        array(
            'title' => __('Social Media Settings', 'nuovo'),
            'description' => __('This is the social media settings section.', 'nuovo'),
            'priority' => 35,
        )
    );

    // Add the Facebook Link Option
    $wp_customize->add_setting(
   		'nuovo-facebook',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_link',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-facebook',
    	array(
        	'label' => __('Facebook Link', 'nuovo'),
        	'section' => 'social_media',
        	'type' => 'text',
    	)
	);

	// Add the Twitter Link Option
    $wp_customize->add_setting(
   		'nuovo-twitter',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_link',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-twitter',
    	array(
        	'label' => __('Twitter Link', 'nuovo'),
        	'section' => 'social_media',
        	'type' => 'text',
    	)
	);

	// Add the YouTube Link Option
    $wp_customize->add_setting(
   		'nuovo-youtube',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_link',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-youtube',
    	array(
        	'label' => __('YouTube Link', 'nuovo'),
        	'section' => 'social_media',
        	'type' => 'text',
    	)
	);

	// Add the Google+ Link Option
    $wp_customize->add_setting(
   		'nuovo-googleplus',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_link',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-googleplus',
    	array(
        	'label' => __('Google+ Link', 'nuovo'),
        	'section' => 'social_media',
        	'type' => 'text',
    	)
	);

	// Add the LinkedIn Link Option
    $wp_customize->add_setting(
   		'nuovo-linkedin',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_link',
    	)
	);

	$wp_customize->add_control(
    	'nuovo-linkedin',
    	array(
        	'label' => __('LinkedIn Link', 'nuovo'),
        	'section' => 'social_media',
        	'type' => 'text',
    	)
	);
}
add_action( 'customize_register', 'nuovo_social_customizer' );

/**
 * Add the homepage options to the theme customizer
 */
function nuovo_homepage_customizer( $wp_customize ) {
    
    $cats = get_categories();
    foreach($cats as $cat) {
          $cat_args[$cat->term_id] = $cat->name;
    }

	$wp_customize->add_section(
        'homepage',
        array(
            'title' => __('Homepage Options', 'nuovo'),
            'description' => __('This is the homepage settings section.', 'nuovo'),
            'priority' => 35,
        )
    );

	// Add the Slideshow Category Option
    $wp_customize->add_setting(
   		'nuovo-slideshow-category',
    	array(
        	'default' => '',
        	'sanitize_callback' => 'nuovo_sanitize_category',
    	)
	);

	$wp_customize->add_control(
        'nuovo-slideshow-category',
        array(
            'label' => 'Slideshow Category',
            'section' => 'homepage',
            'type' => 'select',
            'choices' => $cat_args
        )
    );
    
    // Add the Slideshow Count Option
    $wp_customize->add_setting(
        'nuovo-slideshow-count',
        array(
            'default' => '4',
            'sanitize_callback' => 'nuovo_sanitize_num',
        )
    );

    $wp_customize->add_control(
        'nuovo-slideshow-count',
        array(
            'label' => 'Number of Slideshow Posts',
            'section' => 'homepage',
            'type' => 'text',
        )
    );

    // Add the First Category Option
    $wp_customize->add_setting(
        'nuovo-category-one',
        array(
            'default' => '',
            'sanitize_callback' => 'nuovo_sanitize_category',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-one',
        array(
            'label' => 'First Category',
            'section' => 'homepage',
            'type' => 'select',
            'choices' => $cat_args,
        )
    );

    // Add the First Category Option
    $wp_customize->add_setting(
        'nuovo-category-one-count',
        array(
            'default' => 3,
            'sanitize_callback' => 'nuovo_sanitize_category',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-one-count',
        array(
            'label' => 'Number of Posts in the First Section',
            'section' => 'homepage',
            'type' => 'text',
        )
    );

    // Add the Second Category Option
    $wp_customize->add_setting(
        'nuovo-category-two',
        array(
            'default' => '',
            'sanitize_callback' => 'nuovo_sanitize_category',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-two',
        array(
            'label' => 'Second Category',
            'section' => 'homepage',
            'type' => 'select',
            'choices' => $cat_args
        )
    );

    // Add the Second Category Count Option
    $wp_customize->add_setting(
        'nuovo-category-two-count',
        array(
            'default' => 0,
            'sanitize_callback' => 'nuovo_sanitize_num',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-two-count',
        array(
            'label' => 'Number of Posts in the Second Section',
            'section' => 'homepage',
            'type' => 'text',
        )
    );

    // Add the Third Category Option
    $wp_customize->add_setting(
        'nuovo-category-three',
        array(
            'default' => '',
            'sanitize_callback' => 'nuovo_sanitize_category',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-three',
        array(
            'label' => 'Third Category',
            'section' => 'homepage',
            'type' => 'select',
            'choices' => $cat_args
        )
    );

    // Add the Third Category Count Option
    $wp_customize->add_setting(
        'nuovo-category-three-count',
        array(
            'default' => 0,
            'sanitize_callback' => 'nuovo_sanitize_num',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-three-count',
        array(
            'label' => 'Number of Posts in the Third Section',
            'section' => 'homepage',
            'type' => 'text',
        )
    );

    // Add the Fourth Category Option
    $wp_customize->add_setting(
        'nuovo-category-four',
        array(
            'default' => '',
            'sanitize_callback' => 'nuovo_sanitize_category',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-four',
        array(
            'label' => 'Fourth Category',
            'section' => 'homepage',
            'type' => 'select',
            'choices' => $cat_args
        )
    );

    // Add the Fourth Category Count Option
    $wp_customize->add_setting(
        'nuovo-category-four-count',
        array(
            'default' => 0,
            'sanitize_callback' => 'nuovo_sanitize_num',
        )
    );

    $wp_customize->add_control(
        'nuovo-category-four-count',
        array(
            'label' => 'Number of Posts in the Fourth Section',
            'section' => 'homepage',
            'type' => 'text',
        )
    );

    // Add the Latest Post Count Option
    $wp_customize->add_setting(
        'nuovo-latest-posts-count',
        array(
            'default' => 10,
            'sanitize_callback' => 'nuovo_sanitize_num',
        )
    );

    $wp_customize->add_control(
        'nuovo-latest-posts-count',
        array(
            'label' => 'Number of Latest Posts',
            'section' => 'homepage',
            'type' => 'text',
        )
    );

}
add_action( 'customize_register', 'nuovo_homepage_customizer' );

function nuovo_sanitize_link($input) {
	return wp_filter_nohtml_kses($input);
}

function nuovo_sanitize_select( $input ) {
    $valid = array(
        'default' => __('Default', 'nuovo'),
        'blue' => __('Blue', 'nuovo'),
        'green' => __('Green', 'nuovo'),
        'orange' => __('Orange', 'nuovo'),
        'purple' => __('Purple', 'nuovo'),
        'red' => __('Red', 'nuovo'),
        'yellow' => __('Yellow', 'nuovo')
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return 'default';
    }
}

function nuovo_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function nuovo_sanitize_category( $input ) {
	$cats = get_categories();
    foreach($cats as $cat) {
          $cat_args[$cat->term_id] = $cat->name;
    }
	if ( array_key_exists( $input, $cat_args ) ){
		return $input;
	} else {
		return 1;
	}
}

function nuovo_sanitize_num($input) {
    return intval($input);
}
?>