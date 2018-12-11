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
define('DB_NAME', 'dl_s11mesmerize');

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
define('AUTH_KEY',         '<23D][}3C%q0/Se+p=KRixLM /#5BiHW@B+dLlk<-.|v;<YIEr7^iy~tZnq/Vg<2');
define('SECURE_AUTH_KEY',  'U5,LY=E)k@sa%.w^R!+DD>5q1^X3alt, zWK;BXL/]xa5m[RxekTVzpmyL[ri)()');
define('LOGGED_IN_KEY',    'Q!jxF}^ x{/pdD%$c%Foe;Ap*uhrg8v;@C;pD#%]*]:dUa$4n73GI`pJeangqU#(');
define('NONCE_KEY',        'K*+AKuwh%GD<!*cUs$]FZARcfA~_)wE(6i,_2i`f}VHqm-<NX E;C%OsQ]mBxLOh');
define('AUTH_SALT',        'xQ/7mw=:E%wpj=a1}Pjo7)LJ@tT|y4J<^ p(}b_EV,qIz1k6:2qamFAa4y<nYo=s');
define('SECURE_AUTH_SALT', '6wf#Oo.gj)kmZhnru2&Ryl{bE2WK[?FEE_u/En~-|EbH,@x`%sldGt3^Yn%uX(tf');
define('LOGGED_IN_SALT',   'Dr]O+Bbleo|$29:zC~c_bnYf|TL`c->hPgN/)PxK@M }^g4{*DQc:K!A8h]i|zXh');
define('NONCE_SALT',       '9_0R6?,gx7r#n&_d[R@.safi!h(!`y^2%SKK@{uvOxbe)[OIB~=/0CHSZzO}N@5X');

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
