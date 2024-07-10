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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/fuzzyloj/finneas.fuzzylojic.com/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'fuzzyloj_finneas' );

/** MySQL database username */
define( 'DB_USER', 'fuzzyloj_finneas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rp9&FoIt5pdial2s' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-10;G2T@Y50o[QJ%tDoteJ+SdEuuirkeI5JnJvR[O)szfpX|50v2GP;Cjkh2;DUF');
define('SECURE_AUTH_KEY', ')762wv(;NY@N:2Iy3h7R%qD78KJw1cRVZ4n#Jz:*6h&07iG(:XWYY2:;e|_G7658');
define('LOGGED_IN_KEY', 'L(jMG@O*1_419_L(#2)*4nLS+Nh-P/7145VwQi|@@)n107L#Hi61DT78j6-zxa@P');
define('NONCE_KEY', 'f_a5;nycx&9D#5eq7Lmv7j8yQ;5u&h:neSCS4fQ;l9jOZ[UU37!PSf0~Ig]N+HHs');
define('AUTH_SALT', '@M6yM631IsqBLp8R4|(&q810g[z[SS9fvZLB]:l4DL(!-60V3|;2ZNt274*5K**f');
define('SECURE_AUTH_SALT', 'R4G6eX%l317_B0i/pm761#/_7[+1566yytHHf2~tM:xFb*hdd6c38iT&0|5x@!9S');
define('LOGGED_IN_SALT', '_N;p0p7:1~WCa4EB@F0|AeKI*X-@C6Eh9:x7Y3F783U3myqK&nj5DM2z_k01K%56');
define('NONCE_SALT', ';a40PyEUsSL+i6-JPP9FSy35i(AV(p3]fEM@p)#0tJNpewt6v3Nc!7w01k(TjA7%');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'finneas';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
