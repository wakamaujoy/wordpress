<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ':&uSO-.tvzC|7_7C6-Gp*sKZ[J0~ q3QDM~/D*I^o>|l8?/V.%@}|(42(wY5dU6f' );
define( 'SECURE_AUTH_KEY',   '4B]%qZaC|i&HQh>[v1Mp4E@Z>Qq%Ht KV_P|[/:bxM8pPr}Er?5skTVxP$q%6#OG' );
define( 'LOGGED_IN_KEY',     'yiZUWxiXv_%Nk8MIqi{_oL7qF_gBu;5xiT8GhYmLt).voR`Jaw?.]uuc+)dADWAn' );
define( 'NONCE_KEY',         '6wUd[F(j8 =woIdvfe@SH:8!`x,4tuh?#fq:.BpU}/j<s?7i._geb(|PK+ZP]D$j' );
define( 'AUTH_SALT',         '|o=Q$=_LCH?3b!$clEEdt|7T)ZY_B]<8i^9WH0D?W8 OeC:3/%{tzK<k<`h(Q<gM' );
define( 'SECURE_AUTH_SALT',  'EmY}iETbxqM84%#sKxG9E*1SwiSmAU(7U+a=$v0HQU{YmF.ifyXh$Evqbe}Ng0KV' );
define( 'LOGGED_IN_SALT',    '-*.^zk%YP2dK=xRO?DE*;d~>#H Q#<vcNE8NIutuE#M}9nN{g;@J`iC8/hEG@F`1' );
define( 'NONCE_SALT',        ':uRC-K&j#ab4-ip6L/sXfbGS0Hm(.o)rwt(pxo4}l~<ogg~8x;f/HwQU03h_:{a@' );
define( 'WP_CACHE_KEY_SALT', '/_h%b^<uzp;j_-[<vu-XT(tXE`p;nkTq}aaa,bp5%v;i8I i:c<?,1e{:L6TH-LE' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
