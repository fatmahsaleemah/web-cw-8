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
define( 'DB_NAME', 'cw' );

/** MySQL database username */
define( 'DB_USER', 'fatmah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'o2LxDDIy3UHqSUFE' );

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
define( 'AUTH_KEY',         'Fcbw39A$:1@g|`bAAZ<B%d:_5f?~R6.n>BtDQP`<4^o]]US^au]}GULbBo@yY]3G' );
define( 'SECURE_AUTH_KEY',  's6W_4LjC2A,A?FpJrLTi;.n(d2_2T[Q$k>ONIFMzqvq2!IcL&qnF EqZXD?GJ7I4' );
define( 'LOGGED_IN_KEY',    '.z44o[-D&RMb~^~e2:;5!NM@L$=i;Co+(He+OT 2l8QbJLZE_s=fw^g<@$#Hyc:n' );
define( 'NONCE_KEY',        'H!}C}QA-eG-i8B/*l$.f9MmX %ARf/Lw,G(qu+DN`:|a@=,jhqV2dEPYXxB%41Z}' );
define( 'AUTH_SALT',        '*$C2 >jCR5*)Gj .7QV!>;z|z) 4K@pPRBR2k2*i _K#}(uZ_wAs>HXlrX1Wp6mr' );
define( 'SECURE_AUTH_SALT', 'd_(tgw_C*_2*?[9k%8R6lg.<K[Bi/M&OI)!=Bug,bOnN;i+=#sE=B$YEK)dJSdJ*' );
define( 'LOGGED_IN_SALT',   '`;RWc^zEO92!DeH=]fhI3=/ONa`fcYL#R$qi^4: u0Tsn%ox}E+ S6gi?UI0(ywA' );
define( 'NONCE_SALT',       'x;d9<iV%ws2]XGvfn6D{!!jBV1@Tz_?? B4&)&Xee_$PxOZ}O:~reFSQ`d2,Bm)-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wc_';

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
