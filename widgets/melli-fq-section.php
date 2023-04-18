<?php


class FAQ_Section extends \Elementor\Widget_Base {

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
		return 'melli_faq_section';
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
		return __( 'FAQ Section', 'elementor_melli' );
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
		return 'eicon-cursor-move';
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
			'label' => esc_html( 'Accordion Repeater', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);


		

		//card repeater 
		$content = new \Elementor\Repeater();

		$content->add_control(
			'promo_btn_active',
			[
				'label' => esc_html__( 'Accordion Active', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes',
				'label_on' => esc_html__( 'active', 'picchi_extrantion' ),
				'label_off' => esc_html__( 'none', 'picchi_extrantion' ),				
			]
		);

		//title one header
		$content->add_control(
			'accordion_title',[
			'label' => esc_html( 'Accordion Title', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::TEXT,
			'separator'	=> 'before',
			'label_block'	=> true,
		]);

		//title one header
		$content->add_control(
			'accordion_desc',[
			'label' => esc_html( 'Accordion Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::TEXTAREA,
			'separator'	=> 'before'
		]);



		$this->add_control(
			'accourdio_items',
			[
				'label' => esc_html__( 'Accordions', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $content->get_controls(),
				'default' => [
					[
						'accordion_title' => esc_html__( 'Accordion Title', 'elementor_melli' ),
					],
				],
				'title_field' => '{{{ accordion_title }}}',
				'separator'		=> 'before',
			]
		);

		//Tab Control End Here Now
		$this->end_controls_section();



		$this->start_controls_section(
			'meddle_section',[
			'label' => esc_html( 'Meddle Section', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//title one header
		$this->add_control(
			'left_section',[
			'label' => esc_html( 'Left Section', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
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

		//title one header
		$this->add_control(
			'right_section',[
			'label' => esc_html( 'Right Section', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
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
		
		//bannar Title One
		$this->add_control(
			'right_form',
			[
				'label' => esc_html__( 'Form', 'elementor_melli' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'label_block'	=> true,
			]
		);

		$this->end_controls_section();

		

		$this->start_controls_section(
			'right_section',[
			'label' => esc_html( 'Section Right', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

	
		//Tab Control End Here Now
		$this->end_controls_section();

		$this->start_controls_section(
			'footer_btn',[
			'label' => esc_html( 'Buttom Info', 'elementor_melli'),
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
			'section_style',[
			'label' => esc_html( 'Accordion Style', 'elementor_melli'),
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
		$this -> add_control('accordion_title_color',[
			'label'		=> esc_html('Accordion Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} a.card__title' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'left_section_color',
				'selector'	=> '{{WRAPPER}} a.card__title',
			]
		);


		//title one header
		$this->add_control(
			'accordion_desc',[
			'label' => esc_html( 'Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('accordion_desc_color',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} .card__content' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'accordion_type',
				'selector'	=> '{{WRAPPER}} .card__content',
			]
		);

		//Style Control End Here Now
		$this->end_controls_section();


		// banner section styleing 
		$this->start_controls_section(
			'meddle_section_style',[
			'label' => esc_html( 'Meddle Section Style', 'elementor_melli'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_STYLE,
		]);

		//title one header
		$this->add_control(
			'left_side_style',[
			'label' => esc_html( 'Left Side Style', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('left_text_color',[
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
				'name'		=> 'left_text_type',
				'selector'	=> '{{WRAPPER}} h3.left_head',
			]
		);


		//title one header
		$this->add_control(
			'left_desc',[
			'label' => esc_html( 'Left Description', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('left_desc_color',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.left_desc' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'left_type',
				'selector'	=> '{{WRAPPER}} p.left_desc',
			]
		);


		//title one header
		$this->add_control(
			'right_sside_style',[
			'label' => esc_html( 'Right Side Style', 'picchi_extrantion'),
			'type'	=>  \Elementor\Controls_Manager::HEADING,
			'separator'	=> 'before'
		]);

		//title one color
		$this -> add_control('right_text_color',[
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
				'name'		=> 'right_desc_type',
				'selector'	=> '{{WRAPPER}} h3.right_head',
			]
		);

		//title one color
		$this -> add_control('right_desc_color',[
			'label'		=> esc_html('Description Color', 'picchi_extrantion'),
			'type'			=> \Elementor\Controls_Manager::COLOR,
			'selectors'	=>[
				'{{WRAPPER}} p.right_desc' => 'color: {{VALUE}}'
			],
		]);

		//title one typography
		$this -> add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'		=> 'right_type_desce',
				'selector'	=> '{{WRAPPER}} p.right_desc',
			]
		);

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
		$accourdio_items  = $settings['accourdio_items'];

		//meddle section
		$left_title  = $settings['left_title'];
		$left_desc  = $settings['left_desc'];
		$left_social_icon  = $settings['left_social_icon'];


		$right_title  = $settings['right_title'];
		$right_desc  = $settings['right_desc'];

		$grow_items  = $settings['grow_items'];



		?>
	    <!-- end banner section -->
		<section class="faq-section">
         <svg class="faq-overlay" width="969" height="1513" viewBox="0 0 969 1513" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-0.486389 519.388L672.337 0C1163.79 415.51 935.616 790.373 760.097 925.866L-0.486389 1513C-445.135 1079.42 -185.757 669.935 -0.486389 519.388Z" fill="#FFB0B5" fill-opacity="0.25"/>
         </svg>
         <div class="container">
            <div class="faq-wrapper">
               <div class="section_accordion">
				<?php if( $accourdio_items ){ ?>
                  <div class="accordion">
					<?php 
					$i = 1;
					foreach( $accourdio_items as $single ) : 
						$i++;
						if( $single['promo_btn_active'] == 'yes' ){
							$active = 'is-active';
						}else{
							$active = ' ';
						}
					?>
                     <div class="card <?php echo $active; ?> ">
                        <a class="card__title" data-toggle="collapse" href="#content<?php echo $i; ?>">
                           <?php echo $single['accordion_title']; ?>
                           <svg class="minus" width="18" height="3" viewBox="0 0 18 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.5 1.41089H16.5" stroke="#434343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                           <svg class="plus" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.5 15H22.5M15 22.5V7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </a>
                        <div id="content<?php echo $i; ?>" class="collapse  <?php echo $active; ?>" data-parent=".accordion">
                           <div class="card__content">
						   <?php echo $single['accordion_desc']; ?>
                           </div>
                        </div>
                     </div>
					 <?php endforeach; ?>
                     <!-- end card -->
                  </div>
				  <?php } ?>
                  <!-- end accordion -->
               </div>
               <!-- end section_accordion -->
            </div>
         </div>
         <!-- end container -->
      </section>
	 <!-- get in touch -->
	 <div class="get-in-touch shop-get-in-touch">
         <div class="container">
            <div class="form-content">
               <h3 class="left_head"><?php echo $left_title; ?></h3>
               <p class="left_desc"><?php echo $left_desc; ?></p>
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
            <div class="form-area form-melli">
               <h3 class="right_head"><?php echo $right_title; ?></h3>
               <p class="right_desc"><?php echo $right_desc; ?></p>
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
         <!-- tiktok wrapper -->
         <div class="container">
            <div class="tiktok-wrapper">
               <h2>Real Tiktok Likes, Followers and Views!</h2>
               <p>It’s simple. TikFly’s programmers use a specially designed algorithm to target users who are most likely to be interested in your content. Then, they engage with those users on your behalf. Which results in hundreds of new likes, views, and followers – all of which help to increase your visibility and reach.</p>
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
         <!-- end container -->
         <svg class="shop-page-overlay" width="750" height="1513" viewBox="0 0 750 1513" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M245.514 519.388L918.337 0C1409.79 415.51 1181.62 790.373 1006.1 925.866L245.514 1513C-199.135 1079.42 60.2433 669.935 245.514 519.388Z" fill="#FFB0B5" fill-opacity="0.25"/>
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