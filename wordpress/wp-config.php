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
define('DB_NAME', 'mynewdatabase');

/** MySQL database username */
define('DB_USER', 'newuser');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '{q7[K#iR+B)o`2K1=i/oP3U(+1L+=5SKoizvyhNxF{tae*Zq:L2 44QL3!gOx7>T');
define('SECURE_AUTH_KEY',  'kH.Ql!tZV~nNfcTJLIH~o,*)}S(]26hEmSs0/DB${i`>U7.%6a2=*]L!V{z`a59.');
define('LOGGED_IN_KEY',    'AE65~1fi //@Y+RqmFL5cb?q%@V9:9h<9KMLa*Gb2q/K$QwffES=_]=^UdJ: v|@');
define('NONCE_KEY',        '*iPQ><Mtx9iy`m(a|30!LWsU@Y@G}**tMmPkAiK9P9PKXGq{k(xT@S$Qwy/L?li,');
define('AUTH_SALT',        'M3TFayB}!c{7Bcsc<f[ruK%@/:=I*) F&Jp)u5(jF#PE./JOO_df-;Uvc%Cdo$}U');
define('SECURE_AUTH_SALT', 'Z)|H,7HAS=IDe{Y){9h1RGMwtYrUx!4Xy;E)w:~-Dom72}<SJ.G9Y@%&CJ=7!L3|');
define('LOGGED_IN_SALT',   'DWE6tq$+atEYA5ov@CbHfd|cT:_W40vFqK]VQZ>^V] %v.(!/jc!PMV3cCK%`ucd');
define('NONCE_SALT',       'nZw8*?f14t4+G?3%# y:r0.Zm3{S+*]6e|A!o^ozXSlegH*`g:&d+QL6vJYH$l3|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qwe_';

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
