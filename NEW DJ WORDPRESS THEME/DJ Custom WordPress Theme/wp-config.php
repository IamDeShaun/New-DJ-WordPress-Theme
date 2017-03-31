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
define('DB_NAME', 'djonesWP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Afro_2334');

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
define('AUTH_KEY',         '~MH{{4j[SMy()gq|K*KY<`4X59OZ@#B|?M4Y_5Yb8_CBV[NeC58CzLBfp?O.qxgU');
define('SECURE_AUTH_KEY',  '$B` :{]fVMM/2$r|uQQ<B=p*4t/HNmb8GPY-{@oT[z{SQ_Z&%_|`I:xJu?:tZ:;7');
define('LOGGED_IN_KEY',    ';9$tiGPBT6O~JOVw^qaDn|[6mMp.tp(N`Y@s^: X Zb{o3DoNlF#e7FH}Xrazqd<');
define('NONCE_KEY',        'R0I?98QPrBfGN)_-s{HPE>$&TW z5-9@YAFn#KfeiUy-SBPW,KB%?jh:qN*CYXIb');
define('AUTH_SALT',        'x_C}{,)LtP^_lixe/7hb-la)AqWE^w<.K}a*AiIaNU<Kze!f*TK[.k|fG|=r~m;u');
define('SECURE_AUTH_SALT', '&;-|UBI`22PQ._&|pCa4!C=G-^pS1sGO`I0O~ESlhi,h-u?_k~}`^@(}!LbHB8iZ');
define('LOGGED_IN_SALT',   '~GTBg/&!vR6EYz@u2#k;`X79ecwR8X<Th|`ZP-mv!_;b/MU9R{:iuM_Yb>OWn+(d');
define('NONCE_SALT',       'p>ZsqimL=pYdpnjaOBu<#xm4)}SzG^6sL7<~{Mv(piq_Sb4!_i0@)u]c7[+Q7(z[');

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
