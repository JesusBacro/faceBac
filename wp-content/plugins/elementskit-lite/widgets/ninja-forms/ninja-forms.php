<?php
namespace Elementor;

use \ElementsKit\Elementskit_Widget_Ninja_Forms_Handler as Handler;
use \ElementsKit\Modules\Controls\Controls_Manager as ElementsKit_Controls_Manager;

if (! defined( 'ABSPATH' ) ) exit;

class Elementskit_Widget_Ninja_Forms extends Widget_Base {

    public $base;
    
    public function get_name() {
        return Handler::get_name();
    }

    public function get_title() {
        return Handler::get_title();
    }

    public function get_icon() {
        return Handler::get_icon();
    }

    public function get_categories() {
        return Handler::get_categories();
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'ekit_ninja_section_tab', [
                'label' =>esc_html__( 'Ninja Form', 'elementskit' ),
            ]
        );

        $this->add_control(
            'ekit_ninja_form_id',
            [
                'label' => __( 'Select Your Form', 'elementskit' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'default' => '0',
				'options' => \ElementsKit\Utils::ekit_get_ninja_form(),
            ]
        );

        $this->end_controls_section();
        

        /*-----------------------------------------------------------------------------------*/
        /*	STYLE TAB START
        /*-----------------------------------------------------------------------------------*/

        /* Form Title & Description */
        $this->start_controls_section(
            'ekit_ninja_section_form_title_style',
            [
                'label'                 => __( 'Title & Description', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_responsive_control(
            'ekit_ninja_heading_alignment',
            [
                'label'                 => __( 'Alignment', 'elementskit' ),
				'type'                  => Controls_Manager::CHOOSE,
				'options'               => [
					'left'      => [
						'title' => __( 'Left', 'elementskit' ),
						'icon'  => 'fa fa-align-left',
					],
					'center'    => [
						'title' => __( 'Center', 'elementskit' ),
						'icon'  => 'fa fa-align-center',
					],
					'right'     => [
						'title' => __( 'Right', 'elementskit' ),
						'icon'  => 'fa fa-align-right',
					],
				],
				'default'               => '',
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .nf-form-title h3, {{WRAPPER}} .ekit_ninjaForms_container-heading' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
            'ekit_ninja_title_heading',
            [
                'label'                 => __( 'Title', 'elementskit' ),
                'type'                  => Controls_Manager::HEADING,
				'separator'             => 'before',
            ]
        );

        $this->add_control(
            'ekit_ninja_form_title_text_color',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-form-title h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_form_title_typography',
                'label'                 => __( 'Typography', 'elementskit' ),
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-form-title h3',
            ]
        );
        
        $this->add_responsive_control(
			'ekit_ninja_form_title_margin',
			[
				'label'                 => __( 'Margin', 'elementskit' ),
				'type'                  => Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', 'em', '%' ],
                'allowed_dimensions'    => 'vertical',
				'placeholder'           => [
					'top'      => '',
					'right'    => 'auto',
					'bottom'   => '',
					'left'     => 'auto',
				],
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .nf-form-title h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_section();

        /* Style Tab: Labels */
        $this->start_controls_section(
            'ekit_ninja_section_label_style',
            [
                'label'                 => __( 'Labels', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ekit_ninja_text_color_label',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field-label label' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_typography_label',
                'label'                 => __( 'Typography', 'elementskit' ),
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field-label label',
            ]
        );
        
        $this->end_controls_section();

        /* Required Fields Notice */
        $this->start_controls_section(
            'ekit_ninja_section_required_notice_style',
            [
                'label'                 => __( 'Required Fields Notice', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ekit_ninja_required_notice_text_color',
            [
                'label'                 => __( 'Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-form-fields-required' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'ekit_ninja_required_notice_spacing',
            [
                'label'                 => __( 'Spacing', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-form-fields-required' => 'margin-bottom: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_required_notice_typography',
                'label'                 => __( 'Typography', 'elementskit' ),
                'scheme'            => Scheme_Typography::TYPOGRAPHY_4,
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-form-fields-required',
            ]
        );
        
        $this->end_controls_section();

        /* Input & Textarea */
        $this->start_controls_section(
            'ekit_ninja_section_fields_style',
            [
                'label'                 => __( 'Input & Textarea', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_responsive_control(
            'ekit_ninja_input_alignment',
            [
                'label'                 => __( 'Alignment', 'elementskit' ),
				'type'                  => Controls_Manager::CHOOSE,
				'options'               => [
					'left'      => [
						'title' => __( 'Left', 'elementskit' ),
						'icon'  => 'fa fa-align-left',
					],
					'center'    => [
						'title' => __( 'Center', 'elementskit' ),
						'icon'  => 'fa fa-align-center',
					],
					'right'     => [
						'title' => __( 'Right', 'elementskit' ),
						'icon'  => 'fa fa-align-right',
					],
				],
				'default'               => '',
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select' => 'text-align: {{VALUE}};',
				],
			]
		);

        $this->start_controls_tabs( 'ekit_ninja_tabs_fields_style' );

        $this->start_controls_tab(
            'ekit_ninja_tab_fields_normal',
            [
                'label'                 => __( 'Normal', 'elementskit' ),
            ]
        );

        $this->add_control(
            'ekit_ninja_field_text_color',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select, {{WRAPPER}} .list-select-wrap div:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
            'ekit_ninja_field_bg_color',
            [
                'label'                 => __( 'Background Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-form-content .list-select-wrap>div div' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_field_typography',
                'label'                 => __( 'Typography', 'elementskit' ),
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select',
				'separator'             => 'before',
            ]
        );

        $this->add_responsive_control(
            'ekit_ninja_text_indent',
            [
                'label'                 => __( 'Text Indent', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 60,
                        'step'  => 1,
                    ],
                    '%'         => [
                        'min'   => 0,
                        'max'   => 30,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select' => 'text-indent: {{SIZE}}{{UNIT}}',
                ],
				'separator'             => 'after',
            ]
        );

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'                  => 'ekit_ninja_field_box_shadow',
				'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select',
				// 'separator'             => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'                  => 'ekit_ninja_field_border',
				'label'                 => __( 'Border', 'elementskit' ),
				'placeholder'           => '1px',
				'default'               => '1px',
				'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select',
				// 'separator'             => 'before',
			]
		);

		$this->add_control(
			'ekit_ninja_field_radius',
			[
				'label'                 => __( 'Border Radius', 'elementskit' ),
				'type'                  => Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', 'em', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select, {{WRAPPER}} .nf-form-content .list-select-wrap>div div' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_responsive_control(
            'ekit_ninja_input_width',
            [
                'label'                 => __( 'Input Width', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px' => [
                        'min'   => 0,
                        'max'   => 1200,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field select' => 'width: {{SIZE}}{{UNIT}}',
                ],
				'separator'             => 'before',
            ]
        );
        
        $this->add_responsive_control(
            'ekit_ninja_textarea_width',
            [
                'label'                 => __( 'Textarea Width', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px' => [
                        'min'   => 0,
                        'max'   => 1200,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea' => 'width: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'ekit_ninja_textarea_height',
            [
                'label'                 => __( 'Textarea Height', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px' => [
                        'min'   => 0,
                        'max'   => 400,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea' => 'height: {{SIZE}}{{UNIT}}',
                ],
            ]
        );

		$this->add_responsive_control(
			'ekit_ninja_field_padding',
			[
				'label'                 => __( 'Padding', 'elementskit' ),
				'type'                  => Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', 'em', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="text"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="email"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field input[type="tel"], {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea, {{WRAPPER}} .ekit_ninjaForms_container .nf-field select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator'             => 'before',
			]
		);
        
        $this->add_responsive_control(
            'ekit_ninja_field_spacing',
            [
                'label'                 => __( 'Spacing', 'essential-addons-elementor' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field-container' => 'margin-bottom: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        
        $this->end_controls_tab();

        $this->start_controls_tab(
            'ekit_ninja_tab_fields_focus',
            [
                'label'                 => __( 'Focus', 'elementskit' ),
            ]
        );

        $this->add_control(
            'ekit_ninja_field_bg_color_focus',
            [
                'label'                 => __( 'Background Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input:focus, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea:focus, {{WRAPPER}} .list-select-wrap select:active+div, {{WRAPPER}} .list-select-wrap select:focus+div' => 'background-color: {{VALUE}} !important',
                ],
            ]
        );

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'                  => 'ekit_ninja_focus_input_border',
				'label'                 => __( 'Border', 'elementskit' ),
				'placeholder'       => '1px',
				'default'               => '1px',
				'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input:focus, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea:focus, {{WRAPPER}} .list-select-wrap select:active+div, {{WRAPPER}} .list-select-wrap select:focus+div',
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'                  => 'ekit_ninja_focus_box_shadow',
				'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input:focus, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea:focus, {{WRAPPER}} .list-select-wrap select:active+div, {{WRAPPER}} .list-select-wrap select:focus+div',
				'separator'             => 'before',
			]
		);

        $this->end_controls_tab();

        $this->end_controls_tabs();
        
        $this->end_controls_section();

        /* Field Description */
        $this->start_controls_section(
            'ekit_ninja_section_field_description_style',
            [
                'label'                 => __( 'Field Description', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ekit_ninja_field_description_text_color',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field .nf-field-description' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_field_description_typography',
                'label'                 => __( 'Typography', 'elementskit' ),
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-field .nf-field-description',
            ]
        );
        
        $this->add_responsive_control(
            'ekit_ninja_field_description_spacing',
            [
                'label'                 => __( 'Spacing', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'range'                 => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', 'em', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field .nf-field-description' => 'margin-bottom: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        
        $this->end_controls_section();

        /* Placeholder */
        $this->start_controls_section(
            'ekit_ninja_section_placeholder_style',
            [
                'label'                 => __( 'Placeholder', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ekit_ninja_text_color_placeholder',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input::-webkit-input-placeholder, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea::-webkit-input-placeholder' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input::-moz-input-placeholder, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea::-moz-input-placeholder' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input:-ms-input-placeholder, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea:-ms-input-placeholder' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-field input:-moz-placeholder, {{WRAPPER}} .ekit_ninjaForms_container .nf-field textarea:-moz-placeholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->end_controls_section();
        

        /* Submit Button */
        $this->start_controls_section(
            'ekit_ninja_section_submit_button_style',
            [
                'label'                 => __( 'Submit Button', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'ekit_ninja_button_width_type',
            [
                'label'                 => __( 'Width', 'elementskit' ),
                'type'                  => Controls_Manager::SELECT,
                'default'               => 'custom',
                'options'               => [
                    'full-width'    => __( 'Full Width', 'elementskit' ),
                    'custom'        => __( 'Custom', 'elementskit' ),
                ],
                'prefix_class'          => 'ekit_ninjaForms_container-button-',
            ]
        );

        $this->add_responsive_control(
			'ekit_ninja_button_align',
			[
				'label'                 => __( 'Alignment', 'elementskit' ),
				'type'                  => Controls_Manager::CHOOSE,
				'options'               => [
					'left'        => [
						'title'   => __( 'Left', 'elementskit' ),
						'icon'    => 'eicon-h-align-left',
					],
					'center'      => [
						'title'   => __( 'Center', 'elementskit' ),
						'icon'    => 'eicon-h-align-center',
					],
					'right'       => [
						'title'   => __( 'Right', 'elementskit' ),
						'icon'    => 'eicon-h-align-right',
					],
				],
				'default'               => '',
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .submit-container'   => 'text-align: {{VALUE}};',
				],
                'condition'             => [
                    'ekit_ninja_button_width_type' => 'custom',
                ],
			]
		);
        
        $this->add_responsive_control(
            'ekit_ninja_button_width',
            [
                'label'                 => __( 'Width', 'elementskit' ),
                'type'                  => Controls_Manager::SLIDER,
                'default'               => [
                    'size'      => '130',
                    'unit'      => 'px'
                ],
                'range'                 => [
                    'px'        => [
                        'min'   => 0,
                        'max'   => 1200,
                        'step'  => 1,
                    ],
                ],
                'size_units'            => [ 'px', '%' ],
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]' => 'width: {{SIZE}}{{UNIT}}',
                ],
                'condition'             => [
                    'ekit_ninja_utton_width_type' => 'custom',
                ],
            ]
        );

        $this->start_controls_tabs( 'tabs_button_style' );

        $this->start_controls_tab(
            'ekit_ninja_tab_button_normal',
            [
                'label'                 => __( 'Normal', 'elementskit' ),
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_button_typography',
                'label'                 => __( 'Typography', 'elementskit' ),
                'scheme'            => Scheme_Typography::TYPOGRAPHY_4,
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]',
				// 'separator'             => 'before',
            ]
        );
        
        $this->add_control(
            'ekit_ninja_button_text_color_normal',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'ekit_ninja_button_bg_color_normal',
            [
                'label'                 => __( 'Background Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'                  => 'ekit_ninja_button_box_shadow',
				'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]',
				'separator'             => 'before',
			]
		);


		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'                  => 'ekit_ninja_button_border_normal',
				'label'                 => __( 'Border', 'elementskit' ),
				'placeholder'       => '1px',
				'default'               => '1px',
				'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]',
			]
		);

		$this->add_control(
			'ekit_ninja_button_border_radius',
			[
				'label'                 => __( 'Border Radius', 'elementskit' ),
				'type'                  => Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', 'em', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'ekit_ninja_button_padding',
			[
				'label'                 => __( 'Padding', 'elementskit' ),
				'type'                  => Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', 'em', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'ekit_ninja_button_margin',
			[
				'label'                 => __( 'Margin', 'elementskit' ),
				'type'                  => Controls_Manager::DIMENSIONS,
				'size_units'            => [ 'px', 'em', '%' ],
				'selectors'             => [
					'{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_tab();

        $this->start_controls_tab(
            'ekit_ninja_tab_button_hover',
            [
                'label'                 => __( 'Hover', 'elementskit' ),
            ]
        );

        $this->add_control(
            'ekit_ninja_button_bg_color_hover',
            [
                'label'                 => __( 'Background Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'ekit_ninja_button_text_color_hover',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'ekit_ninja_button_border_color_hover',
            [
                'label'                 => __( 'Border Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .submit-container input[type="button"]:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->end_controls_tab();
        
        $this->end_controls_tabs();
        
        $this->end_controls_section();

        /* Success Message */
        $this->start_controls_section(
            'ekit_ninja_section_success_message_style',
            [
                'label'                 => __( 'Success Message', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ekit_ninja_success_message_text_color',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-response-msg' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'ekit_ninja_success_message_typography',
                'label'                 => __( 'Typography', 'elementskit' ),
                'selector'              => '{{WRAPPER}} .ekit_ninjaForms_container .nf-response-msg',
            ]
        );
        
        $this->end_controls_section();

        /* Style Tab: Errors */
        $this->start_controls_section(
            'ekit_ninja_section_error_style',
            [
                'label'                 => __( 'Errors', 'elementskit' ),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'ekit_ninja_error_messages_heading',
            [
                'label'                 => __( 'Error Messages', 'elementskit' ),
                'type'                  => Controls_Manager::HEADING,
            ]
        );

        $this->add_control(
            'ekit_ninja_error_message_text_color',
            [
                'label'                 => __( 'Text Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-error-wrap .nf-error-required-error' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_control(
            'ekit_ninja_validation_errors_heading',
            [
                'label'                 => __( 'Validation Errors', 'elementskit' ),
                'type'                  => Controls_Manager::HEADING,
                'separator'             => 'before',
            ]
        );

        $this->add_control(
            'ekit_ninja_validation_error_description_color',
            [
                'label'                 => __( 'Error Description Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-form-errors .nf-error-field-errors' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'ekit_ninja_validation_error_field_input_border_color',
            [
                'label'                 => __( 'Error Field Input Border Color', 'elementskit' ),
                'type'                  => Controls_Manager::COLOR,
                'default'               => '',
                'selectors'             => [
                    '{{WRAPPER}} .ekit_ninjaForms_container .nf-error .ninja-forms-field' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->end_controls_section();
    }

    protected function render( ) {
        echo '<div class="ekit-wid-con ekit_ninjaForms_container">';
            $this->render_raw();
        echo '</div>';
	}

    protected function render_raw( ) {
        $settings = $this->get_settings();
        if ( ! empty( $settings['ekit_ninja_form_id'] ) ) {
        ?>
        <div <?php echo $this->get_render_attribute_string( 'contact-form' ); ?>>
            <?php  echo do_shortcode( '[ninja_form id="' . $settings['ekit_ninja_form_id'] . '" ]' ); ?>
        </div>
       <?php 
       }
	}
    protected function _content_template() { }
}