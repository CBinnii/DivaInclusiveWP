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
define( 'DB_NAME', 'divainclusive' );

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
define( 'AUTH_KEY',         'Y_=!yxG6vBp8I/i1Kbnw<[h{b0}27%z#O2F{hLPS?lX|qb9;z]vY<yD3o<Zzs6wa' );
define( 'SECURE_AUTH_KEY',  ',<mrVI1_p)HG[1i9w%_U~CBTHaHu)9s.;.TRbHn8 4:vi UO,9SGqT?:!Byh`K-]' );
define( 'LOGGED_IN_KEY',    ';n8@OJ8=O}--Z@sV1I%.^;G#Tf &E3v}E7Vc<^1_OeX)%0b|dS6-&8ZNz$SRzVej' );
define( 'NONCE_KEY',        'E71@f1Y_G]aKWW**xQ5=Rq@Or2m|ee/(P%SN%=AoaeUZzk#pT!vU1,b%sVs^4k]~' );
define( 'AUTH_SALT',        'H&|j1M:mOGJ!YQ~KQo>/zR|#5kq$e]{ Fv#/ =<[v{+Qm0j.b{=<KY<f(II;bTcD' );
define( 'SECURE_AUTH_SALT', '24:wh8;AONz^J*sNE.@Dbrv|S)iYC0CS;[I(kji_J3H?(-99,.?Z5AEflv~.a)ta' );
define( 'LOGGED_IN_SALT',   'R+k7g|nBt+h(gcUvxuzSas} VQ-gr$$b}cB4L)%.&_P|9.Nl;edPrlC>Umak|q|0' );
define( 'NONCE_SALT',       'iVZA2(R+nCSqhLrq@R^biBSB~z7Y60[e;Ng*t-A/->(JJIJ(lJodlgp(#j>X#bKH' );

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
