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
			'label' => esc_html( 'Header', 'picchi_extrantion'),
			'tab'	=>  \Elementor\Controls_Manager::TAB_CONTENT,
		]);

		//bannar Image
		$this->add_control(
			'bannager_image',
			[
				'label' => esc_html__( 'Choose Background Image', 'picchi_extrantion' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

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

		?>
		<!-- Banner section -->
		<div class="banner-section">
         <img class="banner-bg" src="<?php echo $bannger_bg_img; ?>" alt="">
         <div class="container">
            <div class="banner-content">
               <h1>Buy TikTok Likes, Followers and Views
                  with Super Fast Delivery
               </h1>
               <p>TikFly uses a unique system to target followers
                  that are more likely to engage with your content.
                  This results in tons of TikTok followers, likes, and
                  views of the highest quality – all which help to
                  increase your visibility and reach.
               </p>
               <ul class="button-group">
                  <li>
                     <a href="#">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M17.9989 3.21509C16.1229 3.21509 14.4438 4.12719 13.3969 5.52645C12.8623 4.81004 12.1679 4.22814 11.3691 3.82692C10.5703 3.4257 9.68889 3.21621 8.79496 3.21509C5.61295 3.21509 3.0321 5.8063 3.0321 9.00904C3.0321 10.2425 3.22904 11.3826 3.57108 12.4398C5.20872 17.6222 10.2564 20.7213 12.7543 21.5712C13.1067 21.6956 13.6872 21.6956 14.0396 21.5712C16.5375 20.7213 21.5852 17.6222 23.2228 12.4398C23.5649 11.3826 23.7618 10.2425 23.7618 9.00904C23.7618 5.8063 21.1809 3.21509 17.9989 3.21509Z" fill="white"/>
                        </svg>
                        <span>Buy Likes</span>                     
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.6666 2.60522C6.95101 2.60522 4.7433 4.81294 4.7433 7.52852C4.7433 10.1923 6.82663 12.3482 9.54222 12.4415C9.62514 12.4311 9.70806 12.4311 9.77025 12.4415H9.8428C11.117 12.3989 12.3247 11.8626 13.2106 10.9457C14.0965 10.0289 14.5911 8.80344 14.5899 7.52852C14.5899 4.81294 12.3822 2.60522 9.6666 2.60522ZM14.9319 15.1975C12.0401 13.2696 7.32415 13.2696 4.41162 15.1975C3.09529 16.0785 2.36975 17.2704 2.36975 18.5453C2.36975 19.8202 3.09529 21.0018 4.40126 21.8724C5.85234 22.8467 7.75947 23.3339 9.6666 23.3339C11.5737 23.3339 13.4809 22.8467 14.9319 21.8724C16.2379 20.9914 16.9635 19.8098 16.9635 18.5246C16.9531 17.2497 16.2379 16.0681 14.9319 15.1975ZM21.0576 8.13798C21.2234 10.1488 19.7931 11.9108 17.8134 12.1492H17.7615C17.6994 12.1492 17.6372 12.1492 17.5853 12.1699C16.5799 12.2217 15.6575 11.9004 14.963 11.3096C16.0306 10.3561 16.6421 8.92571 16.5178 7.37098C16.4466 6.56253 16.1721 5.78522 15.7197 5.11144C16.2628 4.84722 16.862 4.7191 17.4657 4.73812C18.0693 4.75715 18.6593 4.92275 19.1847 5.22064C19.7101 5.51853 20.1551 5.93977 20.4814 6.44802C20.8077 6.95627 21.0054 7.53626 21.0576 8.13798Z" fill="white"/>
                           <path d="M23.1284 17.7274C23.0455 18.7328 22.4029 19.6035 21.3249 20.1943C20.2885 20.7643 18.9825 21.0338 17.6869 21.0027C18.4331 20.329 18.8685 19.4894 18.9514 18.5981C19.055 17.3128 18.4435 16.0794 17.2205 15.0948C16.526 14.5454 15.7176 14.1101 14.8365 13.7888C17.1272 13.1254 20.0086 13.5711 21.781 15.0015C22.7346 15.7685 23.2217 16.7324 23.1284 17.7274Z" fill="white"/>
                        </svg>
                        <span>Buy Followers</span>                  
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M22.3636 9.54856C19.9693 5.78612 16.466 3.61987 12.7761 3.61987C10.9312 3.61987 9.13804 4.15884 7.50039 5.16423C5.86275 6.17999 4.39094 7.66216 3.18862 9.54856C2.15213 11.1758 2.15213 13.8189 3.18862 15.4462C5.5829 19.219 9.08621 21.3748 12.7761 21.3748C14.621 21.3748 16.4142 20.8359 18.0518 19.8305C19.6894 18.8147 21.1613 17.3326 22.3636 15.4462C23.4001 13.8292 23.4001 11.1758 22.3636 9.54856ZM12.7761 16.6899C10.4544 16.6899 8.5887 14.8139 8.5887 12.5025C8.5887 10.1912 10.4544 8.31515 12.7761 8.31515C15.0978 8.31515 16.9635 10.1912 16.9635 12.5025C16.9635 14.8139 15.0978 16.6899 12.7761 16.6899Z" fill="white"/>
                           <path d="M12.774 9.53809C11.9892 9.53809 11.2365 9.84985 10.6815 10.4048C10.1266 10.9598 9.81482 11.7124 9.81482 12.4972C9.81482 13.2821 10.1266 14.0347 10.6815 14.5897C11.2365 15.1446 11.9892 15.4564 12.774 15.4564C14.4013 15.4564 15.7383 14.1297 15.7383 12.5024C15.7383 10.8752 14.4013 9.53809 12.774 9.53809Z" fill="white"/>
                        </svg>
                        <span>Buy Views</span>                  
                     </a>
                  </li>
               </ul>
            </div>
            <div class="thumbnail">
               <img src="src/images/feature.png" alt="">
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