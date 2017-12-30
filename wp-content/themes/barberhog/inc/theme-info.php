<?php
/**
 * Theme info page
 *
 * @package barberhog
 */

//Add the theme page
add_action('admin_menu', 'barberhog_add_theme_info');
function barberhog_add_theme_info(){

	if ( !current_user_can('install_plugins') ) {
		return;
	}

	$theme_info = add_theme_page( __('barberhog Info','barberhog'), __('barberhog Info','barberhog'), 'manage_options', 'barberhog-info.php', 'barberhog_info_page' );
	add_action( 'load-' . $theme_info, 'barberhog_info_hook_styles' );
}

//Callback
function barberhog_info_page() {
	$user = wp_get_current_user();
?>
	<div class="info-container">
		<p class="hello-user"><?php echo sprintf( __( 'Hello, %s,', 'barberhog' ), '<span>' . esc_html( ucfirst( $user->display_name ) ) . '</span>' ); ?></p>
		<h1 class="info-title"><?php echo sprintf( __( 'Welcome to barberhog version %s', 'barberhog' ), esc_html( wp_get_theme()->version ) ); ?></h1>
		<p class="welcome-desc"><?php esc_html_e( 'barberhog is now installed and ready to go. To help you with the next step, we’ve gathered together on this page all the resources you might need. We hope you enjoy using barberhog. ', 'barberhog' ); ?>
	

		<div class="barberhog-theme-tabs">

			<div class="barberhog-tab-nav nav-tab-wrapper">
				<a href="#begin" data-target="begin" class="nav-button nav-tab begin active"><?php esc_html_e( 'Getting started', 'barberhog' ); ?></a>
				<a href="#actions" data-target="actions" class="nav-button actions nav-tab"><?php esc_html_e( 'Recommended Actions', 'barberhog' ); ?></a>
				<a href="#support" data-target="support" class="nav-button support nav-tab"><?php esc_html_e( 'Support', 'barberhog' ); ?></a>
				<a href="#table" data-target="table" class="nav-button table nav-tab"><?php esc_html_e( 'Free vs Pro', 'barberhog' ); ?></a>
			</div>

			<div class="barberhog-tab-wrapper">

				<div id="#begin" class="barberhog-tab begin show">
					<h3><?php esc_html_e( 'Step 1 - Implement recommended actions', 'barberhog' ); ?></h3>
					<p><?php esc_html_e( 'We\'ve made a list of steps for you to follow to get the most of barberhog.', 'barberhog' ); ?></p>
					<p><a class="actions" href="#actions"><?php esc_html_e( 'Check recommended actions', 'barberhog' ); ?></a></p>
					<hr>
					<h3><?php esc_html_e( 'Step 2 - Read documentation', 'barberhog' ); ?></h3>
					<p><?php esc_html_e( 'Our documentation (including video tutorials) will have you up and running in no time.', 'barberhog' ); ?></p>
					<p><a href="http://docs.athemes.com/category/8-barberhog" target="_blank"><?php esc_html_e( 'Documentation', 'barberhog' ); ?></a></p>
					<hr>
					<h3><?php esc_html_e( 'Step 3 - Customize', 'barberhog' ); ?></h3>
					<p><?php esc_html_e( 'Use the Customizer to make barberhog your own.', 'barberhog' ); ?></p>
					<p><a class="button button-primary button-large" href="<?php echo admin_url( 'customize.php' ); ?>"><?php esc_html_e( 'Go to Customizer', 'barberhog' ); ?></a></p>
				</div>

				<div id="#actions" class="barberhog-tab actions">
					<h3><?php esc_html_e( 'Install: Page Builder by SiteOrigin', 'barberhog' ); ?></h3>
					<p><?php esc_html_e( 'It is highly recommended that you install Page Builder by SiteOrigin. It will enable you to create pages by adding widgets to them using drag and drop.', 'barberhog' ); ?></p>
					
					<?php if ( !defined( 'SITEORIGIN_PANELS_VERSION' ) ) : ?>
					<?php $so_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=siteorigin-panels'), 'install-plugin_siteorigin-panels'); ?>
					<p>
						<a target="_blank" class="install-now button" href="<?php echo esc_url( $so_url ); ?>"><?php esc_html_e( 'Install and Activate', 'barberhog' ); ?></a>
					</p>
					<?php else : ?>
						<p style="color:#23d423;font-style:italic;font-size:14px;"><?php esc_html_e( 'Plugin installed and active!', 'barberhog' ); ?></p>
					<?php endif; ?>

					<hr>
					<h3><?php esc_html_e( 'Install: barberhog Toolbox', 'barberhog' ); ?></h3>
					<p><?php esc_html_e( 'It is highly recommend that you install barberhog Toolbox. It will create custom post types like services and employees for you to use on your website.', 'barberhog' ); ?></p>
					<?php if ( !class_exists('barberhog_Toolbox') ) : ?>
					<?php $st_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=barberhog-toolbox'), 'install-plugin_barberhog-toolbox'); ?>
					<p>
						<a target="_blank" class="install-now button" href="<?php echo esc_url( $st_url ); ?>"><?php esc_html_e( 'Install and Activate', 'barberhog' ); ?></a>
					</p>
					<?php else : ?>
						<p style="color:#23d423;font-style:italic;font-size:14px;"><?php esc_html_e( 'Plugin installed and active!', 'barberhog' ); ?></p>
					<?php endif; ?>
					<hr>					
					<h3><?php esc_html_e( 'Demo content', 'barberhog' ); ?></h3>
					
					<div class="column-wrapper">
						<div class="tab-column">
						<h4><?php esc_html_e( 'Option 1 - automatic', 'barberhog' ); ?></h4>
						<p><?php esc_html_e( 'Install the following plugin and then come back here to access the importer. With it you can import all demo content and change your homepage and blog page to the ones from our demo site, automatically. It will also assign a menu.', 'barberhog' ); ?></p>
						

						<?php if ( !class_exists('OCDI_Plugin') ) : ?>
						<?php $odi_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=one-click-demo-import'), 'install-plugin_one-click-demo-import'); ?>
						<p>
							<a target="_blank" class="install-now button importer-install" href="<?php echo esc_url( $odi_url ); ?>"><?php esc_html_e( 'Install and Activate', 'barberhog' ); ?></a>
							<a style="display:none;" class="button button-primary button-large importer-button" href="<?php echo admin_url( 'themes.php?page=pt-one-click-demo-import.php' ); ?>"><?php esc_html_e( 'Go to the importer', 'barberhog' ); ?></a>						
						</p>
						<?php else : ?>
							<p style="color:#23d423;font-style:italic;font-size:14px;"><?php esc_html_e( 'Plugin installed and active!', 'barberhog' ); ?></p>
							<a class="button button-primary button-large" href="<?php echo admin_url( 'themes.php?page=pt-one-click-demo-import.php' ); ?>"><?php esc_html_e( 'Go to the automatic importer', 'barberhog' ); ?></a>
						<?php endif; ?>
						</div>
						<div class="tab-column">
						<h4><?php esc_html_e( 'Option 2 - manual', 'barberhog' ); ?></h4>
						<p><?php esc_html_e( 'Download the following demo content file and then click the button to go to the WordPress default importer.', 'barberhog' ); ?></p>
							<a class="button" href="//athemes.com/?wpdmdl=17783"><?php esc_html_e( 'Download demo content', 'barberhog' ); ?></a>
							<a class="button button-primary" href="<?php echo admin_url( 'import.php' ); ?>"><?php esc_html_e( 'Go to the manual importer', 'barberhog' ); ?></a>
						</div>
					</div>
				</div>

				<div id="#support" class="barberhog-tab support">
					<div class="column-wrapper">
						<div class="tab-column">
						<span class="dashicons dashicons-sos"></span>
						<h3><?php esc_html_e( 'Visit our forums', 'barberhog' ); ?></h3>
						<p><?php esc_html_e( 'Need help? Go ahead and visit our support forums and we\'ll be happy to assist you with any theme related questions you might have', 'barberhog' ); ?></p>
							<a href="https://athemes.com/forums/" target="_blank"><?php esc_html_e( 'Visit the forums', 'barberhog' ); ?></a>				
							</div>
						<div class="tab-column">
						<span class="dashicons dashicons-book-alt"></span>
						<h3><?php esc_html_e( 'Documentation', 'barberhog' ); ?></h3>
						<p><?php esc_html_e( 'Our documentation can help you learn how to use the theme and also provides you with premade code snippets and answers to FAQs.', 'barberhog' ); ?></p>
						<a href="http://docs.athemes.com/category/8-barberhog" target="_blank"><?php esc_html_e( 'See the Documentation', 'barberhog' ); ?></a>
						</div>
					</div>
				</div>
				<div id="#table" class="barberhog-tab table">
				<table class="widefat fixed featuresList"> 
				   <thead> 
					<tr> 
					 <td><strong><h3><?php esc_html_e( 'Feature', 'barberhog' ); ?></h3></strong></td>
					 <td style="width:20%;"><strong><h3><?php esc_html_e( 'barberhog', 'barberhog' ); ?></h3></strong></td>
					 <td style="width:20%;"><strong><h3><?php esc_html_e( 'barberhog Pro', 'barberhog' ); ?></h3></strong></td>
					</tr> 
				   </thead> 
				   <tbody> 
					<tr> 
					 <td><?php esc_html_e( 'Access to all Google Fonts', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Responsive', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Parallax backgrounds', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Social Icons', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Slider, image or video header', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Front Page Blocks', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Translation ready', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Polylang integration', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Color options', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Blog options', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Widgetized footer', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Background image support', 'barberhog' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Footer Credits option', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Extra widgets (timeline, latest news in carousel, pricing tables, a new employees widget and a new contact widget)', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Extra Customizer Options (Front Page Section Titles, Single Employees, Single Projects, Header Contact Info, Buttons)', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Header support for Crelly Slider', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Header support for shortcodes', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Single Post/Page Options', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Woocommerce compatible', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( '5 Extra Page Templates (Contact, Featured Header - Default, Featured Header - Wide, No Header - Default, No Header - Wide)', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Priority support', 'barberhog' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
				   </tbody> 
				  </table>
				  <p style="text-align: right;"><a class="button button-primary button-large" href="https://athemes.com/theme/barberhog-pro"><?php esc_html_e('Buy barberhog Pro ', 'barberhog'); ?></a></p>
				</div>		
			</div>
		</div>
	</div>
<?php
}

//Styles
function barberhog_info_hook_styles(){
	add_action( 'admin_enqueue_scripts', 'barberhog_info_page_styles' );
}
function barberhog_info_page_styles() {
	wp_enqueue_style( 'barberhog-info-style', get_template_directory_uri() . '/css/info-page.css', array(), true );

	wp_enqueue_script( 'barberhog-info-script', get_template_directory_uri() . '/js/info-page.js', array('jquery'),'', true );

}