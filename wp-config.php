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
define( 'DB_NAME', 'curso-wp-origamid' );

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
define( 'AUTH_KEY',         'CCw.^/ehwncH5R58u%Z[^qu!p0H^^vuPcSjiZ/,Qz&GT6Fg]q)|YAAA~uwb3Khz|' );
define( 'SECURE_AUTH_KEY',  'qe)=`jOA4,:0r}`R51N@e=M<62kA8!Qh$30fDsa^|@seqFu_J_8]H4GX]a5FZ&#I' );
define( 'LOGGED_IN_KEY',    'J_b{9[KLjAA:x]#g-;wsqe3%u0$[>6n2V<^Y7|>[ZU7ByGo{r!Np}++0[fP}z8RE' );
define( 'NONCE_KEY',        'hcm(V.I]<X(0!tB: 2t~6wC-M8/M[3 `B<vVI9Y0(fj8e`I?$,su[(Xi_|$94!Je' );
define( 'AUTH_SALT',        'IuUORzl@oLevu24zI:jFtJo~mW+3T.aUd.WxCBQHn{IAFk*tn>}f{cnM9+G|AX2 ' );
define( 'SECURE_AUTH_SALT', ':^U|p!zT7(u<Nov-=odzS;N;9?qe==!W-Ro1/tz,P|JA=`cd6@8/{{wx.;|V?8,~' );
define( 'LOGGED_IN_SALT',   '|_NfS88$qt_<xdjJmy/Auq%A{DSn=_$m:|Z;#nQ1_[wUyP=J/$M+2{H{>)SuP4Gd' );
define( 'NONCE_SALT',       'uR6$K3>a*q?t))h/sT.}fW]N]}!-;L-@b+AN*50wxq+wi.o}+KpvTLClo6z5GPd%' );

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
