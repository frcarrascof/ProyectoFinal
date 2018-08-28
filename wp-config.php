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
define('DB_NAME', 'actitudilimitada');

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
define('AUTH_KEY',         ']UdqpoL~;&Rrh7O]0ZkTvt75bJoM<,eYHO7ikN~8P|v@h5Z3$>)!RjCW!b55h|cD');
define('SECURE_AUTH_KEY',  'p|NlEH($ ch)Q`qJG(j JA#C?LL2 eJR7h:wG)c5;u Es&r0LD^;rmt.}y?e{(1<');
define('LOGGED_IN_KEY',    'k6hinxI4;ZNufV9wv[ x@#`D*^f&:wD21ck>CKNS:V:Tn-|^8?Am(](tHR}gsQX1');
define('NONCE_KEY',        'O0;Myoqf!WkA1,%SR`j}A72E&{~x*NkomG=.!i#,AvR@T$FdO)Ix,_l7mK(yVun>');
define('AUTH_SALT',        '`FiZTg<XRV&AB{m62X&1MXLS}#65jxit{CPi.r/5:g5!{?L?xZBP !IN2D<:8 >5');
define('SECURE_AUTH_SALT', ';=`w0x5(&(d5J`M]DVorfs#]%5#)!nd3x]@WW_OGtkeeT2lh0J2hE!.53p5!m$lF');
define('LOGGED_IN_SALT',   'H2v$CW}(O`KQfQ[90Ac(%>q7F `v)Fr,oJ`.?0z +{~P>5|c.VLzNv +x=*cgB*!');
define('NONCE_SALT',       'f:>p~C&mK~Dfm@qY~~xu!7n@!>1#*m7wgvlCaxYYv1.8Eq>XiQT#:FI+hw!n!cF|');

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
