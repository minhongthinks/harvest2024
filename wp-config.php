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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lavishsi_wp416' );

/** Database username */
define( 'DB_USER', 'lavishsi_wp416' );

/** Database password */
define( 'DB_PASSWORD', '7R2Sp[@y6a' );

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
define( 'AUTH_KEY',         'jwfevmmoecbqvyq3fxbfso8gpbwla6o2xyrkrqryhhydyjahzfszdowbngjuky5n' );
define( 'SECURE_AUTH_KEY',  'h4hzm4bzisxwr8nkogigesmv3iq559pf5kogsywazv8ayazkwk4sapsmquwdjw2k' );
define( 'LOGGED_IN_KEY',    '14oo1gfuxy57jvmykffplzaq1qvyg9pvrspf2fozfig56abrbjggr9isl0r4hmux' );
define( 'NONCE_KEY',        'uq3bsd94vhv9x0eepvngs611mmlf89owmcj2axdgp1qmu0yqnfntjlcwanj7ml01' );
define( 'AUTH_SALT',        'spoqn8gchqgnifr1e0bw4m1lgi145ihdp7g897fnc54qxovwhmfglivtut4xjp1t' );
define( 'SECURE_AUTH_SALT', 'abel4dyvlfwiiebgclzwjwqabotcfmmvflyzgebrtzhhk4vlqdbbut3wixh61chl' );
define( 'LOGGED_IN_SALT',   '2eqa2ptuqv8ysyyo2osga3k9pn7odcbbktep9y3a23dwah5fordzdr1gly9esf7e' );
define( 'NONCE_SALT',       '4i3p80rus5fbupu3vrln0tzqgsn0iid3l8hmxrbstqq5dck5y7ma5fgwzsgjbdwm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpl7_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
