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
define( 'DB_NAME', 'ironchef_wp276' );

/** MySQL database username */
define( 'DB_USER', 'ironchef_wp276' );

/** MySQL database password */
define( 'DB_PASSWORD', '8!a3SQS(7p' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'xwjhx7ebcqc5xrh3of23ybq5ptdaaivpyfmqye1eks5bfduyxovrpsd90p90ntbr' );
define( 'SECURE_AUTH_KEY',  'nhabqe9p3h12dvg6ziexami3v0iyenl89bojgbvwpl22vyuusl0uimfy4qwp6pdt' );
define( 'LOGGED_IN_KEY',    'mewda2pl1n3ejytjf0znbwinxjyhhys7nvgotkve30ceslckcpusibleey898zq2' );
define( 'NONCE_KEY',        '5kizry7sfqrfwt9jhysqthhzxnakvnwrqbsfcnnl2bovgqgjra7myrlcwsmltaeu' );
define( 'AUTH_SALT',        '5qmb44xg79hudw6qsayqn0azg9ueuqzacwtc9jzhus4djgrqmhadessjeoal3mpb' );
define( 'SECURE_AUTH_SALT', 'rf5m0hofqz6mxakouyzpsgutafvlfwuga5c2h9fwub9vnuvjer5z8oimmtqqj9ud' );
define( 'LOGGED_IN_SALT',   'zh4ype47csnaqpasjscpns8ytetl3ebyhg5vm3tan6viyhkdfkz60g4g8tkn9w5n' );
define( 'NONCE_SALT',       'mgqinwoup8er9h4d1o0gi6a0jrz8seqta391u9sshdb8hbvmmndmnzuudl6daoud' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxn_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
