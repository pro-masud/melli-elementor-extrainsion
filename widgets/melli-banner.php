<?php


class Banner_Section extends \Elementor\Widget_Base {

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
		return 'blank_widget';
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
		return __( 'Blank Widget', 'elementor_melli' );
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
		return 'fa fa-code';
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
			'section_title',[
			'label' => esc_html( 'Header', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//bannar Image
		$this->add_control(
			'bannager_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		//bannar Title
		$this->add_control(
			'banner_title',
			[
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default'	=> esc_html('Title', 'elementor_melli'),
			]
		);

		//bannar Description
		$this->add_control(
			'banner_desc',
			[
				'label' => esc_html__( 'Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default'	=> esc_html('Write a Text', 'elementor_melli'),
			]
		);

		//button repetar here now
		$btn_icons = new \Elementor\Repeater();

		$btn_icons->add_control(
			'btn_icon',
			[
				'label' => esc_html__( 'Button Icons', 'elementor_melli' ),
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

		$btn_icons->add_control(
			'btn_text',
			[
				'label' => esc_html__( 'Button', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Read More', 'elementor_melli' ),
				
			]
		);

		$btn_icons->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Button Link', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '',
				],
				
			]
		);

		$this->add_control(
			'btn_list',
			[
				'label' => esc_html__( 'Button Repeater', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $btn_icons->get_controls(),
				'default' => [
					[
						'btn_text' => esc_html__( 'Button', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ btn_text }}}',
				'separator'		=> 'after',
				'label_block' => true,
			]
		);

		// banner right image
		$this->add_control(
			'right_image',
			[
				'label' => esc_html__( 'Choose Right Image', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		//Tab Control End Here Now
		$this->end_controls_section();

		// banner section styleing 
		$this->start_controls_section(
			'section_style',[
			'label' => esc_html( 'Banner Style', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);


		//banner title header
		$this->add_control(
			'title_heading',[
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//banner title color
		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h1' => 'color: {{VALUE}}'
			],
		]);

		//banner title typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'banner_h1_style',
				'selector'	=> '{{WRAPPER}} h1',
			]
		);

		//banner Description header
		$this->add_control(
			'title_desc',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//banner Description color
		$this -> add_control('bannar_desc_color',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p' => 'color: {{VALUE}}'
			],
		]);

		//banner Description typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'banner_desc_style',
				'selector'	=> '{{WRAPPER}} p',
			]
		);

		//banner icon Style
		$this->add_control(
			'banner_icon',[
			'label' => esc_html( 'Icon Style', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//banner Description color
		$this -> add_control('bannar_color_color',[
			'label'		=> esc_html('Icon Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} i' => 'color: {{VALUE}}'
			],
		]);

		//banner Description typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'banner_icon_style',
				'selector'	=> '{{WRAPPER}} i',
			]
		);

		//button Text color
		$this->add_control(
			'button_color',[
			'label' => esc_html( 'Button Text Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//banner Description color
		$this -> add_control('button_color_text',[
			'label'		=> esc_html('Icon Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} span' => 'color: {{VALUE}}'
			],
		]);

		//banner Description typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'banner_btn_style',
				'selector'	=> '{{WRAPPER}} span',
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

		$bannger_bg_img = $settings['bannager_image']['url'];
		$banner_title = $settings['banner_title'];
		$banner_desc = $settings['banner_desc'];
		$right_image = $settings['right_image']['url'];

		?>
		<!-- Banner section -->
		<div class="banner-section">
         <img class="banner-bg" src="<?php echo $bannger_bg_img; ?>" alt="">
         <div class="container">
            <div class="banner-content">
               <h1><?php echo $banner_title; ?></h1>
               <p><?php echo $banner_desc; ?></p>
			   <?php if($settings['btn_list']){  ?>
               <ul class="button-group">
				<?php foreach($settings['btn_list'] as $item ){ ?>
                  <li>
                     <a href="<?php echo esc_url($item['btn_link']['url']); ?>">
					 	<?php \Elementor\Icons_Manager::render_icon( $item['btn_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <span><?php echo $item['btn_text']; ?></span>                     
                     </a>
                  </li>
                  <?php } ?>
               </ul>
			   <?php } ?>
            </div>
            <div class="thumbnail">
               <img src="<?php echo $right_image; ?>" alt="">
            </div>
         </div>
      </div>
      <!-- end banner section -->

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