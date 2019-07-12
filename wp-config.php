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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D@LlV]Ygh}K|KseTpvF}<04q>PKX;h3^-h6%a1QH/vhPf?/nTWK$q[#J/${#>np+');
define('SECURE_AUTH_KEY',  '1hmOoCDCISZd$^1?Xwjg)Z$Bod%,uyT}[,ATx(`@qOo W1-bO0:xoHHssCM?r{]%');
define('LOGGED_IN_KEY',    'PuO:l@:UJ;5_#U##9j;%Ld.v}D{D&/IOWN$9~h,)HKN83NJ$MY[T#rmK8N( m-7B');
define('NONCE_KEY',        '8`fx*>]#1OCQ{(!5jU^Kyx&nYzQZJJmqxW_#02[:G=;Ek*g*uZ 22Q@R{wh7/AQG');
define('AUTH_SALT',        'g$(U-?Ig;_5g@fmoF5 tW37.aqmvNMI1&&[-=PmB,D%)lrJ08O<a)~[D2hfLQCnu');
define('SECURE_AUTH_SALT', 'qK&ncK2U{)KS~/XIp6H0_1lU0/hUhqA0)BZBh6E91-|1k[pluvjGX62qkGHxn|@M');
define('LOGGED_IN_SALT',   'DN*tRRi7yVb:uycxkfnf!psn_:$ww;ev7:|/]XPeh%tjep/My8}+<M,O3A{H#1U^');
define('NONCE_SALT',       '+|zT#3O?D$;_~R|~G#%2X`(5?cB/6XG&I=V1~Oa~UZa)=Jwl>G&3Hh~X&0eh[N!,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpprofessionalecommerce_';

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
