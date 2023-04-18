<?php


class Melli_Pros_Buy_Tiktok extends \Elementor\Widget_Base {

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
		return 'melli_pros_buy_tiktok';
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
		return __( 'Step For Viwe', 'elementor_melli' );
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
		return 'eicon-collapse';
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
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default'	=> esc_html('Title Here', 'elementor_melli'),
				'label_block'	=> true,
			]
		);



		//card repeater 
		$melli_repeater = new \Elementor\Repeater();

		// number
		$melli_repeater->add_control(
			'melli_card_number',
			[
				'label' => esc_html__( 'Number Option', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => esc_html__( '1' , 'elementor_melli' ),
				'label_block' => true,
			]
		);

		$melli_repeater->add_control(
			'melli_card_desc',
			[
				'label' => esc_html__( 'Card Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '' , 'elementor_melli' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'card_list',
			[
				'label' => esc_html__( 'Card Repeater', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $melli_repeater->get_controls(),
				'default' => [
					[
						'melli_card_number' => esc_html__( 'Title #1', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ melli_card_number }}}',
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
			'label' => esc_html( 'Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);


		//title one color
		$this -> add_control('bannar_color',[
			'label'		=> esc_html('Title Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} h2' => 'color: {{VALUE}}'
			],
		]);

		//title Background image heading
		$this->add_control(
			'card_title',[
			'label' => esc_html( 'Card Number', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title card title color
		$this -> add_control('card_titles',[
			'label'		=> esc_html('Number Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} span' => 'color: {{VALUE}}'
			],
		]);

		//title card typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'card_title_type',
				'selector'	=> '{{WRAPPER}} span',
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
		$banner_title_one = $settings['banner_title_one'];
		$card_list = $settings['card_list'];
		// $banner_desc = $settings['banner_desc'];
		// $right_image = $settings['right_image']['url'];

		?>

		<!-- step for viewer -->
		<div class="step-for-views">
            <div class="container">
               <h2><?php echo $banner_title_one; ?></h2>
			   <?php if( $card_list) { ?>
               <div class="step-wrapper-area">
				<?php foreach( $card_list as $item ) { ?>
                  <div class="step-item">
                     <div class="img-box">
                        <svg width="53" height="66" viewBox="0 0 53 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M21.2286 0.464101C5.2409 3.50935 0.514339 22.2957 0.14952 31.3082C0.205678 42.969 5.58649 58.3144 32.5618 65.075C54.1421 70.4836 53.6741 41.1213 50.7426 25.7641C47.5661 16.0619 37.2163 -2.58115 21.2286 0.464101Z" fill="#FFB0B5" fill-opacity="0.32"/>
                        </svg>
                        <span><?php echo $item['melli_card_number']; ?></span> 
                     </div>
                     <p><?php echo $item['melli_card_desc']; ?></p>
                  </div>
                  <!-- end step item -->
				  <?php } ?>
               </div>

			   <?php } ?>
            </div>
            <!-- end container -->
         </div>
         <!-- end step for view -->


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