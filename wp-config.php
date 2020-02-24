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
define( 'DB_NAME', 'maliseuse' );

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
define( 'AUTH_KEY',         '%-t5_I?vo%wNzW.;|TlHap6#Xirx fjB8mY)(uBbP8_rOMwxfnae}:5IQxz>I:Z6' );
define( 'SECURE_AUTH_KEY',  'Z;W^[R;fh{JaXwz5[?_9Gj=6kQZ`[Ce+X9,.|QfBNzAFg`96o`=&y(nP{}YUHd,c' );
define( 'LOGGED_IN_KEY',    '!i+vD##hgsK3y?F4kw|2T$zjT)n7-`X]A1yu6B#AxMqo}yEh &2(WNsJS[$/MulQ' );
define( 'NONCE_KEY',        'G/NqM--flxlnWvo] 6uBr_>;6}uz{*cc#5lT$|]?megDRg@zRez/W%:E%ujCm8Sh' );
define( 'AUTH_SALT',        'zP)Ndk1wC4D1P^%y7F@dL3RV Qk.,-rezQ6I12t=LVya?_Vf5+(SH;|A4$o,)vHi' );
define( 'SECURE_AUTH_SALT', 'OxRNuZC>&FyEpu+[g@;A%y_g<9utT5t#!5#&#wIPUNx^_vNRTCpi=&&Ed;G*IV2c' );
define( 'LOGGED_IN_SALT',   'Qs)IBVXka<ft^N-GSuUYo)JQN_UF4C!XM^nt8cI:_{G!6f%X!L|Svjbnnv_Vi[{m' );
define( 'NONCE_SALT',       '0@yLxbP^6@sJ^|KQ0A:kix.jy.F0=#<=`^N!U`B=Z}U-aR+}0vFEJZ>hhkO+8&*S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th_';

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
