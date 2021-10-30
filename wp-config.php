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
define( 'DB_NAME', 'final-project_db' );

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
define( 'AUTH_KEY',         'eP=-<du7D>#U:S9Jnayj1W{<]|i6sod$_M+=7jl3Qpv^KD2,<3n+gQm&s72d(ayk' );
define( 'SECURE_AUTH_KEY',  '_r_7U(q]gqucb_M&1d=>p f)DFRxE24 3vh?GZDf&7$RD1GKRjhz.s8SQx~!FU,n' );
define( 'LOGGED_IN_KEY',    'ybd~I@$1ZL#i]Y@Wgi&YEm60K%919Dd,qx^2}hoF2L{DPSJT#A_~TR[0UX.Wm%{u' );
define( 'NONCE_KEY',        'A<_DcW~g~#M`jKJ`Pv@EmhlIEgpcN_}/|!gO|c:s,/&57[!=z407eX`=tms#Pt_i' );
define( 'AUTH_SALT',        'en|*)<9}q:?s{HK^}X`U]O+(xY>b8?;c:j(lJ0ena]-5n oVt%lZUGp~S1hULuHf' );
define( 'SECURE_AUTH_SALT', '6h#(h;%dDu>.z;mGjw#n)uJJ%/qj<zEa86UPm~PM?oKA4Iz6TzN@~.F]SP2u9nii' );
define( 'LOGGED_IN_SALT',   'qT<!`s {#:?N=t:6M}w;>x5Ahtsu0,utkG@2 9|cH@#%Q7r?[WhjYeVa-7MEh@O[' );
define( 'NONCE_SALT',       'oQ-0GdAR>.738;(v*u-m@7*RXuv#-uzy2n0^p5ew]8,|Eby>j(ZJ -Ey0w:shpoa' );

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
