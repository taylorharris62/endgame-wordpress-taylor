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
define( 'DB_NAME', 'myproject_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9+-{-|cbOP!*@dx5u]HcLL%ConAql9z7lvT=>Ul3:.IbW-%61shLK!lt(t$T|!B~' );
define( 'SECURE_AUTH_KEY',  '1r[LKH:Vf/=*`^ery?CG-^bw9*5etB:V)#1o$n`0jWdl[r{$Hxq Vo5*xaHDnSbq' );
define( 'LOGGED_IN_KEY',    '_DJH^5g`|f&F/lxBjC>0l0xVkQGlqBhT`atg5TOkJyBYZ_.tHV796ES*A?az&HyE' );
define( 'NONCE_KEY',        '$mj=*R1.k)He/q.<ZjrQ!wa9km.HG*<)nNvi%)!Cy]@}uDBN5?&F)LqLDV+pvV.}' );
define( 'AUTH_SALT',        'E9t5p5.qSE!FOaoUkr@fvWQ@XK5jnw>!6ugsR?rgcqNm5k,D))l@Rr!EaM>xbJcU' );
define( 'SECURE_AUTH_SALT', 'bh4A_PR=#^Ey;f.?u9#,c.4(MaZ6I#1Rg15|n918>aRR+e.r92UI+v#L^{ S[yF3' );
define( 'LOGGED_IN_SALT',   '$NVyQKYyBRFJDlW6CkO^;w!*zE#> i)SL;PeD$w5*B[dZ)42Ay13Emir 14puUhK' );
define( 'NONCE_SALT',       'Z@kDB=)1>CX7I, }L~e^jb}SD7lDGQ|SwptS=a?%{yZW,KFR-?Q5 +:sHI,Oc;o<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
