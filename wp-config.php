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
define('DB_NAME', '_kinoshita');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Dw6h?@?^BlJfkxgZXCa.~/RX|!T[}8R]ZU,)67~+ut$I=oVMznDdMBgj?Xi;g&h=');
define('SECURE_AUTH_KEY',  'AJ7tQ:z2t,l?lfnzF)%N$c*vF[A8hk*>&a1>!__j]Rn,mwGV/]wuQf;4/ZAj}}jP');
define('LOGGED_IN_KEY',    '`T/QY}I9c*%HZuOVsmU& Mbl7[DEkXG p#!Ip1o(7S_Lc#&|N9=jsNm[ 3]T_DN1');
define('NONCE_KEY',        '~f),8Z3OcR}jJ`O>&o:t;Y^Z2suUJ@F/ ]1dVeMFx7B4;cmRSaXEhth.QCSc[@})');
define('AUTH_SALT',        'mR@ZHaI*]>-uWRNC[C|iD-LYjxC-;0*9C>bik<g:hR4UUv)FUPEzKp},<AYYYz#w');
define('SECURE_AUTH_SALT', 'dqo%iGdw3<bBDVsH+~ g<lK!tL0t5zow&HgM`ji.H*=eZNhB+P%Y,LfcMeAT1bo]');
define('LOGGED_IN_SALT',   'z{hSsUSb=JvnvV1w?7w/ARl:iZ!x-BcTt?gcl?6<$bPFMyg8Q+&r- bSTZ8 C!pO');
define('NONCE_SALT',       'RTm5mr7,1@GUY/mR.PXiw.sNI;=|r~Ww )cj+h.f*Qksc26*1<tsg@M>d+pok(,i');

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
