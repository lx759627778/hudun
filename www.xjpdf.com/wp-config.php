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
define('DB_NAME', 'test.xjpdf');

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
define('AUTH_KEY',         'bRk)<n@91a3#jy+b)6H7@.U[r1;]unZj[#7QL:>lt7zEO$Aqq^crWip)CyVRx>:{');
define('SECURE_AUTH_KEY',  'J/K+4@+,-Qu8Fvk;Cfm!QMH4kZKKoX3mj{{YXt9J|Ka,bb)+|0&DKHH{ C,NV4V$');
define('LOGGED_IN_KEY',    'xCyU/D,q_6H*u O,92Rdn.]O99`Toi6c7b63syd6<oKu[uNo~Mf0?g8)rgHw3=oo');
define('NONCE_KEY',        '_6NU.-?*?256:J?|O<IaHU&hQK.+B@C>9/+rk5o.|,+U]=MA_S~H}B<06TV_$FVl');
define('AUTH_SALT',        'VQ#OYYcSt&FfTDLH~LUt@/v3-b9,j@`/O*Nzu>B_m8f#LEJ@0ev6PN1jMXO[-j./');
define('SECURE_AUTH_SALT', ',[?wc{`(v.LA(6Y/tBr[_w#^%tTHYyX7I9z5D@*tU(l;*$bAItuHJ1RnfL=j3I>4');
define('LOGGED_IN_SALT',   'jn2v8*=`||dSUvp6yk`C-_Oqb5|*2n7>SF.5OO;d67>S[)CpFl QJO@(2aj/U[ci');
define('NONCE_SALT',       'fSMTdH9^!B6%^AmXXbC7%|h^K+<$&Vt]rkff8`MRx_K3`M0iQGS,!kBty<x*%Y=f');

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
