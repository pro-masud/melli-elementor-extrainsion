<?php


class Melli_Choose_grow extends \Elementor\Widget_Base {

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
		return 'melli_choose_grow';
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
		return __( 'Choose Want To Grow', 'elementor_melli' );
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
		return ' eicon-testimonial';
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
			'label' => esc_html( 'Choose Grow Info', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//choose title
		$this->add_control(
			'choose_title',
			[
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default'	=> esc_html('Title', 'elementor_melli'),
				'label_block'	=> true,
			]
		);

		//choose descricption
		$this->add_control(
			'choose_desc',
			[
				'label' => esc_html__( 'Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default'	=> esc_html('Title', 'elementor_melli'),
				'label_block'	=> true,
			]
		);

		


		//card repeater 
		$melli_repeater = new \Elementor\Repeater();

		//choose grow Image
		$melli_repeater->add_control(
			'choose_card_img',
			[
				'label' => esc_html__( 'Choose Image', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$melli_repeater->add_control(
			'choose_card_title',
			[
				'label' => esc_html__( 'Card Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Title' , 'elementor_melli' ),
				'label_block' => true,
			]
		);

		$melli_repeater->add_control(
			'choose_card_desc',
			[
				'label' => esc_html__( 'Card Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Description' , 'elementor_melli' ),
				'label_block' => true,
			]
		);

		// button text
		$melli_repeater->add_control(
			'choose_card_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Description' , 'elementor_melli' ),
				'label_block' => true,
			]
		);

		// button text
		$melli_repeater->add_control(
			'choose_card_btn_url',
			[
				'label' => esc_html__( 'Button Link', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::URL,
				'default' => [
					'url' => '',
				],
				
			]
		);


		$this->add_control(
			'choose_list',
			[
				'label' => esc_html__( 'Repeater List', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $melli_repeater->get_controls(),
				'default' => [
					[
						'choose_card_title' => esc_html__( 'Title #1', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ choose_card_title }}}',
				'separator'		=> 'before',
			]
		);

		//Tab Control End Here Now
		$this->end_controls_section();










		// banner section styleing 
		$this->start_controls_section(
			'header_section',[
			'label' => esc_html( 'Section Background Color', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);

		//section Background Color
		$this->add_control(
			'section_bg_colors',[
			'label' => esc_html( 'Section Background Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
			'separator'	=> 'before'
		]);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'section_bg_c',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .choose-grow',
			]
		);

		$this->end_controls_section();

		


		// banner section styleing 
		$this->start_controls_section(
			'section_style',[
			'label' => esc_html( 'Choose Style', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);

		//section Background Color
		$this->add_control(
			'section_bg_colors',[
			'label' => esc_html( 'Section Background Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
			'separator'	=> 'before'
		]);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'section_bg_c',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .choose-grow',
			]
		);


		//title one header
		$this->add_control(
			'choose_desc',[
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'after'
		]);

		//title one color
		$this -> add_control('choose_title_text',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h2' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'choose_type',
				'selector'	=> '{{WRAPPER}} h2',
			]
		);



		//description
		$this->add_control(
			'card_desc',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
		]);
		

		//description color
		$this -> add_control('desc_color',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.main' => 'color: {{VALUE}}'
			],
		]);

		//description typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'desc_type',
				'selector'	=> '{{WRAPPER}} p.main',
			]
		);


		



		//card title
		$this->add_control(
			'card_title',[
			'label' => esc_html( 'Card Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
		]);
		

		//card title color
		$this -> add_control('card_main_title',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h3' => 'color: {{VALUE}}'
			],
		]);

		//card typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'card_title_type',
				'selector'	=> '{{WRAPPER}} h3',
			]
		);


		//card description
		$this->add_control(
			'card_desc_main',[
			'label' => esc_html( 'Card Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
		]);
		

		//card description color
		$this -> add_control('card_desc_text',[
			'label'		=> esc_html('Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.card_para' => 'color: {{VALUE}}'
			],
		]);

		//card description typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'card_desc_type',
				'selector'	=> '{{WRAPPER}} p.card_para',
			]
		);

		//card botton text
		$this->add_control(
			'card_btn_text',[
			'label' => esc_html( 'Button Text', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
		]);
		

		//card button color
		$this -> add_control('btn_text',[
			'label'		=> esc_html('Button Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} a' => 'color: {{VALUE}}'
			],
		]);

		//card buttton typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'btn_type',
				'selector'	=> '{{WRAPPER}} a',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'btn_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} a',
			]
		);
		


		//card background 
		$this->add_control(
			'card_bg_color',[
			'label' => esc_html( 'Card Background Color', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before',
		]);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'card_bg_color',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .choose-grow .choose-wrapper .item .item-inner',
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

		$choose_title = $settings['choose_title'];
		$choose_desc = $settings['choose_desc'];
		$choose_lists = $settings['choose_list'];

		?>
		<div class="choose-grow">
         <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><?php echo $choose_title; ?> </h2>
            <p class="wow fadeInUp main" data-wow-duration="1s" data-wow-delay="0.8s"><?php echo $choose_desc; ?></p>
			<?php if($choose_lists) { ?>
            <div class="choose-wrapper">
				<?php foreach( $choose_lists as $item ){ ?>
               <div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="item-inner">
				  		<img src="<?php echo $item['choose_card_img']['url']; ?>" alt="">
                     <h3><?php echo $item['choose_card_title']; ?></h3>
                     <p class="card_para"><?php echo $item['choose_card_desc']; ?></p>
                     <a href="<?php echo $item['choose_card_btn_url']; ?>"><?php echo $item['choose_card_btn_text']; ?></a>
                  </div>
               </div>
			   <?php } ?>
            </div>
			<?php } ?>
         </div>
      </div>

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