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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         'j!S2ofD](,0oZePykA+lff.)=0W~1nZIT3lI(1LVq?>@@kS$aaeRmeV{2qCd4q6-' );
define( 'SECURE_AUTH_KEY',  '>JNtb)ydQywkipcr$Ob;~+1ChAf7jjztBhUUB;)56Tj_Y,P}1x#([L8Gyih40$&R' );
define( 'LOGGED_IN_KEY',    '@&h4d/D9hGjv{ajMn6Ip* ojU7 1A/1$A#{a<}fVClzB5HyuVydbVy3yy9KVlubH' );
define( 'NONCE_KEY',        '!?ne2MX~_^6=fk?J^:cL<5A$H(KDhSW|%7;RAHrzI@+GZM-8tsBb4*Rdskjgsav8' );
define( 'AUTH_SALT',        '}Yh%qK^-Iw[3H&pLv Ghg0s9f07!n2b)$gn#?=,tc.ygC.u=P]0xVX}bFdcu>mx^' );
define( 'SECURE_AUTH_SALT', 'oM5wci*38)K=CW)VQ9CAi7rLb41~i!uK 65eTWX.-%64Xg>Z{dGF`R_$I{x]]0gh' );
define( 'LOGGED_IN_SALT',   'kj0yp(1n $D.na=E3vB8x{O^Dl6;m;.NoROiP[HZ9em(NrUIY6fkP}3<Ta@EeXAA' );
define( 'NONCE_SALT',       'fU#q0O/h8zkOo_QWSf!Tr%f3B-#N1d=~X_.w.-y`Kd]3$5c<_Q%q<P W*.G`=(ur' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
