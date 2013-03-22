<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         'xS&M8Uc{kn0D4`Hjp+2?s?Q%R=6sCZipmg/4C%)Wy#D9pWcOjs6QQdVC{&8%Lc`R');
define('SECURE_AUTH_KEY',  '`+xqH8Ev<VQ U$x%rlk0<+Qjn^s?=F~<YK0WWK82Da>qu$AA25V_Cv24GJWU[(ay');
define('LOGGED_IN_KEY',    '&*#~Co3XSSjDgezhg7})W`02?Dj:CSR3)vlNu]t7li&pj|>GC{$3},vEKTo{ 9#(');
define('NONCE_KEY',        '[@xm|lNG{ QIBREy~I8`_35<AW_GwYe$tCG+@lJ;pF<ka@!]6lkq`oCR0]&4suu(');
define('AUTH_SALT',        ':5<N{}%ctEqD`+kgUTBLJ9`Bg$}YBY+|<|y-csb<P-]2QO2HNR<(K##`C($Hl^~!');
define('SECURE_AUTH_SALT', 'GJ}SZMSR}To(:c}iHn|@f2@nIWB6V3)vibCw_#?F$CG56m[Sgt~uqiZQIF@M,9p;');
define('LOGGED_IN_SALT',   '/sdH[*v;i.apELn=*S9Kn%.B@6mr$3q[+=UnoZhsvtXL 6#:O0*j6*CVQ7/uq$g ');
define('NONCE_SALT',       '38@o5VPq[~<!8j}/{}X9B2ayHHo|Mthi>|g/LR}#rm[|C:$@U7EBr`Bp`-_Z2g}b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
require_once(ABSPATH . 'wp-settings.php');
