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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'd~H2Grm`9U0{fn.G0YGN^E[{SK>4o1_F3h`=_9vN-RHul-#{[!O~G9o69F<S<.<y' );
define( 'SECURE_AUTH_KEY',  'uZ%:MDxc*?Px,9H)A^#.7NX};FK}|&,{`2HVA6,?g~hi<urGKZhye82 ^Z[(U&1R' );
define( 'LOGGED_IN_KEY',    '2w</AuhU^w%3u!=K@,({.Q8x:B xbJ6Kp8,JU+NJ97Q-xV]d>flgP{0$b]PvZ;U9' );
define( 'NONCE_KEY',        'rAI0,]`)%Y5CHE#,H5rs|.+*<qT)G&46-G[CD=VH<JxLI$oJOX=3}{M*k(rZ(%,h' );
define( 'AUTH_SALT',        '`S&pQmD9UU&W43REn5VD&b~!D[5:99V[wUJ`rwxrsAPUDtJXEvfMG#^s;_r^WiVy' );
define( 'SECURE_AUTH_SALT', 'Ql8xNM1,g/92<%_v.GTuW|#6$p^nikA63(dV=+lk!a|({+`+y.[)I^-i%n}uPb o' );
define( 'LOGGED_IN_SALT',   '>H-Y00?{-WRG!h/Gd/`q+@nnLg%g>v!L}m`/-!iX?Ff6,2<N8Ff-pnG!gr`aI&Pk' );
define( 'NONCE_SALT',       '#4uzL/Xt)9<NX_quV!Ig6=_E)g^/y+9+Ce<4}[qIHN7A/NkMX5u6!pInBo!{*FNr' );

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
