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
define( 'DB_NAME', 'ranger-wp' );

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
define( 'AUTH_KEY',         '6DIdGwz9jBu2g015ON`oJ[$|&tXZ(N|w 2DHgg%i`_5Py:k|(*5#Pi:~-WSvAuiY' );
define( 'SECURE_AUTH_KEY',  'TL~8 rY#Wv&vQP9#JA,@sj5#cz0xz$E8T<{#sI(wLnXbN0Rmc%f-sALD7V(mR?.|' );
define( 'LOGGED_IN_KEY',    'Lt@p>eo[=]GV^iHJU_ap~d:m~Oq2<kgK*e4S6@QT1pg,~99ZRv.DdP+3dmB3Hxez' );
define( 'NONCE_KEY',        '_}:u*mvy~l3%~kpLl/upPes$_oKWi64q1JoFD=sFF4$CC;go?)PsWfH#cf@T0yFh' );
define( 'AUTH_SALT',        '}c5z>|{S4])gu{]w_rDM<vt95Av<(Z1Y/aRP c&2dEbX>7^s#-S1j30Tt8tB2cR%' );
define( 'SECURE_AUTH_SALT', '{}m,8K79fK$J9yz}MFZMVtmM<JRas(]Uac>0B2?20!f!@O(t})}:{<j &*6r^[RO' );
define( 'LOGGED_IN_SALT',   '6Z$_11*.=Ref`gKJDV|UuAw,%rz[H`V &}]x~UF?Rr|5`<y/9=CWdlm%+)sgF$tU' );
define( 'NONCE_SALT',       'qfl8WpN{`8A?V_jI/!*dc^hkBU(|VL7zPv76%?3YHXtId/T=LX]ZCJ2;G4 RxuaY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rwp_';

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
