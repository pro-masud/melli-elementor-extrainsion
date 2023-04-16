<?php


class Melli_Get_In_Grow extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Blank widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'melli_get_in_grow';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Blank widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return __( 'Get In Grow', 'elementor_melli' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Blank widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'eicon-animation-text';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Blank widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'melli_cat' ];
	}

	/**
	 * Register Blank widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {


		$this->start_controls_section(
			'top_shape',[
			'label' => esc_html( 'Top SVG Shape', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		$this->add_control(
			'top_shape_svg',
			[
				'label' => esc_html__( 'Background SVG Shape', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'label_block' => true,
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'button_shape',[
			'label' => esc_html( 'Bottom SVG Shape', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		$this->add_control(
			'bottom_shape',
			[
				'label' => esc_html__( 'Background SVG Shape', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
				'label_block' => true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_title',[
			'label' => esc_html( 'Section Left', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		


		//bannar Title One
		$this->add_control(
			'left_title',
			[
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		//bannar Title One
		$this->add_control(
			'left_desc',
			[
				'label' => esc_html__( 'Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'	=> true,
			]
		);


		

		//card repeater 
		$header_icons = new \Elementor\Repeater();

		//title one header
		$header_icons->add_control(
			'social_link_text',[
			'label' => esc_html( 'Social Links', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$header_icons->add_control(
			'icons',
			[
				'label' => esc_html__( 'Choose Social Icon', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
			]
		);

		$header_icons->add_control(
			'social_link',
			[
				'label' => esc_html__( 'Social Link', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'picchi_extrantion' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);


		$this->add_control(
			'left_social_icon',
			[
				'label' => esc_html__( 'Social Links', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $header_icons->get_controls(),
				'default' => [
					[
						'social_link_text' => esc_html__( 'Social Link', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ social_link_text }}}',
				'separator'		=> 'before',
			]
		);

		//Tab Control End Here Now
		$this->end_controls_section();

		

		$this->start_controls_section(
			'right_section',[
			'label' => esc_html( 'Section Right', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//bannar Title One
		$this->add_control(
			'right_title',
			[
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		//bannar Title One
		$this->add_control(
			'right_desc',
			[
				'label' => esc_html__( 'Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'	=> true,
			]
		);	


		//Tab Control End Here Now
		$this->end_controls_section();





		// banner section styleing 
		$this->start_controls_section(
			'section_style',[
			'label' => esc_html( 'Section Left Style', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);


		//title one header
		$this->add_control(
			'left_style_title',[
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('left_section_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h3.left_head' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'left_section_color',
				'selector'	=> '{{WRAPPER}} h3.left_head',
			]
		);
		


		//title one header
		$this->add_control(
			'left_desc_style',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('left_desc_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.left_para' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'left_desc_typer',
				'selector'	=> '{{WRAPPER}} p.left_para',
			]
		);

		//Style Control End Here Now
		$this->end_controls_section();


		
		// banner section styleing 
		$this->start_controls_section(
			'right_section_style',[
			'label' => esc_html( 'Section Right Style', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);


		//title one header
		$this->add_control(
			'left_style_title',[
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('right_section_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h3.right_head' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'right_section_color',
				'selector'	=> '{{WRAPPER}} h3.right_head',
			]
		);
		


		//title one header
		$this->add_control(
			'right_desc_style',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('right_desc_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.right_para' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'right_desc_typer',
				'selector'	=> '{{WRAPPER}} p.right_para',
			]
		);

		//Style Control End Here Now
		$this->end_controls_section();

	}



	/**
	 * Render Blank widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings   = $this->get_settings_for_display(); 

		// section left info
		$left_title  = $settings['left_title'];
		$left_desc  = $settings['left_desc'];
		$left_social_icon  = $settings['left_social_icon'];
		?>
		<!-- get in touch -->
		<div class="get-in-touch">
		<svg class="first-shape"  width="879" height="1426" viewBox="0 0 879 1426" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-16.2788 489.865L605.045 0.765137C1058.88 392.045 848.171 745.048 686.087 872.639L-16.2788 1425.53C-426.893 1017.24 -187.368 631.633 -16.2788 489.865Z" fill="#FFB0B5" fill-opacity="0.25"/>
         </svg>
         <div class="container">
            <div class="form-content">
               <h3 class="left_head"><?php echo $left_title; ?></h3>
               <p class="left_para"><?php echo $left_desc; ?></p>
			   <?php if($left_social_icon){ ?>
               <ul>
				<?php foreach( $left_social_icon as $item ){ ?>
                  <li class="left_social_icon">
                     <a href="<?php echo esc_url($item['social_link']['url']); ?>">
					 	<?php \Elementor\Icons_Manager::render_icon( $item['icons'], [ 'aria-hidden' => 'true' ] ); ?>
                     </a>
                  </li>
				  <?php } ?>
               </ul>
			   <?php } ?>
               <!-- end social -->
            </div>
            <!-- end form-content -->
            <div class="form-area">
               <h3 class="right_head">Get In Touch</h3>
               <p class="right_para">Feel free to contact us.</p>
               <form action="" method="post">
                  <p class="title">Get In Touch</p>
                  <div class="form-wrapper">
                     <input type="text" placeholder="First Name" name="fname">
                     <input type="text" placeholder="Last Name" name="lname">
                     <input type="email" placeholder="Email" name="email">
                     <textarea name="message" placeholder="Message" id="" cols="30" rows="10"></textarea>
                     <button type="submit">Send</button>
                  </div>
               </form>
            </div>
         </div>
         <!-- end container -->

         <svg class="shape-middle" width="999" height="1679" viewBox="0 0 999 1679" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M267.135 576.4L999.211 0.0957031C1533.95 461.139 1285.68 877.08 1094.7 1027.42L267.135 1678.89C-216.672 1197.81 65.5487 743.444 267.135 576.4Z" fill="#FFB0B5" fill-opacity="0.25"/>
         </svg>
      </div>
      <!-- end get-in-touch -->

		<?php
		


	}

	/**
	 * Render Blank widget output on the frontend.
	 *
	 * Written in JS and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	// protected function _content_template() {
		
	// }

}