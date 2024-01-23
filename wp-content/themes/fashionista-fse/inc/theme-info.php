<?php
/**
 * Add Theme info Page
 */

function fashionista_fse_menu() {
	add_theme_page( esc_html__( 'Fashionista FSE', 'fashionista-fse' ), esc_html__( 'About Fashionista FSE', 'fashionista-fse' ), 'edit_theme_options', 'about-fashionista-fse', 'fashionista_fse_theme_page_display' );
}
add_action( 'admin_menu', 'fashionista_fse_menu' );

function fashionista_fse_admin_theme_style() {
	wp_enqueue_style('fashionista-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'fashionista_fse_admin_theme_style');

/**
 * Display About page
 */
function fashionista_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'fashionista-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'Fashionista FSE is one of the best fashion WordPress theme for commercial websites related to clothes, clothing, clothing shop, clothing store, fashion, fashion blog, fashion store, minimal, and shoe store. If you are looking forward to picking the best option for your fashion store, boutique, model agency, salon, and all other fashion-related commercial websites, pick this free fashion WordPress theme to avail the best functions and features of all time. This multipurpose theme is also suitable for business corporate, construction, hotel, restaurant, flower shop, travel and tour website, coaching, education, sports, medical, doctor, gym, fitness, modelling and wedding. It is a multi-browser and cross-device compatibility theme. It comes with a highly reliable and friendly user interface. Operating it is incredibly easy and simple. This multi-resolution theme will run seamlessly on both high and low-resolution devices without any trouble. It is compatible with the WooCommerce plugin, so you can easily create your online store website. ', 'fashionista-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'fashionista-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'fashionista-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'fashionista-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'fashionista-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'fashionista-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'fashionista-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'fashionista-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'fashionista-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'fashionista-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Fashionista PRO', 'fashionista-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'fashionista-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/fashion-shop-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'fashionista-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'fashionista-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/fashionista/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'fashionista-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/fashionista/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'fashionista-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'fashionista-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'fashionista-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Fashionista FSE, please give your feedback.', 'fashionista-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/fashionista-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'fashionista-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>