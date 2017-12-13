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
define('DB_NAME', 'medical');

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
define('AUTH_KEY',         '<AK_^LW6tAcH%zs6^Q9aURik=F79p8sRetw-4tl6;]<-Oc>r(SxtkB`M#d~`rmlP');
define('SECURE_AUTH_KEY',  'so>>xCj0K?pZ9F#rXc+oO0]0yJ,n`]CJc2s%nqSW#}d ymvm(Gq:Zb#>R7=aY=^u');
define('LOGGED_IN_KEY',    'i]t{0qiDU>N4*w@t<s^l9So*KSua_fwm4B!`ih#}=0:8Ii2Y-R?A]*4X)y<M4wZY');
define('NONCE_KEY',        ';mg!-TmZXqEV:[vWcux8sS2N&OoXBix{VmGKE)0-4 7@cu/a.Fqle.N0bABsbs%(');
define('AUTH_SALT',        'vNMKF{kDZwzrNZ8s9G4X*ep/EgLILr2#,DsR=RjJ0-5V_.eiE}Da>K!^emdI+-a#');
define('SECURE_AUTH_SALT', 'tBHtCTVC/|y-.FGNJab<z7_~lu<y)Wl,rw!ui4GEYHUUwta_C5<-@C2NS|q_Bmpn');
define('LOGGED_IN_SALT',   '{4R?)7wx,.UJh|LDPqw.rn .->S@<#Z +l>#[CQR,9ik@ub{(QB|BrO54oGOwXZO');
define('NONCE_SALT',       'n~kLRL#wD9hSLwoU^F2L,?fGrBW${Xl)qMRj&SxhWjn*ewe[G!jy;~1OOxxtKH+q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
