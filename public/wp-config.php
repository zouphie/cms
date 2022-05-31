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
define( 'DB_NAME', 'db_alex' );

/** MySQL database username */
define( 'DB_USER', 'dbuser_alex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xxxxxx' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '9^$vu8O>J{=8<Z~T:wyF$<lzL<q:pa65}<!5a-hEY8;[bCO*(9ySZj[#]7IUH@$O' );
define( 'SECURE_AUTH_KEY',   'k&5^N|Cz0j[(.R[$v5 0fi#mn`|B4-Tu(mW8zu}9}z*R.0hDm1Wc{ww{! hMY^,[' );
define( 'LOGGED_IN_KEY',     'Is3_a(cwXe:Pd%E1cshxH-H=nOS)/}%KsyZ-wEjisp<WkXGRstbAt%YNB*-|5W(#' );
define( 'NONCE_KEY',         'fn}:zkovCvDVEU`oS:}#u=1.pa*x1K:DdmZ),Zrw O>(6,J!+c^{U(8J2}8)#b9j' );
define( 'AUTH_SALT',         'Z9+;13{tYHE^s%*Hxqm@cACUd5VmhVTgjCWk6F$t`/+Oij].}}7Da~[DR2kL~c9u' );
define( 'SECURE_AUTH_SALT',  ']Oz r,Yd+DXw)h1O3d`!6+Q7T[|`>RkEKvyd{a_ufc_o`O%uKdF3].f>]wg2[BZX' );
define( 'LOGGED_IN_SALT',    '$qHXsKJ8=uzlbwIc~*1qV4%SGR&sPw<TMdQki`qnx+rou xvEqR[GGmZp ]%olY6' );
define( 'NONCE_SALT',        '7S|GB{|%KnDgFb$;epe-id3CQp%WObl8;B(oxvw5QV39:}ME^N$yi5&{n;fHE$p:' );
define( 'WP_CACHE_KEY_SALT', 'x^9M3p+[T?0C(/0vkwqwSXG&&S?ZM6vx*<.iev*qJx[hIgXLGdO4IgX>$j`H3?*-' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
