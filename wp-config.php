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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('SCRIPT_DEBUG', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2[*Ippm*#wzHy0i$Joow<,7g-}Yjg]#;^:Ty$/]MR&o>XcW!#$^[m^tPNWNRVyu+' );
define( 'SECURE_AUTH_KEY',  'vs?D+OKO7T4nt}Ky[eduh l}U[5Sn0vg?!R=pn@{^ce-n_o~Bp^fottf26-$TEp;' );
define( 'LOGGED_IN_KEY',    'wK]A!J4.@(_+QS>YbEh#QRY;m0umX]7Xt4`s&AwM3lMZN&=jO.t@hwjMJ~@{dGYF' );
define( 'NONCE_KEY',        'pX)N3}X)tupSS|nZot7@*/9t;]EnIdpds!KWWYVTSR(v4-Ske{dP3mg{px-Cy7k%' );
define( 'AUTH_SALT',        '6CNVs?8ECl~}bU_o!SRuA^UE7}-9oW5U.Y> 4U`8Hj,t1pJv^on]%R%zYMlN5Q|{' );
define( 'SECURE_AUTH_SALT', 'Y#C kDc$t)H@rR lTM%~c&@pQ?hA6![[cG580Og#Z=t:X4kdjDAfT^thBg`0,p97' );
define( 'LOGGED_IN_SALT',   ']-~[5Wu[4zD{q|R5{wwR<+kbF<Yais]1W*{k[bKMt;osV6BpUUZYIMkG5f8I%3]&' );
define( 'NONCE_SALT',       '39)tI2Bd[@r/!?+[1PThb,cl5^i:%CofUVt/SzinWV:8c>Hwiu9E?Afd%$!OnRf;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
