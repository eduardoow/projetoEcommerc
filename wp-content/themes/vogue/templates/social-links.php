<?php
if ( get_theme_mod( 'vogue-social-email' ) ) :
    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'vogue-social-email' ), 1 ) ) . '" title="' . __( 'Send Us an Email', 'vogue' ) . '" class="header-social-icon social-email"><i class="fa fa-envelope-o"></i></a>';
endif;

if ( get_theme_mod( 'vogue-social-facebook' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-facebook' ) ) . '" target="_blank" title="' . __( 'Find Us on Facebook', 'vogue' ) . '" class="header-social-icon social-facebook"><i class="fa fa-facebook"></i></a>';
endif;

if ( get_theme_mod( 'vogue-social-twitter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-twitter' ) ) . '" target="_blank" title="' . __( 'Follow Us on Twitter', 'vogue' ) . '" class="header-social-icon social-twitter"><i class="fa fa-twitter"></i></a>';
endif;

if ( get_theme_mod( 'vogue-social-skype' ) ) :
    echo '<a href="skype:' . esc_html( get_theme_mod( 'vogue-social-skype' ) ) . '?userinfo" title="' . __( 'Contact Us on Skype', 'vogue' ) . '" class="header-social-icon social-skype"><i class="fa fa-skype"></i></a>';
endif;

if ( get_theme_mod( 'vogue-social-linkedin' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-linkedin' ) ) . '" target="_blank" title="' . __( 'Find Us on LinkedIn', 'vogue' ) . '" class="header-social-icon social-linkedin"><i class="fa fa-linkedin"></i></a>';
endif;

if ( get_theme_mod( 'vogue-social-tumblr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-tumblr' ) ) . '" target="_blank" title="' . __( 'Find Us on Tumblr', 'vogue' ) . '" class="header-social-icon social-tumblr"><i class="fa fa-tumblr"></i></a>';
endif;

if ( get_theme_mod( 'vogue-social-flickr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'vogue-social-flickr' ) ) . '" target="_blank" title="' . __( 'Find Us on Flickr', 'vogue' ) . '" class="header-social-icon social-flickr"><i class="fa fa-flickr"></i></a>';
endif;