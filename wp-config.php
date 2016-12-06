<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rentriocopacab');

/** MySQL database username */
define('DB_USER', 'rentriocopacab');

/** MySQL database password */
define('DB_PASSWORD', 'yiho7169');

/** MySQL hostname */
define('DB_HOST', '186.202.152.242');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']@L[RCya_TVgQS?-9bC-  9 i5; :?=M*-4}Y(nD1[Tthi<>u?}3=eDv)WE=nPq|');
define('SECURE_AUTH_KEY',  'e*@gm]4{x(Ukb-+9>;&Mx$n#PvJ~ygO8nK}.%x2)4fMJav90@EP/v|`hS<LGwBVn');
define('LOGGED_IN_KEY',    '<M#mzd6]vA*+3o3)5K|Vp?|ZH:Xk7OXD|IVGFC2O?VZ;Q53<<*esap8Pj*@b>,km');
define('NONCE_KEY',        'EiZAoY)=Qzo@rX77`i;Z$`>RD%0VNzK`6XVV9>|l`@=!8Jvd;gqehN8ccZ6oQpXP');
define('AUTH_SALT',        'AMs*~aeSE6Q#H`!0G`YX?#tGPk*xKu+F~U~V1%E3W6+i4ZUdO]nzV1#!B?VrK}|;');
define('SECURE_AUTH_SALT', '7-cX<CAjW@ISztW]oNqWjtyBQWq-h5-e7AMo1R6Nd3b:O+qB_u#cQ1h@3Pp1j-$4');
define('LOGGED_IN_SALT',   '|fu$;a3HW~NU-Q4kuA$5lYtCi2OljA)[j(8-^?e4t1rcWl{(|bePv>0AnIUAn//V');
define('NONCE_SALT',       '69wPAbKW5,fF.bGZd7Xi*`eokDa%uz9!a(<!ZH`,zF99|oGux|4+t:sRokvS&}`M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
//require_once(ABSPATH . 'wp-settings.php');
