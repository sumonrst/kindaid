<?php 

// Kirki Panel

new \Kirki\Panel(
	'kindaid_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Kindaid Options', 'kindaid' ),
		'description' => esc_html__( 'Kindaid Options Description.', 'kindaid' ),
	]
);

// Header Info Section

function kindaid_header_info(){
	new \Kirki\Section(
	'header_info',
		[
			'title'       => esc_html__( 'Header Info', 'kindaid' ),
			'description' => esc_html__( 'Header Information Settings', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'button_text',
			'label'    => esc_html__( 'Button Text', 'kindaid' ),
			'section'  => 'header_info',
			'default'  => esc_html__( 'Button Text', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\URL(
		[
			'settings' => 'button_url',
			'label'    => esc_html__( 'Button Url', 'kindaid' ),
			'section'  => 'header_info',
			'default'  => esc_html__( '#', 'kindaid' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'header_global',
			'label'       => esc_html__( 'Select global header', 'kindaid' ),
			'section'     => 'header_info',
			'default'     => 'header_global_1',
			'placeholder' => esc_html__( 'Choose an option', 'kindaid' ),
			'choices'     => [
				'header_global_1' => esc_html__( 'Header Global Style 1', 'kindaid' ),
				'header_global_2' => esc_html__( 'Header Global Style 2', 'kindaid' ),
				'header_global_3' => esc_html__( 'Header Global Style 3', 'kindaid' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'header_right_switch',
			'label'       => esc_html__( 'Header Right Switch', 'kindaid' ),
			'description' => esc_html__( 'Enable or disable the right-side header section info', 'kindaid' ),
			'section'     => 'header_info',
			'default'     => false,
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'kindaid' ),
				'off' => esc_html__( 'Disable', 'kindaid' ),
			],
		]
	);
}
kindaid_header_info();



//  Kindaid Social Info Section Start

function kindaid_social_info_section(){
	new \Kirki\Section(
		'kindaid_social_info',
		[
			'title'       => esc_html__( 'Kindaid Social Info', 'kindaid' ),
			'description' => esc_html__( 'Kindaid Social Info Settings', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'kindaid_offcanvas_fb_url',
			'label'    => esc_html__( 'Facebook URL', 'kindaid' ),
			'section'  => 'kindaid_social_info',
			'default'  => esc_html__( 'https://www.facebook.com', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'kindaid_offcanvas_twitter_url',
			'label'    => esc_html__( 'Twitter URL', 'kindaid' ),
			'section'  => 'kindaid_social_info',
			'default'  => esc_html__( 'https://www.twitter.com', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'kindaid_offcanvas_instagram_url',
			'label'    => esc_html__( 'Instagram URL', 'kindaid' ),
			'section'  => 'kindaid_social_info',
			'default'  => esc_html__( 'https://www.instagram.com', 'kindaid' ),
			'priority' => 10,
		]
	);

}

kindaid_social_info_section();




// Header Logo Section

function kindaid_header_logo(){
	new \Kirki\Section(
		'header_logo',
		[
			'title'       => esc_html__( 'Header Logo', 'kindaid' ),
			'description' => esc_html__( 'Header Logo Settings', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'logo',
			'label'       => esc_html__( 'Logo', 'kindaid' ),
			'section'     => 'header_logo',
			'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
		]
	);
	new \Kirki\Field\Image(
		[
			'settings'    => 'header_transparent_logo',
			'label'       => esc_html__( 'Transparent Logo', 'kindaid' ),
			'section'     => 'header_logo',
			'default'     => get_template_directory_uri() . '/assets/img/logo/logo-yellow.png',
		]
	);
}
kindaid_header_logo();


// Header Offcanvas  Section

function kindaid_header_offcanvas(){
	new \Kirki\Section(
		'header_offcanvas',
		[
			'title'       => esc_html__( 'Header Offcanvas', 'kindaid' ),
			'description' => esc_html__( 'Header Offcanvas Settings', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'offcanves_logo',
			'label'       => esc_html__( ' Offcanvas Logo', 'kindaid' ),
			'section'     => 'header_offcanvas',
			'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_title',
			'label'    => esc_html__( 'Offcanvas Title', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Hello There!', 'kindaid' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_sub_des',
			'label'    => esc_html__( 'Offcanvas Sub Description', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kindaid' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings'    => 'offcanvas_gallery_images',
			'label'       => esc_html__( 'Offcanvas Gallery Images', 'kindaid' ),
			'section'     => 'header_offcanvas',
			'button_label'=> esc_html__( 'Add New Image', 'kindaid' ),
			'row_label'   => [
				'type'  => 'text',
				'value' => esc_html__( 'Gallery Image', 'kindaid' ),
			],
			'fields'      => [
				'image' => [
					'type'    => 'image',
					'label'   => esc_html__( 'Image', 'kindaid' ),
					'default' => '',
				],
			],
		]
	);

	// Offcanvas Information Fields

	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_title',
			'label'    => esc_html__( 'Offcanvas Info Title', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Information', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_phone',
			'label'    => esc_html__( 'Offcanvas Info Phone', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '+ 4 20 7700 1007', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_phone_url',
			'label'    => esc_html__( 'Offcanvas Info Phone URL', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '#', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_email',
			'label'    => esc_html__( 'Offcanvas Info Email', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'hello@exdos.com', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_email_url',
			'label'    => esc_html__( 'Offcanvas Info Email URL', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '#', 'kindaid' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_info_address',
			'label'    => esc_html__( 'Offcanvas Info Address', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Avenue de Roma 158b, Lisboa', 'kindaid' ),
			'priority' => 10,
		]
	);

}
kindaid_header_offcanvas();


// Blog Section Start
function kindaid_Blog_Options(){
	new \Kirki\Section(
		'blog_section',
		[
			'title'       => esc_html__( 'Blog Settings', 'kindaid' ),
			'description' => esc_html__( 'Here blog settings will be placed', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'blog_btn_show_hide',
				'label'       => esc_html__( 'Blog Button Show/Hide', 'kindaid' ),
				'description' => esc_html__( 'Show or hide the "Read More" button on blog archive pages', 'kindaid' ),
				'section'     => 'blog_section',
				'default'     => 'off',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kindaid' ),
					'off' => esc_html__( 'Disable', 'kindaid' ),
				],
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'blog_read_more_text',
				'label'    => esc_html__( 'Blog Read More', 'kindaid' ),
				'section'  => 'blog_section',
				'default'     => esc_html__( 'Read More', 'kindaid' ),
				'priority' => 10,
			]
		);

		// Blog category show/hide option
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'blog_category_show_hide',
				'label'       => esc_html__( 'Blog Category Show/Hide', 'kindaid' ),
				'description' => esc_html__( 'Show or hide the blog category on blog archive pages', 'kindaid' ),
				'section'     => 'blog_section',
				'default'     => 'off',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kindaid' ),
					'off' => esc_html__( 'Disable', 'kindaid' ),
				],
			]
		);

		// Blog Author show/hide option
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'blog_meta_author_show_hide',
				'label'       => esc_html__( 'Blog Author Show/Hide', 'kindaid' ),
				'description' => esc_html__( 'Show or hide the blog author on blog archive pages', 'kindaid' ),
				'section'     => 'blog_section',
				'default'     => 'off',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kindaid' ),
					'off' => esc_html__( 'Disable', 'kindaid' ),
				],
			]
		);

		// Blog Date show/hide option
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'blog_meta_date_show_hide',
				'label'       => esc_html__( 'Blog Date Show/Hide', 'kindaid' ),
				'description' => esc_html__( 'Show or hide the blog date on blog archive pages', 'kindaid' ),
				'section'     => 'blog_section',
				'default'     => 'off',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kindaid' ),
					'off' => esc_html__( 'Disable', 'kindaid' ),
				],
			]
		);

		// Blog Comment show/hide option
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'blog_meta_comment_show_hide',
				'label'       => esc_html__( 'Blog Comment Show/Hide', 'kindaid' ),
				'description' => esc_html__( 'Show or hide the blog comment on blog archive pages', 'kindaid' ),
				'section'     => 'blog_section',
				'default'     => 'off',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kindaid' ),
					'off' => esc_html__( 'Disable', 'kindaid' ),
				],
			]
		);

}
kindaid_Blog_Options();


// 404 Error Section Start
function kindaid_Error_Options(){
	new \Kirki\Section(
		'error_section',
		[
			'title'       => esc_html__( '404 Error Settings', 'kindaid' ),
			'description' => esc_html__( 'Here error 404 settings will be placed', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

		// 404 Title Text
		new \Kirki\Field\Text(
			[
				'settings' => 'error_title_text',
				'label'    => esc_html__( '404 Error Title Text', 'kindaid' ),
				'section'  => 'error_section',
				'default'     => esc_html__( '404', 'kindaid' ),
				'priority' => 10,
			]
		);

		// 404 sub Title Text
		new \Kirki\Field\Text(
			[
				'settings' => 'error_sub_title_text',
				'label'    => esc_html__( '404 Error Sub Title Text', 'kindaid' ),
				'section'  => 'error_section',
				'default'     => esc_html__( 'page not found', 'kindaid' ),
				'priority' => 10,
			]
		);

		// 404 sub Title Text
		new \Kirki\Field\Textarea(
			[
				'settings' => 'error_description',
				'label'    => esc_html__( '404 Error Description', 'kindaid' ),
				'section'  => 'error_section',
				'default'     => esc_html__( 'Sorry, but the page you are looking for does not exist, has been removed, name changed or is temporarily unavailable.', 'kindaid' ),
				'priority' => 10,
			]
		);

		// 404 Button show/hide 
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'error_btn_show_hide',
				'label'       => esc_html__( '404 Button Show/Hide', 'kindaid' ),
				'description' => esc_html__( 'Show or hide the "Go Back Home" button on 404 error pages', 'kindaid' ),
				'section'     => 'error_section',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kindaid' ),
					'off' => esc_html__( 'Disable', 'kindaid' ),
				],
			]
		);

		// 404 Button Text
		new \Kirki\Field\Textarea(
			[
				'settings' => 'error_button_text',
				'label'    => esc_html__( '404 Button Text', 'kindaid' ),
				'section'  => 'error_section',
				'default'     => esc_html__( 'Go Back Home', 'kindaid' ),
				'priority' => 10,
			]
		);




}
kindaid_Error_Options();


// Footer Copyright Section
function kindaid_Footer_Options(){
	new \Kirki\Section(
		'footer_option',
		[
			'title'       => esc_html__( 'Footer Option', 'kindaid' ),
			'description' => esc_html__( 'This is footer copyright section', 'kindaid' ),
			'panel'       => 'kindaid_panel',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'footer_global',
			'label'       => esc_html__( 'Select global Footer', 'kindaid' ),
			'section'     => 'footer_option',
			'default'     => 'footer_global_1',
			'placeholder' => esc_html__( 'Choose an option', 'kindaid' ),
			'choices'     => [
				'footer_global_1' => esc_html__( 'Footer Global Style 1', 'kindaid' ),
				'footer_global_2' => esc_html__( 'Footer Global Style 2', 'kindaid' ),
			],
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'footer_bg_img',
			'label'       => esc_html__( 'Footer BG Image', 'kindaid' ),
			'section'     => 'footer_option',
			'description' => esc_html__( 'Select your footer BG image from here', 'kindaid' ),
		]
	);

	new \Kirki\Field\Textarea(
		[
			'settings' => 'footer_text',
			'label'    => esc_html__( 'Footer Copyright Text', 'kindaid' ),
			'section'  => 'footer_option',
			'default'     => esc_html__( '© 2025 Charity. is Proudly Powered by Aqlova', 'kindaid' ),
			'priority' => 10,
		]
	);


}
kindaid_Footer_Options();























