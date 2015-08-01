<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hanan');

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
define('AUTH_KEY',         'Ra$Tn7c[=jDILCX*|%qQkMn#YLGC:U&U%_u.N+b?}s}kjrZjcuJy*mrIDb|ub>vi');
define('SECURE_AUTH_KEY',  '* Y|eVxL-uvmT)2`eF: N>R(*15FzM|-A8BO4feh/U+WZ#pf=vS9: TwDe+oWIr1');
define('LOGGED_IN_KEY',    'uSPYGi~C~-Z SO+it]*y_4YE9MbqeANRD$k[BFBV7Xq)whp!Yw-Q{^$2+G&%Vg/9');
define('NONCE_KEY',        'k-xe!Mj& $ge~D]VW$B?BSNik1mLpUX6FuT2-s(-*Ug] :VuN53C}A,?*>PF7Id!');
define('AUTH_SALT',        'yr|y(P-Hi,e0!1nUiq2r n6W|]kTn[~ftj1[19x-9.]EFWFKsn*^=p8e#4Y|DB``');
define('SECURE_AUTH_SALT', 'wi&:&>+Lcfhp;<|uGCcoq+EyC(L-q|G9F0(b1l+]udF!roAh.8mWj@do~eG8V&O@');
define('LOGGED_IN_SALT',   '6JN0%tG 72nX;c!W26QZ4%PgY:?fgl>5ebV|Y,-~p4_4jA^!J*:%g!^h]pv[dTEi');
define('NONCE_SALT',       'G#@NB|-ue-^$^^LdC,@YNBT$oD74 ued`!/=$OkT#E0ATmh~#$<y|Al]4K+j]Iql');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
