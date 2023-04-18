<?php


class Melli_Touch_Promo extends \Elementor\Widget_Base {

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
		return 'melli_touch_promo';
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
		return __( 'Touch Promo Wrapper', 'elementor_melli' );
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
		return 'eicon-image-before-after';
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
			'label' => esc_html( 'Promo Card', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);


		//button repetar here now
		$repeater = new \Elementor\Repeater();


		// banner right image
		$repeater->add_control(
			'promo_image',
			[
				'label' => esc_html__( 'Choose Image', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);


		//bannar Title
		$repeater->add_control(
			'promo_title',
			[
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);


		$repeater->add_control(
			'promo_desc',
			[
				'label' => esc_html__( 'Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'elementor_melli' ),
				'placeholder' => esc_html__( 'Type your description here', 'elementor_melli' ),
			]
		);


		$this->add_control(
			'promo_list',
			[
				'label' => esc_html__( 'Button Repeater', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'promo_title' => esc_html__( 'Add New Promo', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ promo_title }}}',
				'separator'		=> 'after',
				'label_block' => true,
			]
		);

		//Tab Control End Here Now
		$this->end_controls_section();




		// banner section styleing 
		$this->start_controls_section(
			'section_style',[
			'label' => esc_html( 'Promo Style', 'elementor_melli'),
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
				'{{WRAPPER}} h3' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'left_section_color',
				'selector'	=> '{{WRAPPER}} h3',
			]
		);





		//title one header
		$this->add_control(
			'promo_desc_main',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('promo_desc_color',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'promo_desc_type',
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

		// section left info
		$promo_list  = $settings['promo_list'];

		?>
		<!-- start get in touch promo -->
		<div class="container">
			<?php if( $promo_list ){ ?>
            <div class="touch-promo-wrapper">
				<?php foreach( $promo_list as $item ) { ?>
               <div class="item">
                  <div class="img-box">
                     <img class="promo_images" src="<?php echo $item['promo_image']['url']; ?>" alt="">
                  </div>
                  <div class="content">
                     <h3><?php echo $item['promo_title']; ?></h3>
                     <p><?php echo $item['promo_desc']; ?></p>
                  </div>
               </div>
              <?php } ?>
            </div>
			<?php } ?>
            <!-- end touch-promo-wrapper -->
         </div>
         <!-- end container -->
         

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