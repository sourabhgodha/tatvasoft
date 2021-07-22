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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'g|.j-*h<vTI0IDF|J}Gh*/Jlxl:qV]D(;fr|Z)_&ky;b,f%wYBH2}NfzA|[vCI-<' );
define( 'SECURE_AUTH_KEY',  '8n] gsce`e:5:D;IMW88%>Ap=crNJMeQ,Fna)w^0u~~+)c246eQ&`<C7ne}Cln#Y' );
define( 'LOGGED_IN_KEY',    'ewWh)f!5-a+p]Wj.EKMXQ K:8L?k1tlKG4/q!IK/pqQNhx` 6wJP|=J?c#(3_{Jb' );
define( 'NONCE_KEY',        'UB98nSAp2w@D]NX!WFifsH6Ya(vr<Xw+r$~kf^$`%cQ8FX]p~Xe%a2e,W8>4yfQL' );
define( 'AUTH_SALT',        ' pi*SgMJGN>S#m2I+A&3}2U/AP&hNcl908%Lmv%}vr*-A,i;VHj FF@96Fi{>?%n' );
define( 'SECURE_AUTH_SALT', '??rioT,Ohv.}g<4Gg|6h;9oQik]&)a,4A:#}7CYGg0}=Vi;ejq:?5MuSD,!Ofb*;' );
define( 'LOGGED_IN_SALT',   'da8w]P[Vf}PN+IOhHMx.?n[#p=:LXj,>f!VRe=OU/u70?9%8yblj{&LbO^HTav82' );
define( 'NONCE_SALT',       ')dj qx?a;D~#wdd@w!6yazK=oRoWC9B0gYFNvj?+ROr;WMZ]u~r<hOJRm_B&!b$9' );

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
