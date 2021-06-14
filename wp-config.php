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
define( 'DB_NAME', 'psd2css' );

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
define( 'AUTH_KEY',         '4kQ8mULZXb-%/*|4f17a{g9^tlqp#xd(:5n8^D$/e;aZFzQM +*(b^XZ,z`1Vrze' );
define( 'SECURE_AUTH_KEY',  'K}5l|z^n1dKS&}dc-tz6xZsFC<qxJ+CkJ{]lNMkD}zOs_yOS;g,s.*.iN!KQstn+' );
define( 'LOGGED_IN_KEY',    '_{.^+Cnl }-8J$a,>^OH!`iHqcnzjvD^4E/UH]VfE/9 }2K+XBe##_ig+$qQVR`5' );
define( 'NONCE_KEY',        '4[$_TvyWe}#l[>Hy-3)=1 o;f_38sX%b3aDtb%P[.*88fp^[$%*1KZk(v`QOYq+Z' );
define( 'AUTH_SALT',        'Fb%+)96X(59Z1]Kik5u0*o(%|aqa(w#^jB^,jv$mt+C{8~O/8%VBfLq+d~yYG@5:' );
define( 'SECURE_AUTH_SALT', '`Yt19to!PmY^k8!..!kmD9f:E D@C5N4|(VFyvh?UTCA|B-u4UJWL#,Lm2d&qc~Q' );
define( 'LOGGED_IN_SALT',   'pcuvbK[i{UC=X(;5.FN)7l5bgvD[v[7*~3avBR]0AX58OnGdm`%7hA2jW)R1N2{(' );
define( 'NONCE_SALT',       ';@_D72gN~o<T-kUw%*xPN) RiL4V88BCcuM;^`wT=w.((T6.-q4^IRS#inv6BIL+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p2c_';

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
