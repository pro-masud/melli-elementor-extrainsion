<?php


class Melli_Tiktok_Wrapper extends \Elementor\Widget_Base {

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
		return 'melli_tiktok_rapper';
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
		return __( 'Tiktok Rapper', 'elementor_melli' );
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
		return 'eicon-posts-carousel';
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
			'label' => esc_html( 'Section Left', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		


		//bannar Title One
		$this->add_control(
			'promo_title',
			[
				'label' => esc_html__( 'Title', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		//bannar Title One
		$this->add_control(
			'promo_desc',
			[
				'label' => esc_html__( 'Description', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'	=> true,
			]
		);


		

		//card repeater 
		$header_icons = new \Elementor\Repeater();


		$header_icons->add_control(
			'promo_btn_active',
			[
				'label' => esc_html__( 'Button Active', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => esc_html__( 'active', 'picchi_extrantion' ),
				'label_off' => esc_html__( 'none', 'picchi_extrantion' ),				
			]
		);

		$header_icons->add_control(
			'icons',
			[
				'label' => esc_html__( 'Choose Button Icon', 'picchi_extrantion' ),
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


		//choose title
		$header_icons->add_control(
			'btn_text',
			[
				'label' => esc_html__( 'Button Text', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=> true,
			]
		);

		$header_icons->add_control(
			'button_link',
			[
				'label' => esc_html__( 'Button Link', 'picchi_extrantion' ),
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
			'grow_items',
			[
				'label' => esc_html__( 'Button', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $header_icons->get_controls(),
				'default' => [
					[
						'btn_text' => esc_html__( 'Button', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ btn_text }}}',
				'separator'		=> 'before',
			]
		);

		//Tab Control End Here Now
		$this->end_controls_section();

		

		
		// banner section styleing 
		$this->start_controls_section(
			'right_section_style',[
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
		$this -> add_control('promo_title_color',[
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
				'name'		=> 'promo_title_type',
				'selector'	=> '{{WRAPPER}} h2',
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
			'label'		=> esc_html('Color', 'picchi_extrantion'),
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
		$promo_title  = $settings['promo_title'];
		$promo_desc  = $settings['promo_desc'];
		$grow_items  = $settings['grow_items'];
		?>
		<!-- tiktok wrapper -->
		<div class="container">
            <div class="tiktok-wrapper">
               <h2><?php echo $promo_title; ?></h2>
               <p><?php echo $promo_desc; ?></p>
			   <?php if( $grow_items ){  ?>
               <ul class="button-group">
				<?php foreach( $grow_items as $item ){ 
					
						if( $item['promo_btn_active'] == 'yes' ){
							$active = 'active';
						}else{
							$active = ' ';
						}
					?>
                  <li>
                     <a href="<?php echo esc_url($item['btn_text']); ?>" class="<?php echo $active; ?>">
					 	<?php \Elementor\Icons_Manager::render_icon( $item['icons'], [ 'aria-hidden' => 'true' ] ); ?>
                        <span><?php echo $item['btn_text']; ?></span>                     
                     </a>
                  </li>
				  <?php } ?>
               </ul>
			   <?php } ?>
            </div>
            <!-- end tiktok wrapper -->
         </div>
		 <svg class="shape-middle" width="999" height="1679" viewBox="0 0 999 1679" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M267.135 576.4L999.211 0.0957031C1533.95 461.139 1285.68 877.08 1094.7 1027.42L267.135 1678.89C-216.672 1197.81 65.5487 743.444 267.135 576.4Z" fill="#FFB0B5" fill-opacity="0.25"/>
         </svg>

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