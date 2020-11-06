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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '@]:,e,wW 4j[A. )2_$2BB}>RTObWtdU~!yE{33450j$Q^qnltUg-5;/u?va1Rki' );
define( 'SECURE_AUTH_KEY',  '(c=N~qhujLsz^1$xH3a0drS7IJz-=LDq4TNKS(4BQ}9UZ6F%t2+~Y9Blr47Z,P&3' );
define( 'LOGGED_IN_KEY',    'Zpj.xlYtKyY.Q[Kk&[nCGRrjh!89b~:)`/qX!(,2Y(lxaXdFuBp:NHAK5&3|`2t.' );
define( 'NONCE_KEY',        '2xFF^4klccF-|Q%!)T=gJ)1/DX5>Y4m%~nVrvpWBe7Nt]+H{@m43kmXOue/m?wdp' );
define( 'AUTH_SALT',        '`Q]d}OU VJ%j5`.(3hVv^Qw)^xm&rvfx8dbgyu6p1UxR0$F:=/$!?4U:5/:4A.ec' );
define( 'SECURE_AUTH_SALT', 'd+$h@Im?/?Y@^:u <-(`;2a*Ec2{i{X_0[8BH,;wTl7Ieg4V3Dc}_MY4 ky *}{!' );
define( 'LOGGED_IN_SALT',   '#iPVw2G&?ZTj6<R3`#!;[~7Nsjx}yz(FYwzMr:HBA63T1a49Vp9+5jxtAU@l@0eW' );
define( 'NONCE_SALT',       '={X0I>D!1Sm9`=)nX&k7LirZ$)NVeIrL3AHhD+!2TLAuP29+V^a^Vlln7EcbR$n!' );

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
