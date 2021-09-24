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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp\www\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Sq@8ZRc#B OqK!z23&*BA890C{Xl#)8RwwQNF&u5m<Ko67)e>&%RO9Ijz&3V{!UC');
define('SECURE_AUTH_KEY',  'JX*%4lTdNhRrRziq)tq0_~H>vq*Td+.&V;P*s%6pJt9X{l_%)bB7v+cRi,wAkr2W');
define('LOGGED_IN_KEY',    '&@f(1/te-3OtSY0d279GbbY/aCy``g .`u&YV>wxkY.S&0~d.w97qUY2d<e1H+kr');
define('NONCE_KEY',        '^PtYnW`v`/C0=>Gs.qZ`e/BFN#}^;y-k_Efmo%rnL{gxk@tY]b`;&eIm1@1.+6_k');
define('AUTH_SALT',        'nA_V0VN<5,u~UD%I((>3.]w#?cCZ.LT[hHY]s`4N;/]cvIX38%C~c.4.(D>BdtDw');
define('SECURE_AUTH_SALT', 'cPu.AE1|98J e} nam|QufmUxfccBPcw~)dl#O:o}1@|ctwCe#7jvzlV%t=Z,|:5');
define('LOGGED_IN_SALT',   'V-sDNF$iO0$&}=r<dBeVURt|$hKTLL{FIOi5m]1PrLYWoe=zj0X}V1:U(:SD>0uv');
define('NONCE_SALT',       'coO,aJ,<=-|$0mjj8pVqA6:ka3b7aRY(K&nLv@^Fb;uTE/K^w[>E/;wI^A8,wPW1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pref_wordpress_test';

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
