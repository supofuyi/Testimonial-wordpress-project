<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testimonial' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'aO1xY[!o*yhTJ}^QfPXG@[]siI5.yOWQVN8.#{qW_fw@_BA~(cv]2)NosQB8{0nO' );
define( 'SECURE_AUTH_KEY',  '^Dfe0-_SQ&Oc`g.=gLiB7}H;&Mt/F)&:}c.D%^{#i.=GVUJAOhViTG1pTW9*c@%D' );
define( 'LOGGED_IN_KEY',    '!DeBO~]QQn9XTu|;@,&QuP_|OT^aYT{f^#h]h!&!jAc`l=DFsKM()RCC>T<1G`,p' );
define( 'NONCE_KEY',        '?LcgwW(1HAz3;F0~v|IX%%L0m.65a$[?zntqjnr?4Iw[KvD@dbHYL@n8o<95,B%-' );
define( 'AUTH_SALT',        '%L_JGxHW_X3,woYd/;SH/K/S&yT*gT,JiF03l&^jZc)#Z))eXxbO2T0)nNV1lcoH' );
define( 'SECURE_AUTH_SALT', '#{hjw[jy-Xr)oO<v>^KeP{~fqY62}_$V_Hk|5KqrB+whYQdJgz-L<DaHL;lh<*a&' );
define( 'LOGGED_IN_SALT',   '{D8/V*7g~NtDQH7~MYJCNBRhQ*_=B#)pm!ct>A4p),muz 9,]Scut9j@<}i_GYK6' );
define( 'NONCE_SALT',       'n<2e7/5tEHFBw>p13w4+}okeWd@rt6X7OEsFb3Xh}:jlCUGk6Fz*_IEy6#7{/xvn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
