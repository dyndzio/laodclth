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
define('DB_NAME', 'laodstore');

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
define('AUTH_KEY',         'gN_)SS)y.QDNIgZCDg^HnmNmF~6ZWEXvgs&:bGfjWH*6-5@zc)umC{#]OYZ,*RpW');
define('SECURE_AUTH_KEY',  'yM7EXVYxc(vq=}]|KDxTH7n@|Ki&AE^>u*0mV*7f(1^iiPE8geZ}Lo`s+5=Q1eru');
define('LOGGED_IN_KEY',    'Za{6HL#|ofJ6TrgU^v>qZn_OUvADXr~3_mk&4F6rZnQnP/TkyCCQSjW^RyEh2}[b');
define('NONCE_KEY',        '#lgvvgt8 t2|S6IUr/_IZ:w5*eEw4q(o&lz0B^xt!>`JU%zWGeKSF~(PZowB,},g');
define('AUTH_SALT',        'Y:vTg04Y*C;uF_(]fVvt9@v:355zi{7?uda{a<Z9s>DQ lh*{-|/ %i&=@q.zQUT');
define('SECURE_AUTH_SALT', '-YqD#-9BL[%jQ}x% cQw`71C!NQ_j5,#Wj.lfW-PkVDTjbogY%_C<=n+l_1k3}uS');
define('LOGGED_IN_SALT',   'lxu<$z:;{ZgAB><EP`=Uc#P>q!H=L:l%_!4?oEmhEV#^~!L+_TS[Zkospt|&pi,e');
define('NONCE_SALT',       'aX|_~HSCx7Z42<%Xcqv$/b`@ ~lK>CsfreFf%(mji:YL_&pE&H]ws)@$CFT7s|nU');

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
