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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         'n2EP?_D73$>}P>kOM>6 g+(o~?~g;#J~fPE0/%{2V8UB&8t6B13wwK;IACa2LY</');
define('SECURE_AUTH_KEY',  '?[tq_Xrd/;M)jo+VFSQaa;8Pn|dLZ*Xq:.k`fJol*kc!2|s0@@sw<8jBkv=i&p2k');
define('LOGGED_IN_KEY',    '+~l@dWc5okGiA++xZ|`w&MX)>tduE72^&yyS,>]1?b}GcwuAiUqepYym*.4PBK:C');
define('NONCE_KEY',        ']BZlJ>ROpP2j{mwOD{!!NWBOXotmqPCRA:!RQx>>zxgk2bKy2JlU==sQJz0!wPcn');
define('AUTH_SALT',        '^MC}LK1Mwp a15>@7}}W L&e8j):wntv[jZXLsA;Ko&Aj^v@A}HkGKMT~oj@r-_$');
define('SECURE_AUTH_SALT', '6|zl;3t#3lX+g47s3QU<gGF#O8U7~NQF_FuAN)TK0O4$n:?fB]ypO5SqJqJN)A2p');
define('LOGGED_IN_SALT',   '8EfFOo!?<VbTS3sQ?1Vb@z2?NG{^{M3>.p#N%;DlPr@+r3B;/V.x@x:S>m3;PR[S');
define('NONCE_SALT',       'E/&vc!Uw1q<.niy=;fX+qrq)&Pl;^USAx$>hqZZ)&EZ%bV%/wS{2DV#o-WBRLj(Z');

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
