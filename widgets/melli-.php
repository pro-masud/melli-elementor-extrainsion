<?php


class Melli_Tikfly_Process extends \Elementor\Widget_Base {

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
		return 'melli_tikfly_process';
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
		return __( 'Tikfly Process', 'elementor_melli' );
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
			'section_title',[
			'label' => esc_html( 'Header', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);


		//bannar Title One
		$this->add_control(
			'banner_title_one',
			[
				'label' => esc_html__( 'Title 1', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default'	=> esc_html('Title', 'elementor_melli'),
				'label_block'	=> true,
			]
		);

		//bannar Title Two
		$this->add_control(
			'banner_title_two',
			[
				'label' => esc_html__( 'Title 2', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default'	=> esc_html('Title', 'elementor_melli'),
				'label_block'	=> true,
			]
		);

		//meddle Image
		$this->add_control(
			'promot_image',
			[
				'label' => esc_html__( 'Choose Image', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		//card repeater 
		$melli_repeater = new \Elementor\Repeater();

		//bannar Image
		$melli_repeater->add_control(
			'card_image',
			[
				'label' => esc_html__( 'Choose Card Image', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$melli_repeater->add_control(
			'melli_card_title',
			[
				'label' => esc_html__( 'Card Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title' , 'elementor_melli' ),
				'label_block' => true,
			]
		);

		$melli_repeater->add_control(
			'melli_card_desc',
			[
				'label' => esc_html__( 'Card Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Description' , 'elementor_melli' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'card_list',
			[
				'label' => esc_html__( 'Repeater List', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $melli_repeater->get_controls(),
				'default' => [
					[
						'melli_card_title' => esc_html__( 'Title #1', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ melli_card_title }}}',
				'separator'		=> 'before',
			]
		);


		//Tab Control End Here Now
		$this->end_controls_section();

		// banner section styleing 
		$this->start_controls_section(
			'section_style',[
			'label' => esc_html( 'Style', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);


		//title one header
		$this->add_control(
			'title_heading',[
			'label' => esc_html( 'Title 1', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Title 1 Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h2' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'title_1_style',
				'selector'	=> '{{WRAPPER}} h2',
			]
		);


		//title two header
		$this->add_control(
			'title_two',[
			'label' => esc_html( 'Title 2', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title two color
		$this -> add_control('title_two_color',[
			'label'		=> esc_html('Title 2 Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} span' => 'color: {{VALUE}}'
			],
		]);

		//title two typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'title_2_style',
				'selector'	=> '{{WRAPPER}} span',
			]
		);


		//title one color
		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Title 1 Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h2' => 'color: {{VALUE}}'
			],
		]);


		//title two header
		$this->add_control(
			'img_bg',[
			'label' => esc_html( 'Image Background Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .promo-thumbnail',
			]
		);


		//title Background image heading
		$this->add_control(
			'img_card_bg',[
			'label' => esc_html( 'Card Background Image Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'card_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .item span.icon-box::after',
			]
		);

		//title Background image heading
		$this->add_control(
			'card_title',[
			'label' => esc_html( 'Card Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title card title color
		$this -> add_control('card_titles',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h3' => 'color: {{VALUE}}'
			],
		]);

		//title card typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'card_title_type',
				'selector'	=> '{{WRAPPER}} h3',
			]
		);


		//card description
		$this->add_control(
			'card_desc',[
			'label' => esc_html( 'Card Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//card color
		$this -> add_control('card_desce',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p' => 'color: {{VALUE}}'
			],
		]);

		//card typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'card_desc_type',
				'selector'	=> '{{WRAPPER}} p',
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

		$banner_title_one = $settings['banner_title_one'];
		$banner_title_two = $settings['banner_title_two'];
		$promot_image = $settings['promot_image']['url'];
		// $banner_desc = $settings['banner_desc'];
		// $right_image = $settings['right_image']['url'];

		?>
		<!-- promo section -->
		<section class="promo-section">
         <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s"><?php echo $banner_title_one; ?> <span><?php echo $banner_title_two; ?></span></h2>
            <div class="promo-thumbnail wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
               <img class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" src="<?php echo $promot_image; ?>" alt="">
            </div>
			<?php if($settings['card_list']){ ?>
            <div class="promo-wrapper">
				<?php foreach( $settings['card_list'] as $item ){ ?>
               <div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                  <span class="icon-box">
                  <img src="<?php echo $item['card_image']['url']; ?>" alt="">
                  </span>
                  <h3><?php echo $item['melli_card_title']; ?></h3>
                  <p><?php echo $item['melli_card_desc']; ?></p>
               </div>
			   <?php } ?>
            </div>
			<?php } ?>
         </div>
      </section>

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