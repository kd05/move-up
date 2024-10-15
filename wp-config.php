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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moveup' );

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
define( 'AUTH_KEY',         'b<w+;@UtCu9X6/4U{.[tELO(3|Q^)i9i;kpZuQcZMukhcSAPR[QaiVXMJDyRRF4.' );
define( 'SECURE_AUTH_KEY',  'TpCv-Kli1tP3_~5iR7HT_7jZ8`Y=6H>rp.y4^dK.:ma*CQp{l7o[IgU{TwY.ris~' );
define( 'LOGGED_IN_KEY',    'j:$nGLbqKcf$vg[?zW+5U6<Z/e%=!u4KTGf@x9J}a9%TJX@qrybH%^0%bk<#@?Xz' );
define( 'NONCE_KEY',        ':^pY_Vt7-3Qjr|<+3Se9X+gVr(G5JH9qI^JO(T~6yiN-*gOq184O ;JTv;:<$D;]' );
define( 'AUTH_SALT',        'R@.FWK<;Bw,+/c;4k?/Ft[zR9DAlOMzkdnmH4;zhm/9bqw_9;OfQk/!%:$Q.A^<P' );
define( 'SECURE_AUTH_SALT', 'huDj#h:l3RwCN/%aShZ`=hd=VwHv pKR_>%t8NJ(R6>0@S,ocA?4t~fMTzF~Esiz' );
define( 'LOGGED_IN_SALT',   'v}AW9Ufq)|Sa_d`=X9al_>r@4q-n0&!ScBuR{mTC~5CG3TH8:Q>nJiP?x>JTyHC$' );
define( 'NONCE_SALT',       '3kdb:q&Z)Vy`q#TdD1qkaf/`<uJEzFl?bJ-/HodPLOi>?2Y|p:XM*[O7 ZglcF@`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
