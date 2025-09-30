<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'HNC/6DnTEVYoQc4Xjce[FySDCxYW+nw7INsTtA#J%Cb Ynhq jm}R*>cFYa BmZY' );
define( 'SECURE_AUTH_KEY',   'lTe>)i1KgT`w?TB58BMc2.Ov2@acZK9wb08NJU>5*8K8c@e!].Gi~,seg;FDJ>ft' );
define( 'LOGGED_IN_KEY',     'm.v&up%x>~Q2GZcF_5$V/W2mwJ2N `#])yP=e3@lKP`r{4$+}-EWsyMrf `J7.80' );
define( 'NONCE_KEY',         'voBP)8QX=}38IA6;|Jr,S1v3GPv5l)@`<xraRXM)B<4okas3Xn(^A-;1iHC~4)z>' );
define( 'AUTH_SALT',         ';C`#SI;Y#.1^Orz.2)8dkzLR8+QM`w%Y%pXPfLe,%8jGkvord*z-jT&5W@(IVqHe' );
define( 'SECURE_AUTH_SALT',  '!b#EFg|Q!&$fOndZp([j|jpS#8f;2.2/fk>kYYy<a`ETw9#u)I0Xdqyg2:|bJIR&' );
define( 'LOGGED_IN_SALT',    'uQHGzf*]Nd<:PGPWdPIw7aWsD-4X<.p=PQp~U)Z*t|<&-aan>frM!w[ EQj.4n)?' );
define( 'NONCE_SALT',        'o SkPpl&Z|+L5!HfR=qipWi%}D.=$20B+Y`_@?pqfH]?!{S%a@BNzG}^>e1Co-;A' );
define( 'WP_CACHE_KEY_SALT', 'Xt~d418iMnCm_e;kC}i[Mt%.c~yLy;W2DQ,R-~8Ve%0c8>SE|Y-F@`aXFzX%)?S&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true );
	define( 'WP_DEBUG_DISPLAY', false );
	define( 'SCRIPT_DEBUG', true );
	define( 'SAVEQUERIES', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
if ( ! defined('WP_MEMORY_LIMIT') ) { define('WP_MEMORY_LIMIT', '512M'); }
if ( ! defined('WP_MAX_MEMORY_LIMIT') ) { define('WP_MAX_MEMORY_LIMIT', '512M'); }
if ( ! defined('WP_TEMP_DIR') ) { define('WP_TEMP_DIR', __DIR__ . '/wp-content/tmp'); }
ini_set('max_execution_time', 300);
ini_set('max_input_vars', 3000);
ini_set('post_max_size', '50M');
ini_set('upload_max_filesize', '50M');