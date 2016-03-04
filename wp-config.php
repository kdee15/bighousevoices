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
define('DB_NAME', 'bighouse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'EU]y8ctxL|.`NFw3B-X-vr|2,-plp+Rc?xj+B1+r}S_5NDHkGoaYq]NL0aE059hH');
define('SECURE_AUTH_KEY',  '{n-zFZArd%zE3F+$)w%8zR2t^:f=tf*z`!~^opjIQ[-U3k}-Z>_[1*XBX}l{O&v;');
define('LOGGED_IN_KEY',    'G+A|sHR:9=IX-1^Y4+NfqnY>N~gGa#rJ?6w`5J-x I-ESz8|>[`-~B_6`SABShc.');
define('NONCE_KEY',        'm]^(vXyZ5 `*J=+v-)rvVk*Cu.YC8X!lZu*u!H2,3|gt57-l$z[;(skU(T|s<UMZ');
define('AUTH_SALT',        'F6+05^DEonDjd3N+@9uco5z|8oJ5zoLbd*x/zc^BUI;#Ez.7cx-P/x+Wa>c?ma(}');
define('SECURE_AUTH_SALT', '_n5>~s9hnrzDBdNU_fr&]YMkpT2&bN@H~f3m|V+|uc-}w94D-1~Ky-6g0Qt&$F+H');
define('LOGGED_IN_SALT',   'rgP8:T(3|WEB TUoKZb,P)<o.ZGNt-~sWC=DLybPN_*Bg-Y|3?M`xFdYd-|j7+yg');
define('NONCE_SALT',       '&-$_u{*gU!,{w~2fJ~59S `Y<e12UQa@|^poqLya).YTPf0NMur{WQm)iXfpNT-b');

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
