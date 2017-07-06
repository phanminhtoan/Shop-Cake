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
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<d5*s$2/R EQ1e~yus?V/vW<G#S6.bq[3bfk,yRRk!.mX@BIPq2fZH.^MK.C^624');
define('SECURE_AUTH_KEY',  '@Dco?hMS^=wYT^rZKJK{6ITQnb8:MZgZ XP=!@W=X}<H<]iIut~*<fhx!_ko;X:F');
define('LOGGED_IN_KEY',    'qCS-ANzd[yb5<Kt.($9j=SBuT,?G_z);;}8=5xI2Ni)en#KLaH~G5e:LYiV@FT9M');
define('NONCE_KEY',        '(v36($d&e)~Mv^RIcn:Xw]43`XPi2?W >$ow;P -}a-R1~*Cd+~UNr]Ql=n:T0Jk');
define('AUTH_SALT',        'PfM*?EKNm~9VW}F`TGohL52xx@y5$JAPC/x=9rQ$f$(ae5bK28iN-s^`slnV$*8L');
define('SECURE_AUTH_SALT', '0Wo/bfXmUf=qE l/Vlr4i/^G+C?B 17*VWU`ah7?F*H@anUhU/pk;/z/%urJiY{w');
define('LOGGED_IN_SALT',   '$;^P~Kd+x8Tr31WXK|Sk$^55URC^B(foZX+O[KVV&fNQ}#o<3?a8D&;7~<AiA<EC');
define('NONCE_SALT',       'U%Yf]Kc$7kS/-3lP0y{],g}YIK/1j%N.3zfO;fJz7H%9arQ1?N,9j`e*7imS)ys`');

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
