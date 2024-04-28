<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '|%r^2<vHd 7d:Zkgn5U={(v-R#hZH*TWv`FEXm0ngMOz-UJrz5vDTP6FkG#H`]T1' );
define( 'SECURE_AUTH_KEY',  '!Xj@&vsc2v, xom!ssw6N(i9!gb:2,|R*Qk5U>gx`kBHRts~^wPEFoi?b?yO]TLQ' );
define( 'LOGGED_IN_KEY',    '2gG,N4i-D(2^8,~]TS:dzhaY1knke<^8@2[L#a=]]w).z]gx<{G,/Y;w`(CZY.ke' );
define( 'NONCE_KEY',        '.H;#&b,4>x3bx4`rnc)x_r_(Du7LL#0h$f9}UohZ9.#(ZaQnKO(w~eI=k?K*c4|^' );
define( 'AUTH_SALT',        'usNjpft/?Jg?g`o(EO8$g(*tCQVb`Ha:z=awF4qweF|Iw [9m_(:RXK%jR0fE&n;' );
define( 'SECURE_AUTH_SALT', 'zQ9#kb}9_ zoxAEHj-P>J 8sojWXs@aDootIU$Bg6I}CAM8|6CI t##lBZS>et7R' );
define( 'LOGGED_IN_SALT',   '=y(O3vGta?taA|0S6}=sUxI43FC0RJUGg~x=eb=1sg_% GOlU@qV@ 5d zTqj8YM' );
define( 'NONCE_SALT',       'b[6,w/@DU!e8d/l!zvuD9--@w.O8aLzO4Ji~VSdo 9 &=d!j{Plf9x VXq`vMl}x' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
