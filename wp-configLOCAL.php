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

/** MySQL settings - You can get this info from your web host 
 ******   LOCALHOST (AMPPS) SERVER  ****** 
 */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'viEh.ZDwQHMTM$rEaLAV1)bM-vaj8R?y-t D2ZqT28[aI%V0-=jInvi?*6zRfq>?');
define('SECURE_AUTH_KEY',  'Na;F/`0mR;YdC:BWCm]tX7@)aJsX0YD|zB,688gHonMw7zjTB)H{VRPTSKSx 0JB');
define('LOGGED_IN_KEY',    '6cR.!O{7+)zIKa[!(0M^<@XuS:<ZmAA& !~AZV?~Wl45CZz7Ns$#|%o?7-4@Vhv ');
define('NONCE_KEY',        'brQkIx/IjEML^95JEGBbM8IUPh`jSr$`,/5?tkAW_k]ZX|._nQEaD%v: oPM8Bhu');
define('AUTH_SALT',        'Y!rZo24UL4hj1Ra^e{i&r@jW7uafQAar7aeV1>RoR D2sll%{&#;9N],BUAJcQy-');
define('SECURE_AUTH_SALT', ': c)]5ru^FeG!aY]`xc`_)5`;5W3.-Jd`056|:f4g)S[N 2fV?al2I]UH:Y##,%L');
define('LOGGED_IN_SALT',   'an8i=n98WqMvk,^A0wp+;cP[=2s5xWekRv%}*N]+~fpfjHBc:lY7c1#!e6c6=K{s');
define('NONCE_SALT',       '!MS@Mb_D/A0?zn11rX?S;yx^ o0erx5p}?XAlsuU@`p^f787{Jj}dE5!M2@J5J2(');

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
