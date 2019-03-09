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
define( 'DB_NAME', 'taylor_harris' );

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
define( 'AUTH_KEY',         'ey]Q}/@3-g}d[`^;/$l *vZ[RI*k~~V.jpkp2G/vh#x+ZJW39Iu#]2TTE3D#eqD>' );
define( 'SECURE_AUTH_KEY',  'yqDTz=fL{_Pn|>Q2xT(={8*UocN>[!]},#/VKa.l$rf^9|>5SjgPkvdc}RNwkS9=' );
define( 'LOGGED_IN_KEY',    '<B5/V`P<s$4.IDC#P~acT!eG*maJ?JoFAlV$z;Qin!y2%2ESTn T>Lz+w{75TDkr' );
define( 'NONCE_KEY',        '`U|u&{C6tBa~Fj)89%2]}9LvD4Ng/K.?&[`~|rZr.|C(:hTf|4kmvP@$PTD&kl1!' );
define( 'AUTH_SALT',        '{j/xBBg&-AOJL@GnNbelr,^0&6Hpst/Ao#s6lxRh/PuY9@o{x(U,o>tQie0vsn-t' );
define( 'SECURE_AUTH_SALT', 'AMV1}ZD<8M@oB-jY;pNej>l%Cd/M2+3cGUR=o*|eoAr0l~-J,>K6FGU;p;(g_}`z' );
define( 'LOGGED_IN_SALT',   '(cPTUWXLW;JLoqJXjVxwb.35>V_+df%;&V<-amk8{;>aC8agSu}@J1R:uAI+%Tu`' );
define( 'NONCE_SALT',       '0KgfIhku?EokXEN* `P+j:e/.9zxnT@aP-gxG_NFfQ]nGBb+D,k?3_9BJ~f//I_$' );

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
