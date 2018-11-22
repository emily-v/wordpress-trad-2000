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
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H!_*qi3ee5;!Hk41KZ/y|U:U.n]{hU q.f8|+7qY}Q@Gdcgh.BQ+iU[b/:F[R#Ip');
define('SECURE_AUTH_KEY',  '9GSA@<::v;2/C3c +bp@TW[+#G4TA9]?-bGu=rD)|p,fi|o;E.aI8WzT6]eoJNRZ');
define('LOGGED_IN_KEY',    'iM YgSlnEiKT.7S=Mwh{4*27adC^vD`~;NM3qT1/cvPaW d[-:0XU]_.RqFCfv! ');
define('NONCE_KEY',        '`7[JxBMX p!@#|stxH.rJX|2LDTq]IYL@9W3i_yi^TkQS0EQRbmStOtFsjUwb42g');
define('AUTH_SALT',        'prUQN,BA5H}J?7D@B+?gJq<1Z&#{gBwnbsu{5Z*l27cBHd(KlNx=Fj8Q rRg5}tX');
define('SECURE_AUTH_SALT', 'GzRb`6q#m=!.OV4}M1pq&<zj%D4E3Wb4XExn$}pBx_!3ICql1K.!g(vr(WYoHB_p');
define('LOGGED_IN_SALT',   'vUmBW/E&nGG[Vh{Jq4U-^>`jvlzi(>fKsjR?ZGbia_mXS~zuCujk!c*F~Az<550~');
define('NONCE_SALT',       '!d49{9V)CFQeg2:H|zba[:DKFCL$<3D!,~7c7`1qEKoL!3k14cLY1v#@#7 G$14D');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
