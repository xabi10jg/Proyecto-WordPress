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
define( 'DB_NAME', 'ProyectoFCT' );

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
define( 'AUTH_KEY',         '~J (bXHW<>uI|~gt0x}lm8I#Tv*@C,)APfdvh!_G`6hd=zI_pAZs-iTt?F7+]>($' );
define( 'SECURE_AUTH_KEY',  '3M]B%xuLV&{I_3cE 6ZV_n$js:_c9R=)<A gcy%Dp!tR3)^iNq{]vqFT_#[Xx^-A' );
define( 'LOGGED_IN_KEY',    'V|Oh8Rl#w*wv^=7=!EWq4WZTgBf+O~Bpf_gbT6CT.qXO6uPHV,1Z2DP]=H*)t)xs' );
define( 'NONCE_KEY',        'UY9^17}R.Z  =n0&`X3RG6(DHI4((5nQ$g<M]Y`iHHj|~*A-pK_Eq;Txb27G#DZC' );
define( 'AUTH_SALT',        'e{+]ej+|kSu19N;o>YT/#GEs+HhPTq)+>^vBpwDLM0C_-sKl~QMJZ/@NFi`c6YDf' );
define( 'SECURE_AUTH_SALT', '@-?su.P&RSr}L[DR^6Nxw4,0TJX$.~*1~(1KP[#AYvDSK|vO/]-/l<WSp[T;A3uC' );
define( 'LOGGED_IN_SALT',   'j^`[*@Y4ptDYFY2(G5*~L((BAI}]_(}dC2|1wn(JpA>@Wd`3`Zk,Dl5Q:N,icRwo' );
define( 'NONCE_SALT',       'j*[,c=AI)ILbm~A$}8-#Sg1@k/yo^3Z|=7pSk5_HNT)/oZ<S&>~0O3*OAKlW!4+X' );

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
