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
define('DB_NAME', 'lunarCycles');

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
define('AUTH_KEY',         'Dx$Zd,}_l2OEeQ}bbEx.FgqTQg]q7rQUu:8)Asf3ip9Q1l)dRt,,GJ+}/s:}>x}s');
define('SECURE_AUTH_KEY',  'h@z&4WJIm{V6+(c/pAB1H(f/{ ^ET&&6VM)[MC+*&hx(-+Jj4)#J]=GPuE<F|60 ');
define('LOGGED_IN_KEY',    'JO16ZbJwSN-`TT{:BwKU:vDj_?)RC;]>V8zk:<W7J<t%uGT(5hH{bMeGq-_/OCx7');
define('NONCE_KEY',        'lQn`#oGh p0u Y>.u7&b*[RLb8%PdF7,]QAI!-j98osbss#uiXX)UD~wwZ`ho5bw');
define('AUTH_SALT',        'TGy%JD,dg~Q2bt`b5^.dvJ0E^;@eZ]z~W[9u4!RQ]4NN_Hxwv,.J?U@P{N@xa.>Y');
define('SECURE_AUTH_SALT', '$ViT}*H5xLI&T`f:=fUk?AlF|9<tv;j~I_ExJ/;JU2@kI^7y0X ~U3{oeJ^9,xs#');
define('LOGGED_IN_SALT',   'LSY_)gut{QtST4S5jGamxOm_{t?pqSOf`w&;@!+T_& Zy:Bwo;zi#^~&uyl%Eb`I');
define('NONCE_SALT',       'ARv3y7VB~Cs)>]TNUEgCW0uWu^xd7L 2e1tp[ZI<NM{bM7MS38XznG+yw>U*x8wV');

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
