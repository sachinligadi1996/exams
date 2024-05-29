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
define( 'DB_NAME', 'insideout' );

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
define( 'AUTH_KEY',         '|!M30R+A}(>x%{,O|5aNPtA~6mKH2$OfF<^cey,+u.EV(Dn{#jeO[J?T>|8r5gKu' );
define( 'SECURE_AUTH_KEY',  'cn4fwpy<c~$3=@o_[F1tZ146l= m6nO8BX$T_k0vDc&B;L]#n1A7-XZ1s0KFPn$Q' );
define( 'LOGGED_IN_KEY',    'l4UK);kfJ}mQPkwYAUc9uYW]1jJ62{WuFu5E~m+6Bl`Q2Y{gLohM1Dmq*yj>/);6' );
define( 'NONCE_KEY',        '&B~o`Indscy,9IRhzH1 b[7=bw@r46dphfpLTX=y~h}H#,hL];#(Io1ZsEKZ,7]r' );
define( 'AUTH_SALT',        '&34OVMmR;Nb`Cz{6jwZ`?^(uoU<!4-O.uCxpGP]-_]L> gU@sw$wzOo4O<K,.U9;' );
define( 'SECURE_AUTH_SALT', '!^TpHJJZ-!05*PVy!<@w+0o6<VU({k,[{;ZMB,nO5ynF43`H#N/2_o|2&]>u/Mc}' );
define( 'LOGGED_IN_SALT',   '?m:m<CkWpXj65V||vW|g*MOPciB5[~6/tXkx ORWS8a[`qGFk-%+E&&=w9Q%54IR' );
define( 'NONCE_SALT',       'ZqNI-?0k$OJR}|h)NixbLZboy=`|OZ[_/[8i7WR]]o5a/-BE(9_~xY{(c6jhVCb[' );

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
