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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'atE`te,[ZN@Z kdGNXSY^sB g!UK,j?k)grw04)`Q@-).$(+H&AO}eWdrK+[U*Sr' );
define( 'SECURE_AUTH_KEY',   ',&ydm}-bEygaI$m.$ocbr[#dTx5fgn;/7=6:;i)RJbx1IZ;pig5:*{D;}y97$3Z.' );
define( 'LOGGED_IN_KEY',     '<p?f+KH[ll-!+;Z]XQ{x]^a@~csBYH6Np~Ok/%oE/;(hAu3~^]qUO-AjrW9-Cg+/' );
define( 'NONCE_KEY',         '{X04MQ*n.)(::3+N*JR&S*R2Z=RmTHd4/DR(9Qd~4d@#t+VT`O E38SR+{v&26q:' );
define( 'AUTH_SALT',         'G#QZ3=/d/}+/*k>`l;P|uy]wATSo7c<A=Bh$P[DsYn|RtgzNNI,>ZWseEZr[#mL1' );
define( 'SECURE_AUTH_SALT',  'K5D^f[?sxAXaZ01@9bkg,`$?O,]-%+9)^RKPy.N:]k&7L:MJ6z.#yM&xv9>]Stb)' );
define( 'LOGGED_IN_SALT',    '%g~G}H]lzab4GB^)ruJe}VH`^M8t3&8E6ig9ah3x*3;N3]e|$O/`],kBRe-,H@6P' );
define( 'NONCE_SALT',        'sMvBQ4 J#ke(ekv~OU{zW6>fl65[4a@>VFo`aF|`jDE*RuhHWqbhp6e+huE*oh ]' );
define( 'WP_CACHE_KEY_SALT', 'Py$`LS*%?MGsuu;Cj4:YXmFbX*6NSwo&W%?<q@XkY[zo9<;8!9Vt@moIR&p>pXx!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
