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
define( 'DB_NAME', 'if0_36655093_wp887' );

/** Database username */
define( 'DB_USER', '36655093_3' );

/** Database password */
define( 'DB_PASSWORD', '3k6[p5B]8S' );

/** Database hostname */
define( 'DB_HOST', 'sql109.byetcluster.com' );

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
define( 'AUTH_KEY',         's06xutzmnrfx5lmza9vi6j7xiohympyag7r3uz3gco7lhll7dcozij8tyoqc1kl5' );
define( 'SECURE_AUTH_KEY',  'ygqeofyoqnoh0y84qcfyfusdsr6mwcezied27xjypnjxlwnt8fgh9m67art4coli' );
define( 'LOGGED_IN_KEY',    'cpyhzrreiwrx0j6jvjd1lrdfn5bny4afzwcs3xmcfppuwqt2myba7gmyaehlhqbn' );
define( 'NONCE_KEY',        'utomk9r5d3bphimhsegccko8khurznc72r79ztfpnfulcsebawqipyb3gbvzzacy' );
define( 'AUTH_SALT',        'kl9tt4ekjwqqjgla24e1jwlv7m637wnyvb4pzzxre6jmgqvrhiohyo2wfnlj61dz' );
define( 'SECURE_AUTH_SALT', 'f5eirvhrrn4hiqitdthteobigz54l9cmmueuccozxmnde7yag5nrf6tc4dyrpq2m' );
define( 'LOGGED_IN_SALT',   'sdvj9obeaif7mja7nddrmrzfzmcrxtq3mst23jinx5wgux5ho7hbxwysjyrpcjxd' );
define( 'NONCE_SALT',       'thuvrwzjwlyiqpk4cpsgchxjxqy9ijuaoqavjpgolzkeldnpfvhiultl6nadrqwi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqq_';

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
