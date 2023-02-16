<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'nawaf' );

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
define( 'AUTH_KEY',         '}~e$Mco{C>Ix:@eLoujiIn/;WU@cj86=Q2ulKyAhw[1 CA<=#pjR/#+XGk.do}9F' );
define( 'SECURE_AUTH_KEY',  '&AUV}/d]|02olByPZ!9d*!(TShd9mCeFEb`f,`g<bu);{N/D&,c^I^&6<FRO-_9_' );
define( 'LOGGED_IN_KEY',    'o1.I0hfE5}~~k#A]8$H&/FLc{fyW{eM7IOVO_8=}D2u{ce[N,dv@KaEF0?A}$< ^' );
define( 'NONCE_KEY',        'Fk:DR&iyf/8Sn5J2u3IBNgN~fNV5]hE@;bqK#,iyp?DIq}M)0ilS`:G@ml,Tt8~4' );
define( 'AUTH_SALT',        'm#QABq0QX1.VqJ,_.1vmaJ}wC[=1]=o.?HC.{OS$;$UZ&r7]73(t#*cJ&KjjYMZ3' );
define( 'SECURE_AUTH_SALT', ';mK?wKE/}Hp[?=}I/d]r0,?U*<B(F{Ziw`V8@Bb<|,[LOaHZ#HIN@$Jd;{u&c83]' );
define( 'LOGGED_IN_SALT',   'xrhEd3FQROAFm=J0:<B,w$d<!84B$byqqt`TpEI+oHP7Uv)8z7sJ9}=5^nk/KMWo' );
define( 'NONCE_SALT',       '&pdboYftv4R2dA#&+smyRF{8S}|y?&{TwuJDPF-)7ms!oduY5l|wySJ{F1z!=!Oy' );

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
