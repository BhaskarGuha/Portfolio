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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'ZkgEei03]A3,jykUy&W(YRDuwr?I+tp;}.;mySw[kFRY4@iF:^96H+_7$S4k6gjB' );
define( 'SECURE_AUTH_KEY',  'ireNYEsoO(fwp:(6PaAy&oH6CML7-28sDF}|jLL)f#:J~hMdsg{nI+fRJ-,iKTRf' );
define( 'LOGGED_IN_KEY',    'OKuR@e1mh/xs<h;FovuD)_Iz6+&S$sZ^TXXEt0$Mu7]8rQEwMi*[T?(_~K5f3j:|' );
define( 'NONCE_KEY',        '?Pl=vzrRxLuTRW+KUCjPsKCjvTr$<?ZSl{-8aXfrP^sS9|Zaq,d/?g9+)Qy=&TfN' );
define( 'AUTH_SALT',        ';^dW#cF+LuswQ*Rws*w3+K93{XXuu|sVnHfG[SEUiwEy-t^fRg)WsaJEYAd`NF8q' );
define( 'SECURE_AUTH_SALT', '3I_^<.C)g}AEqcRR2hV|5U_!Vv*}`j#RW(T@]BkyE,G^dAi[fKlvFVg{.DEaL|/m' );
define( 'LOGGED_IN_SALT',   'BgnPg/<C$23eWgI2D*znFi4Yc+]Li.k9)C=3HMg^CqWVL<.|9ZeS_k$DxY6{|$R;' );
define( 'NONCE_SALT',       '%>9jIY>ieMw]JWUt421-}B1@eMYxZ1BS<$v5 d6t[vW(FWbq^FDQvfzo`c/tCN:s' );

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
