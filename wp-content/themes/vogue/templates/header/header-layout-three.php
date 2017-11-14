<?php
/**
 * @package Vogue
 */
global $woocommerce; ?>

<header id="masthead" class="site-header <?php echo ( get_theme_mod( 'vogue-header-density' ) == 'vogue-header-density-compact' ) ? sanitize_html_class( 'site-header-compact' ) : ''; ?>">
	
	<?php do_action ( 'vogue_before_topbar' ); ?>
	
	<?php if ( ! get_theme_mod( 'vogue-header-remove-topbar' ) ) : ?>
		<div class="site-header-topbar">
			<div class="site-container">
				<div class="site-topbar-left">
					<?php do_action ( 'vogue_topbar_left_left' ); ?>
					
					<?php if ( ! get_theme_mod( 'vogue-header-hide-social' ) ) : ?>
						
						<?php get_template_part( '/templates/social-links' ); ?>
					
					<?php endif; ?>
					
					<?php wp_nav_menu( array( 'theme_location' => 'top-bar-menu', 'fallback_cb' => false ) ); ?>
					
					<?php if ( ! get_theme_mod( 'vogue-header-hide-add' ) ) : ?>
		            	<span class="site-topbar-left-ad"><i class="fa fa-map-marker"></i> <?php echo wp_kses_post( get_theme_mod( 'vogue-website-site-add', 'Cape Town, South Africa' ) ) ?></span>
					<?php endif; ?>
					
					<?php do_action ( 'vogue_topbar_left_right' ); ?>
				</div>
				
				<div class="site-topbar-right">
					<?php do_action ( 'vogue_topbar_right_left' ); ?>
					
					<?php if ( ! get_theme_mod( 'vogue-header-hide-no' ) ) : ?>
		            	<span class="site-topbar-right-no"><i class="fa fa-phone"></i> <?php echo wp_kses_post( get_theme_mod( 'vogue-website-head-no', 'Call Us: +2782 444 YEAH' ) ) ?></span>
					<?php endif; ?>
					
					<?php if ( !get_theme_mod( 'vogue-header-search', false ) ) : ?>
						<div class="menu-search">
					    	<i class="fa fa-search search-btn"></i>
					    </div>
					<?php endif; ?>
					
					<?php do_action ( 'vogue_topbar_right_right' ); ?>
				</div>
				
				<?php if ( !get_theme_mod( 'vogue-header-search', false ) ) : ?>
				    <div class="search-block">
				        <?php get_search_form(); ?>
				    </div>
				<?php endif; ?>
				
			</div>
			
			<div class="clearboth"></div>
		</div>
	<?php endif; ?>
	
	<div class="site-container">
	
		<div class="site-branding">
			
			<?php if ( get_header_image() ) : ?>
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-img" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php esc_url( header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>" /></a>
		    	<?php if ( get_theme_mod( 'vogue-header-image-show-title' ) ) : ?>
		        	<h1 class="site-title site-title-img"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>
		    	<?php if ( get_theme_mod( 'vogue-header-image-show-tagline' ) ) : ?>
		        	<h2 class="site-description site-description-img"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>
		    <?php else : ?>
		        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		    <?php endif; ?>
			
		</div><!-- .site-branding -->
	
		<nav id="site-navigation" class="main-navigation <?php echo ( get_theme_mod( 'vogue-mobile-nav-skin' ) ) ? sanitize_html_class( get_theme_mod( 'vogue-mobile-nav-skin' ) ) : sanitize_html_class( 'vogue-mobile-nav-skin-dark' ); ?>" role="navigation">
			<span class="header-menu-button"><i class="fa fa-bars"></i><span><?php echo esc_attr( get_theme_mod( 'vogue-header-menu-text', 'menu' ) ); ?></span></span>
			<div id="main-menu" class="main-menu-container">
				<span class="main-menu-close"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></span>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
				<?php if ( vogue_is_woocommerce_activated() ) : ?>
					<?php if ( ! get_theme_mod( 'vogue-header-remove-cart' ) ) : ?>
						<div class="header-cart">
							
				            <a class="header-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'vogue' ); ?>">
				                <span class="header-cart-amount">
				                    <?php echo sprintf( _n( '%d', '%d', $woocommerce->cart->cart_contents_count, 'vogue' ), $woocommerce->cart->cart_contents_count ); ?><span> - <?php echo $woocommerce->cart->get_cart_total(); ?></span>
				                </span>
				                <span class="header-cart-checkout<?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? ' cart-has-items' : ''; ?>">
				                    <i class="fa fa-shopping-cart"></i>
				                </span>
				            </a>
							
						</div>
					<?php endif; ?>
				<?php endif; ?>
				
			</div>
		</nav><!-- #site-navigation -->
		
		<div class="clearboth"></div>
	</div>
	
</header><!-- #masthead -->