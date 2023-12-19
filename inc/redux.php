<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = 'redux_demo';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name'         => $theme->get( 'Name' ),
    'display_version'      => $theme->get( 'Version' ),
    'menu_title'           => esc_html__( 'Theme Options', 'your-textdomain-here' ),
    'customizer'           => true,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 90,
);

Redux::set_args( $opt_name, $args );

Redux::set_section( 
    $opt_name, 
    array(
        'title'  => esc_html__( 'Header Section', 'your-textdomain-here' ),
        'id'     => 'header',
        'desc'   => esc_html__( 'Add Logo and Others.', 'your-textdomain-here' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
            'id'             => 'repeater-field-id',
            'type'           => 'repeater',
            'title'          => esc_html__( 'Header Social', 'your-textdomain-here' ),
            'subtitle'       => esc_html__( 'Add you social icons', 'your-textdomain-here' ),
            //'desc'           => esc_html__( '', 'your-textdomain-here' ),
            //'group_values' => true, // Group all fields below within the repeater ID
            //'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
            //'bind_title'   => '', // Bind the repeater block title to this field ID
            //'static'       => 2, // Set the number of repeater blocks to be output
            //'limit'        => 2, // Limit the number of repeater blocks a user can create
            //'sortable'     => false, // Allow the users to sort the repeater blocks or not
            'fields'         => array(
                array(
                    'id'          => 'icon_link',
                    'type'        => 'link',
                    'title'          => esc_html__( 'Social Icon Url', 'your-textdomain-here' ),
                    'placeholder' => esc_html__( 'https://www.facebook.com', 'your-textdomain-here' ),
                ),
                array(
                    'id'          => 'social_icon_select',
                    'type'        => 'icon_select',
                    'title'          => esc_html__( 'Social Icon', 'your-textdomain-here' ),
                    //'placeholder' => esc_html__( 'Text Field', 'your-textdomain-here' ),
                ),
            )),
            array(
                'id'       => 'opt-textarea',
                'type'     => 'editor',
                'title'    => esc_html__( 'Copyright Text', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Example description.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
        )
    ) 
);

// Footer Section
Redux::set_section( 
    $opt_name, 
    array(
        'title'  => esc_html__( 'Footer Section', 'your-textdomain-here' ),
        'id'     => 'footer',
        'desc'   => esc_html__( 'Add Logo and Others.', 'your-textdomain-here' ),
        'icon'   => 'el el-download-alt',
        'fields' => array(
            array(
                'id'       => 'footer_title',
                'type'     => 'Text',
                'title'    => esc_html__( 'Title', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Title.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( 'Keep in Touch!', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
            array(
                'id'       => 'footer_desc',
                'type'     => 'Textarea',
                'title'    => esc_html__( 'Description', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Description.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( 'Lets maintain our connection for updates, insights, and engaging discussions on industry trends.', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
            array(
                'id'       => 'footer_contact_info_call',
                'type'     => 'Text',
                'title'    => esc_html__( 'Contact Info Call', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Description.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( '(385) 278-7858', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
            array(
                'id'       => 'footer_contact_info_email',
                'type'     => 'Text',
                'title'    => esc_html__( 'Contact Info Email', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Description.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( 'ahana.gill@exmaple.com', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
        )
    ) 
);

// Service Section
Redux::set_section( 
    $opt_name, 
    array(
        'title'  => esc_html__( 'Services Section', 'your-textdomain-here' ),
        'id'     => 'service',
        'desc'   => esc_html__( 'Add Logo and Others.', 'your-textdomain-here' ),
        'icon'   => 'el el-download-alt',
        'fields' => array(
            array(
                'id'       => 'section_sub_heading',
                'type'     => 'Text',
                'title'    => esc_html__( 'Section Sub Heading', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Title.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( 'SERVICES', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),

            array(
                'id'       => 'section_heading',
                'type'     => 'Text',
                'title'    => esc_html__( 'Section Heading', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Title.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( 'What I serviced', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),
            array(
                'id'       => 'section_description',
                'type'     => 'Textarea',
                'title'    => esc_html__( 'Section Description', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Footer Title.', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
                'placeholder' => esc_html__( 'Specializing in responsive web design and interactive user experiences, we offer tailored front-end development solutions to boost user engagement and brand appeal.', 'your-textdomain-here' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
                ),

                array(
                    'id'             => 'repeater-field-id',
                    'type'           => 'repeater',
                    'title'          => esc_html__( 'Services List', 'your-textdomain-here' ),
                    'subtitle'       => esc_html__( '', 'your-textdomain-here' ),
                    'desc'           => esc_html__( '', 'your-textdomain-here' ),
                    //'group_values' => true, // Group all fields below within the repeater ID
                    //'item_name'    => '', // Add a repeater block name to the Add and Delete buttons
                    //'bind_title'   => '', // Bind the repeater block title to this field ID
                    //'static'       => 2, // Set the number of repeater blocks to be output
                    //'limit'        => 2, // Limit the number of repeater blocks a user can create
                    //'sortable'     => false, // Allow the users to sort the repeater blocks or not
                    'fields'         => array(
                        array(
                            'id'          => 'service_number',
                            'type'        => 'text',
                            'title'          => esc_html__( 'Services Number', 'your-textdomain-here' ),
                            'placeholder' => esc_html__( '01', 'your-textdomain-here' ),
                        ),
                        array(
                            'id'          => 'service_sub_title',
                            'type'        => 'text',
                            'title'          => esc_html__( 'Services Sub Title', 'your-textdomain-here' ),
                            'placeholder' => esc_html__( '8 Projects', 'your-textdomain-here' ),
                        ),
                        array(
                            'id'          => 'service_title',
                            'type'        => 'text',
                            'title'          => esc_html__( 'Services Title', 'your-textdomain-here' ),
                            'placeholder' => esc_html__( 'Web Design', 'your-textdomain-here' ),
                        ),
                        array(
                            'id'          => 'service_description',
                            'type'        => 'textarea',
                            'title'          => esc_html__( 'Services Description', 'your-textdomain-here' ),
                            'placeholder' => esc_html__( 'Web Design Crafting captivating web designs that merge aesthetics with functionality for an unparalleled user experience. Our designs harmonize innovation and usability, ensuring a seamless digital presence for your brand.', 'your-textdomain-here' ),
                        ),
                    )
                )

                

        )
    ) 
);