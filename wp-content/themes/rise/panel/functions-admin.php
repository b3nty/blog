<?php
/**
 * rise admin functions
 *
 * @package rise 
 */

// admin area styling
function rise_custom_colors() {
   echo '<style type="text/css">
   
          #setting-error-tgmpa {
			border-left: 4px solid #37b492;
			padding: 15px 20px;
			}
		  #setting-error-tgmpa p {
			font-size: 14px;
			font-weight: 300 !important; 
			color: #404040;
			margin: 0;
		  }
		  #setting-error-tgmpa p strong {
			font-weight: 300 !important;
		  }
		  #setting-error-tgmpa p strong a {
			font-size: 14px !important;
			text-decoration: none !important;
			color: #37b492 !important;
			font-weight: 600 !important;
		  }
			
         </style>';
}

add_action('admin_head', 'rise_custom_colors');

/**
 *TGM Plugin activation.
 */
require_once get_template_directory() . '/panel/class-tgm-plugin-activation.php'; 
 
add_action( 'tgmpa_register', 'rise_recommend_plugin' ); 
function rise_recommend_plugin() { 
 
    $plugins = array(
        // Include plugin from the WordPress Plugin Repository
		
		array(
			'name' 		=> esc_html__( 'Contact Form 7', 'rise' ), // http://wordpress.org/plugins/contact-form-7/
			'slug' 		=> 'contact-form-7',
			'required' 	=> false 
		), 
		
		array(
			'name' 		=> esc_html__( 'Simple Custom CSS', 'rise' ), // http://wordpress.org/plugins/simple-custom-css/
			'slug' 		=> 'simple-custom-css', 
			'required' 	=> false
		),

		    
    );
 
    tgmpa( $plugins ); 
 
}
