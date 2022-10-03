<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webify' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MrpBGw:E-EX,245aO)^Jn#pM&7{!Ad=GZ2/a,{Pjf;7~|-qO)r<{:0R0W;j$7&9;' );
define( 'SECURE_AUTH_KEY',  'cVJc:p|[wkRB;LZ{VXxqV@#arWXof}6r!DN1RV@$myZi6HTUP{HN@k%: xGIDmye' );
define( 'LOGGED_IN_KEY',    '$!3PKwkd_,33AA8/h_JJ3DhE$ :h~kVz.to(ck!$Ji={w@B+vMXmtQMXRH~el{}*' );
define( 'NONCE_KEY',        '1$E6BK6NVzTzlrScD!)r_mO>/<SEkWinIek?#F?=!,iO@CM~i_L!J@Ee;Wk%QP,,' );
define( 'AUTH_SALT',        'gJ1CyVbsA-B=#)M9v(1!?Bc3QK4$,Pbp9zZHhC s=ux.UJelSx<- Q iFwHUtMrM' );
define( 'SECURE_AUTH_SALT', '7k_IBMGt$/{=g$51&2=GvU{Kp~McGW)^os<UUVmqW18Uxpfm6tgOpc4Mm0A}c.j7' );
define( 'LOGGED_IN_SALT',   '+8`<3>|u0U.jcbwRwUs!4HH!XY4647#%mz*;:y(L4wp{N[AFz5pbN@U<~[9|*{P1' );
define( 'NONCE_SALT',       'Gn<hsvZBnM[V(.O}-47n8>^;YscbKVG.P|^HYbr>Y[NH;^gV.W-aYt~;uWxAAd|j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
