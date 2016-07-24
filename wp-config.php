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
define('DB_NAME', 'tms_ecom_db');

/** MySQL database username */
define('DB_USER', 'tms_ecom_user');

/** MySQL database password */
define('DB_PASSWORD', 'zhGxmLNyhFsm8F5q');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u!zT/$uA6T[(c>wbatq;0mIgw6a.z`=?>s|`xjC5(%<g_ ^?1)EU+s.?g=;OR5C%');
define('SECURE_AUTH_KEY',  '#ZalY!Hp6`IFDTDF50~ bgCm>#-mb(~#txP,@{1ZF)6I->a KGs4|kFMV`0}I%Nz');
define('LOGGED_IN_KEY',    'd_I-%*:z}o<6]h9mUY^T~1EKK5$qQD0{bZ@ a[=HQq66+<KDPnBzPf0J>C4x%Pt>');
define('NONCE_KEY',        'q@+x@CJ*qZ6<70}aiQ3-HWl|fqpj6=|.fPxK-a/mWll[40sGHJ,)!{No8R8|%*N]');
define('AUTH_SALT',        '%!Rh)R&$bKgdw%9M|l_:Gui-5]vhpLPzbQ/3.!L]xG^Je8[.tvx2i:)HkV3Fz+Ns');
define('SECURE_AUTH_SALT', 'qMw57A5(@E6U3Yw1n:!6+k[.:`W]=H+.`@:5kuH&.<idKn/XKolM;T!tp(@-1$ku');
define('LOGGED_IN_SALT',   '4m!m{`DZ/&-<~/I27N%CO6g.-`kE:a6#|jFWt?dg$fh?R0m2;B>jo-Z|3_$TjIAr');
define('NONCE_SALT',       '}MMm=+vFJtSjl1,8[A{f]KhV,%M[lc0hReA|#,om~5-@E>Ce2TJUFjyI+&i+zlLx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
