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
define('DB_NAME', 'sqlfeinier');

/** MySQL database username */
define('DB_USER', 'feinier');

/** MySQL database password */
define('DB_PASSWORD', 'YR394055524');

/** MySQL hostname */
define('DB_HOST', '174.139.122.190');

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
define('AUTH_KEY',         '6xFIc;8E@#SbD`MvXbXp|R71pZ3.T<!?)kg1OYV<|6|RvAy6.CWv(<juuCUWmm/a');
define('SECURE_AUTH_KEY',  'k0^-}/~UGyG+!%ut:AC!2?C|AGixjtFcm*WU;Tg!45}JE& uL7Lf,FME6N?FUz]o');
define('LOGGED_IN_KEY',    'KC*35fB_(N./ly(:F30BP&]g#zlufj[0z,*GPq}~V*9G{$-mNAEo}ajI<``c!LNk');
define('NONCE_KEY',        '4&V}Qd]vrla;0wEheD[^|ziZ-O8QH|*.`jD3/k36E**kl}*>fPWBtH=+$a(}WUua');
define('AUTH_SALT',        'ENcb)vJF+6MRki(X&-|U:s>=5TBrEJu0cm+Xj;m)mzVmP]YORSBI8yr;zto-A9g3');
define('SECURE_AUTH_SALT', '|MzVyzIn1EX[LxYg xzVDpFRms!6W|{<|@s#4Sh(_/)z|-KI:6= >,^i0rkU;yZ+');
define('LOGGED_IN_SALT',   'bv2]SMW5Uw1f=]@hfPq}#fF_R+m4;m8H>9I_6?3jb~?+xqQwy!~_$-xIbadi5yK-');
define('NONCE_SALT',       '+j4d<Ixh+lw[2-5<sbpG;)1AX|+$8Jb4&{NjBjdK;]b==;fb$DA7n_&}8-&|Pi[-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sooglejay';

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
