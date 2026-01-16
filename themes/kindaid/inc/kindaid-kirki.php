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
			'label'       => esc_html__( 'Select global header', 'kirki' ),
			'section'     => 'header_info',
			'default'     => 'header_global_1',
			'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
			'choices'     => [
				'header_global_1' => esc_html__( 'Header Global Style 1', 'kirki' ),
				'header_global_2' => esc_html__( 'Header Global Style 2', 'kirki' ),
				'header_global_3' => esc_html__( 'Header Global Style 3', 'kirki' ),
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
			'default'  => esc_html__( 'https://www.facebook.com', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'kindaid_offcanvas_twitter_url',
			'label'    => esc_html__( 'Twitter URL', 'kindaid' ),
			'section'  => 'kindaid_social_info',
			'default'  => esc_html__( 'https://www.twitter.com', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'kindaid_offcanvas_instagram_url',
			'label'    => esc_html__( 'Instagram URL', 'kindaid' ),
			'section'  => 'kindaid_social_info',
			'default'  => esc_html__( 'https://www.instagram.com', 'kirki' ),
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
			'default'  => esc_html__( 'Hello There!', 'kirki' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_sub_des',
			'label'    => esc_html__( 'Offcanvas Sub Description', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consect etur adipiscing elit.', 'kirki' ),
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
			'default'  => esc_html__( 'Information', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_phone',
			'label'    => esc_html__( 'Offcanvas Info Phone', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '+ 4 20 7700 1007', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_phone_url',
			'label'    => esc_html__( 'Offcanvas Info Phone URL', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_email',
			'label'    => esc_html__( 'Offcanvas Info Email', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'hello@exdos.com', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'offcanvas_info_email_url',
			'label'    => esc_html__( 'Offcanvas Info Email URL', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( '#', 'kirki' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Textarea(
		[
			'settings' => 'offcanvas_info_address',
			'label'    => esc_html__( 'Offcanvas Info Address', 'kindaid' ),
			'section'  => 'header_offcanvas',
			'default'  => esc_html__( 'Avenue de Roma 158b, Lisboa', 'kirki' ),
			'priority' => 10,
		]
	);

}
kindaid_header_offcanvas();



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
			'label'       => esc_html__( 'Select global Footer', 'kirki' ),
			'section'     => 'footer_option',
			'default'     => 'footer_global_1',
			'placeholder' => esc_html__( 'Choose an option', 'kirki' ),
			'choices'     => [
				'footer_global_1' => esc_html__( 'Footer Global Style 1', 'kirki' ),
				'footer_global_2' => esc_html__( 'Footer Global Style 2', 'kirki' ),
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
			'default'     => esc_html__( '© 2025 Charity. is Proudly Powered by Aqlova', 'kirki' ),
			'priority' => 10,
		]
	);


}
kindaid_Footer_Options();























