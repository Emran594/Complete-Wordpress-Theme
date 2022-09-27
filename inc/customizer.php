<?php 
define('PHOTO_CUSTOMIZER_CONFIG_ID','photo_customizer_settings');
define('PHOTO_CUSTOMIZER_PANEL_ID','photo_customizer_panel');

if(class_exists('Kirki')){
    Kirki::add_config( 'PHOTO_CUSTOMIZER_CONFIG_ID', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
    Kirki::add_panel( 'PHOTO_CUSTOMIZER_PANEL_ID', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Photo Section Panel', 'photo' ),
        'description' => esc_html__( 'This Panel About Photo Section', 'photo' ),
    ) );
    Kirki::add_section( 'photo_seciton_hero', array(
        'title'          => esc_html__( 'Homepage Banner', 'photo' ),
        'description'    => esc_html__( 'This Section is About Banner Description', 'photo' ),
        'panel'          => 'PHOTO_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-template/front.php' );
        }
    ) );
    Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'banner_settings',
        'label'       => esc_html__( 'Is Active Banner Section', 'photo' ),
        'section'     => 'photo_seciton_hero',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'photo' ),
            'off' => esc_html__( 'Deactive', 'photo' ),
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'image',
        'settings'    => 'banner_image_man',
        'label'       => esc_html__( 'Banner Image Man', 'photo' ),
        'description' => esc_html__( 'This will show on banner image', 'photo' ),
        'section'     => 'photo_seciton_hero',
        'active_callback' => [
            [
                'setting' => 'banner_settings',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'hero_subtitle',
        'label'    => esc_html__( 'Hero Subtitle', 'photo' ),
        'section'  => 'photo_seciton_hero',
        'default'  => esc_html__( 'Creative Photography', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'banner_settings',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
    Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'hero_title',
        'label'    => esc_html__( 'Hero Title', 'photo' ),
        'section'  => 'photo_seciton_hero',
        'default'  => esc_html__( 'Photography Make Us Happy Take a shot', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'banner_settings',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'hero_btn_title',
        'label'    => esc_html__( 'Hero Button Label', 'photo' ),
        'section'  => 'photo_seciton_hero',
        'default'  => esc_html__( 'Watch Portfolio', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'banner_settings',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'hero_btn_link',
        'label'    => esc_html__( 'Hero Button Link', 'photo' ),
        'section'  => 'photo_seciton_hero',
        'default'  => esc_html__( 'https://handyprofit.com/', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'banner_settings',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );

	// About Section Start

	Kirki::add_section( 'photo_seciton_about', array(
        'title'          => esc_html__( 'About Section', 'photo' ),
        'description'    => esc_html__( 'This Section is About section', 'photo' ),
        'panel'          => 'PHOTO_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-template/front.php' );
        }
    ) );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'switcher_about',
        'label'       => esc_html__( 'Is Active About Section', 'photo' ),
        'section'     => 'photo_seciton_about',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'photo' ),
            'off' => esc_html__( 'Deactive', 'photo' ),
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_title',
        'label'    => esc_html__( 'About Main Title', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( 'HOW WE MAKE USER EXPERIENCES', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_mail',
        'label'    => esc_html__( 'About mail  ', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( 'hire@colorlib.com', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_mail_link',
        'label'    => esc_html__( 'About mail Link ', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( '#', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_content',
        'label'    => esc_html__( 'About Content', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( 'You can’t use up creativity. The more you use, themore you have in your signifant mind.', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_author',
        'label'    => esc_html__( 'About Author', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( 'Emran Sikder', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_author_designation',
        'label'    => esc_html__( 'Author Designation', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( 'Emran Sikder', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'about_experience',
        'label'    => esc_html__( 'About Experience', 'photo' ),
        'section'  => 'photo_seciton_about',
        'default'  => esc_html__( 'Emran Sikder', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'image',
        'settings'    => 'about_shape',
        'label'       => esc_html__( 'About Shape', 'photo' ),
        'description' => esc_html__( 'Shape Image', 'photo' ),
        'section'     => 'photo_seciton_about',
        'active_callback' => [
            [
                'setting' => 'switcher_about',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );

	Kirki::add_section( 'photo_seciton_achivement', array(
        'title'          => esc_html__( 'Achivemant Section', 'photo' ),
        'description'    => esc_html__( 'This Section is About Achivement', 'photo' ),
        'panel'          => 'PHOTO_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-template/front.php' );
        }
    ) );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'switcher_achivement',
        'label'       => esc_html__( 'Is Active achivement', 'photo' ),
        'section'     => 'photo_seciton_achivement',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'photo' ),
            'off' => esc_html__( 'Deactive', 'photo' ),
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_title',
        'label'    => esc_html__( 'Achivement Title', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'TAKE A LOOK AT OUR ACHIVMENT', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_subtitle',
        'label'    => esc_html__( 'Achivement Sub Title', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'TAKE A LOOK AT OUR ACHIVMENT', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_btn',
        'label'    => esc_html__( 'Button label', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'TAKE A LOOK AT OUR ACHIVMENT', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_btn_link',
        'label'    => esc_html__( 'Button label', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'TAKE A LOOK AT OUR ACHIVMENT', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );

	Kirki::add_section( 'photo_seciton_achivement', array(
        'title'          => esc_html__( 'Achivemant Section', 'photo' ),
        'description'    => esc_html__( 'This Section is About Achivement', 'photo' ),
        'panel'          => 'PHOTO_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-template/front.php' );
        }
    ) );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'        => 'switch',
        'settings'    => 'switcher_achivement',
        'label'       => esc_html__( 'Is Active achivement', 'photo' ),
        'section'     => 'photo_seciton_achivement',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Active', 'photo' ),
            'off' => esc_html__( 'Deactive', 'photo' ),
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_title',
        'label'    => esc_html__( 'Achivement Title', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'TAKE A LOOK AT OUR ACHIVMENT', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_subtitle',
        'label'    => esc_html__( 'Achivement Sub Title', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'Excepteur sint occaecat cupidatat. irure dolor in.

        ', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_btn',
        'label'    => esc_html__( 'Button label', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'Get Started', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );
	Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'achivement_btn_link',
        'label'    => esc_html__( 'Button label', 'photo' ),
        'section'  => 'photo_seciton_achivement',
        'default'  => esc_html__( 'Service Page link', 'photo' ),
        'priority' => 10,
		'active_callback' => [
            [
                'setting' => 'switcher_achivement',
                'operator' => "==",
                'value' => true
            ]
        ]
    ] );

    Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID',[
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Featured Boxe', 'photo' ),
        'section'     => 'photo_seciton_achivement',
        'priority'    => 10,
        'row_label' => array(
            'type' => 'text',
            'value' => esc_attr__('Featured Boxes', 'photo' ),
        ),
        'settings'    => 'featured_boxes_repeater',
        'choices' => array(
            'limit' => 6
        ),
        'active_callback' => array(
            array(
                'setting'  => 'switcher_achivement',
                'operator' => '==',
                'value'    => true,
                ),
        ),
        'default'     => array(
            array(
                'achivemant_title' => esc_attr__( 'Noble Prize', 'photo' ),
                'achivemant_subtitle'  => esc_url('Award 2019', 'photo'),
                'achivemant_img' => esc_url('#', 'photo'),
            ),
            array(
                'achivemant_title' => esc_attr__( 'Ekusey Podok', 'photo' ),
                'achivemant_subtitle'  => esc_url('Award 2010', 'photo'),
                'achivemant_img' => esc_url('#', 'photo'),
            ),
            array(
                'achivemant_title' => esc_attr__( 'Behance Prize', 'photo' ),
                'achivemant_subtitle'  => esc_url('Award 2005', 'photo'),
                'achivemant_img' => esc_url('#', 'photo'),
            ),
             array(
                'achivemant_title' => esc_attr__( 'Tafsir Prize', 'photo' ),
                'achivemant_subtitle'  => esc_url('Award 2009', 'photo'),
                'achivemant_img' => esc_url('#', 'photo'),
            ),
            array(
                'achivemant_title' => esc_attr__( 'Newton Prize', 'photo' ),
                'achivemant_subtitle'  => esc_url('Award 2021', 'photo'),
                'achivemant_img' => esc_url('#', 'photo'),
            ),
            array(
                'achivemant_title' => esc_attr__( 'Emran Prize', 'photo' ),
                'achivemant_subtitle'  => esc_url('Award 2011', 'photo'),
                'achivemant_img' => esc_url('#', 'photo'),
            )
        ),
        'fields' => array(
            'featured_boxe_title' => array(
                'type'        => 'text',
                'label'       => esc_attr__( 'Achivement Title', 'photo' ),
                'default'     => '',
            ),
            'featured_boxe_link' => array(
                'type'        => 'text',
                'label'       => esc_attr__( 'Achivement Year', 'photo' ),
                'default'     => '',
            ),
            'featured_boxe_img' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Prize Image', 'photo' ),
                'description' => esc_attr__( 'Upload Featured Boxes image', 'photo' ),
                'default'     => '',
            ),
        )
    ]);
    Kirki::add_section( 'photo_seciton_contact', array(
        'title'          => esc_html__( 'Contact Information', 'photo' ),
        'description'    => esc_html__( 'Contact Page Info', 'photo' ),
        'panel'          => 'PHOTO_CUSTOMIZER_PANEL_ID',
        'priority'       => 90,
        'active_callback'=> function(){
            return is_page_template( 'page-template/contact.php' );
        }
    ) );
    Kirki::add_field( 'PHOTO_CUSTOMIZER_CONFIG_ID',[
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Contact Box', 'photo' ),
        'section'     => 'photo_seciton_contact',
        'priority'    => 10,
        'row_label' => array(
            'type' => 'text',
            'value' => esc_attr__('Contact Boxes', 'photo' ),
        ),
        'settings'    => 'contact_boxes_repeater',
        'choices' => array(
            'limit' => 3
        ),
        'default'     => array(
            array(
                'contact_title' => esc_html( 'Buttonwood, California', 'photo' ),
                'contact_subtitle'  => esc_html('Rosemead, CA 91770', 'photo'),
                'contact_icon' => esc_attr__('home', 'photo'),
            ),
            array(
                'contact_title' => esc_html( '+1 253 565 2365', 'photo' ),
                'contact_subtitle'  => esc_html('Mon to Fri 9am to 6pm', 'photo'),
                'contact_icon' => esc_attr__('tablet', 'photo'),
            ),
            array(
                'contact_title' => esc_html( 'support@colorlib.com', 'photo' ),
                'contact_subtitle'  => esc_html('Send us your query anytime', 'photo'),
                'contact_icon' => esc_attr__('email', 'photo'),
            )
        ),
        'fields' => array(
            'contact_title' => array(
                'type'        => 'text',
                'label'       => esc_html( 'Contact Title', 'photo' ),
                'default'     => '',
            ),
            'contact_subtitle' => array(
                'type'        => 'text',
                'label'       => esc_html( 'Contact Address', 'photo' ),
                'default'     => '',
            ),
            'contact_icon' => array(
                'type'        => 'text',
                'label'       => esc_attr__( 'Contact Icon', 'photo' ),
                'default'     => '',
            ),
        )
    ]);
} 