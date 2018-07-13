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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'C9XyULPF_ZAyDVLh1Ox!}JkNk0mW@{Wz{^q cX?K ?OA5*m%L$X0*q=w[Z/2G!h)');
define('SECURE_AUTH_KEY',  '~1E1cqkvD.u%G;T~5V1#Q7u61Ex;2yzXV:8UTb=tV{2,VBi5hD4<}81A7^hgQ@bz');
define('LOGGED_IN_KEY',    'pR}ycQrDW?`=.+l8lB8F> 4d%|u{cdfR~)rLlGt/gZ-VrMVg3ZG(4tTK35i9E2oI');
define('NONCE_KEY',        '-dqj~^3:iwAIW69et2q+?A?~/qhQlB45}eK}G:/#iYa4AGq(L)u4*tL.2`F{XS4l');
define('AUTH_SALT',        '3pDRnPxFf8.t_pf<heKtJoj+KSyVX4ZR$VVGMETo`mq`H4eZLGMXlU4^VFf3U76(');
define('SECURE_AUTH_SALT', 'Wp$*+a%;001Ex_se+u+?#<L1>,PDTb5,v#CqE5RosMeMl7ZaR<1O&W*ZLfor?A=L');
define('LOGGED_IN_SALT',   'G<vvS:X|XXzC{~pz3tFHQaHx> nI_c,8t1G3/.-Ag2z*I%@r,,a:9%7;X)cHgh e');
define('NONCE_SALT',       'L9=|n^7I.%Bz}noH:)o:CVW8L*3^&Aj$NH+S_#I1I>8Vkz.3aM]FkQcRje~V+K?Y');

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

