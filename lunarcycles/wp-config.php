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
define( 'DB_NAME', 'lunarcycles' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(Ty>E)%(@!,MP[k}W$Q|~=1pvfSXmukr<Eo/<9]{L5*Qw(N]<GlT%);dp>}_/>,&' );
define( 'SECURE_AUTH_KEY',  '@gAx.2{`$oV?RTDER 7Ic5~z.n;$Ox)^Nwg|xSjeYUn3C.y(~5|G|joZ#Kd~,& 7' );
define( 'LOGGED_IN_KEY',    'NoPKcI@Q+2;gjwFmd(-A3!u4V;|75`&Y$.u,;B)M=+7gcHD4j1D;lV{GDwWTMgVB' );
define( 'NONCE_KEY',        'SW5Mc!e]lDfpTEZSP(uhr,%_x}ouC(70!J/Wq3gK53[&G}M[92,SA6PH.q_7p7}0' );
define( 'AUTH_SALT',        'J%lLS-yTCR_ (b0n,m%F/QNxk/%4U36xg,SEDgRF|`*9H:z;m()>^8>FDE,N*,6+' );
define( 'SECURE_AUTH_SALT', '6;@lSJ!gIIAfP|o|&tzC8*K(@-ox@tvF$}fS]w{UpB/a]<t=K@r^Z9@kIZsQLV<f' );
define( 'LOGGED_IN_SALT',   '?-iP<BX0 1kh%?N`;CU>t^w{eWf80;H$Y5ShF&:ictPZ9D)erfrWz4?UR<tQUTbu' );
define( 'NONCE_SALT',       'hYQGSSs2.w%W~39J]EEd[1nRYJINC#-Loni.I8hG0jvW {L;Ql2_0g[q?o/b{~#I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dblc_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
