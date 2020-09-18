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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@4PK.9B|:;kS52$a9lYYPsnCa:@JhP/3XiA8~zLKw)Ep?h;R7*c:;G/6)TeWP..8' );
define( 'SECURE_AUTH_KEY',  'R|4!`=s:MiLI;DBdR$l1U$wakr1H(%-+BzBbq&9(6>x2.jJ*A3MWtY|jXwF&{O;9' );
define( 'LOGGED_IN_KEY',    't)N tp[3f*3kHw{;w9sfn^ Iu-4Ut#VSFk!GkM#0?88w9v-[+5s:FP-W@9Fc0X8Y' );
define( 'NONCE_KEY',        'hkmC+}Lz`2v67/w8=X5Y?=Z 4+G=aVa0_F)E_Q;Q,E(YsdUf|Rk3vMb<K*eLWUw1' );
define( 'AUTH_SALT',        'l!EMt_U2Ype_OUdO^Z0V^B@.y1Uu,wU]32sShr583v<>5+vf3g2lAL?hB~W}!62:' );
define( 'SECURE_AUTH_SALT', 'jQm(%$X)tb30McvZ?UZl80z`3R:xhDe[pmXdcc6a|Q9,yaJJ+H|$!<74Y`)SN0[6' );
define( 'LOGGED_IN_SALT',   'Fd~~Vk>gQQfWSV<*5;%_&ok)PUicuWo$Lw?1W=Y+%)Qx#:a3:?Qv^v*c7^Th56Al' );
define( 'NONCE_SALT',       '.b,~gSZr.8Z`bx!D)@LipPe-u^wCabG8b-:Uigz<Td@8`l@v/p#XGh5kUCfyrKZo' );

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
