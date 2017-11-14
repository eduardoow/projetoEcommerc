<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecommercteste');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{kx$}<IB@nt.~fN&dAc?]cqDdyycW=1e~^gs-}I;`_M[]O&n;GJt_=Jx]weq,XVJ');
define('SECURE_AUTH_KEY',  'h<[UmzK[j$>fA UXsFbCK%k89.TGo-9]I<j=HlLP{1GD<Kmbw>@2ZYBh^|NB&o#4');
define('LOGGED_IN_KEY',    'rZQj0=F )ham;-%;_wJfvHL] %?pkb6&VWSFZE[~Qya}1Ag4,Ql,3O2j2HKd-1Aw');
define('NONCE_KEY',        'IYkuGA#E(6%EJ#jt$Pye{19eJj$*U V|ja0|SI=zSQ~6IBzol3;q;)8rBKu@wM~<');
define('AUTH_SALT',        '-}A^9O)(zR31,98%(*jL0$t+E%;~~PcP?l0j4 >ORE~_WI %oC:9CfYXuXSrjP$k');
define('SECURE_AUTH_SALT', '9M(6u=;!$8qH)<^{5`T50t)8J(r9]^e>H`.LGg0DwJ$:=i=;c_*x R)Ht#VM,[qn');
define('LOGGED_IN_SALT',   '(Qg!)Y$$h`l~02#,A5==657`GFu^Z^FJp9O6Kfb#Rq3zv1uzi5PgsvRRTq8xG<T0');
define('NONCE_SALT',       'qCeb:xF989}Sy,]<fE 8HWtidWYF]`hpOO`;Z_i}0D*a[Gq]shd~/P@r#hi|lLfm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
