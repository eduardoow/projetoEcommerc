<footer id="colophon" class="site-footer site-footer-social" role="contentinfo">
	
	<div class="site-footer-icons">
        <div class="site-container">
        	
        	<?php if ( ! get_theme_mod( 'vogue-footer-hide-social' ) ) : ?>
	            
	            <?php
				if ( get_theme_mod( 'vogue-social-email' ) ) :
				    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'vogue-social-email' ), 1 ) ) . '" title="' . __( 'Send Us an Email', 'vogue' ) . '" class="footer-social-icon footer-social-email"><i class="fa fa-envelope-o"></i></a>';
				endif;
				
				if ( get_theme_mod( 'vogue-social-facebook' ) ) :
				    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-facebook' ) ) . '" target="_blank" title="' . __( 'Find Us on Facebook', 'vogue' ) . '" class="footer-social-icon footer-social-facebook"><i class="fa fa-facebook"></i></a>';
				endif;
				
				if ( get_theme_mod( 'vogue-social-twitter' ) ) :
				    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-twitter' ) ) . '" target="_blank" title="' . __( 'Follow Us on Twitter', 'vogue' ) . '" class="footer-social-icon footer-social-twitter"><i class="fa fa-twitter"></i></a>';
				endif;
				
				if ( get_theme_mod( 'vogue-social-skype' ) ) :
				    echo '<a href="skype:' . esc_html( get_theme_mod( 'vogue-social-skype' ) ) . '?userinfo" title="' . __( 'Contact Us on Skype', 'vogue' ) . '" class="footer-social-icon footer-social-skype"><i class="fa fa-skype"></i></a>';
				endif;

				if ( get_theme_mod( 'vogue-social-linkedin' ) ) :
				    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-linkedin' ) ) . '" target="_blank" title="' . __( 'Find Us on LinkedIn', 'vogue' ) . '" class="footer-social-icon footer-social-linkedin"><i class="fa fa-linkedin"></i></a>';
				endif;

				if ( get_theme_mod( 'vogue-social-tumblr' ) ) :
				    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-tumblr' ) ) . '" target="_blank" title="' . __( 'Find Us on Tumblr', 'vogue' ) . '" class="footer-social-icon footer-social-tumblr"><i class="fa fa-tumblr"></i></a>';
				endif;

				if ( get_theme_mod( 'vogue-social-flickr' ) ) :
				    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-flickr' ) ) . '" target="_blank" title="' . __( 'Find Us on Flickr', 'vogue' ) . '" class="footer-social-icon footer-social-flickr"><i class="fa fa-flickr"></i></a>';
				endif; ?>
			
			<?php endif; ?>
			
        	<div class="site-footer-social-ad"><i class="fa fa-map-marker"></i> <?php echo wp_kses_post( get_theme_mod( 'vogue-website-site-add', __( 'Cape Town, South Africa', 'vogue' ) ) ) ?>
        	
			<?php printf( __( '</div><div class="site-footer-social-copy">Theme: %1$s by %2$s', 'vogue' ), 'Vogue', '<a href="https://kairaweb.com/">Kaira</a></div><div class="clearboth"></div>' ); ?>
        </div>
    </div>
    
</footer>

<?php if ( get_theme_mod( 'vogue-footer-bottombar' ) == 0 ) : ?>
	
	<div class="site-footer-bottom-bar">
	
		<div class="site-container">
			
			<?php do_action ( 'vogue_footer_bottombar_left' ); ?>
			
	        <?php wp_nav_menu( array( 'theme_location' => 'footer-bar','container' => false ) ); ?>
	        
	        <?php do_action ( 'vogue_footer_bottombar_right' ); ?>
                
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
<?php endif; ?>