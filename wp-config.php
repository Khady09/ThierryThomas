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
define( 'DB_NAME', 'mariage' );

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
define( 'AUTH_KEY',         '&}J*((78(YTeEinKu1<pNZb6T}lEgx9M__d&oFy,PEJY<qzOPoc|uN>6yYH+^/rn' );
define( 'SECURE_AUTH_KEY',  '/loF;rFo}kWgqc*1%HKIC9oOp%W,i.*Xu!E ;-w*Rk,Gb)A;45j/{KG]ye,_Z=(.' );
define( 'LOGGED_IN_KEY',    'E(dyHLM>]~ GG4W&Sf29!u|f]whe}nEZzpG.opW@Yqa95(h/%2D-vFp;u;v/S.V4' );
define( 'NONCE_KEY',        'D$Wk]Wn>kRI% xJ|oQo9)i)]V=.OLcRqk7v+CMbk=df1cnb,YSW)DUz{*eI)&=r ' );
define( 'AUTH_SALT',        'Q-#s`X|ry|_jvaP|$}] lj9{qT xYu@O}+Kh{V$xb#_:R=R,1sIybMyRP{H`3XN?' );
define( 'SECURE_AUTH_SALT', 'I}^ppSkF 6~LPKva,J7cc=H|8mnIPnTH LovR-}t(IPBM%7jXeSiiiUU)4g?7#r_' );
define( 'LOGGED_IN_SALT',   '<LF>G <32!-wg(PV:QlvT*lc~`sg%_YZ*}C3/nI.RfA`]#5waa>Xb,lC]/IDocL>' );
define( 'NONCE_SALT',       '}4Am2hmG$ |Ad`a>zzr%TIM.H!|:Em0t*;yFL$@G?k/Tq;VHI4[#=3_]%:a*[1b!' );

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
