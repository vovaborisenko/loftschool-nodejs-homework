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
define('DB_NAME', 'greenDB');

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
define('AUTH_KEY',         'e; r[8{-Hj4}oy]P,K>aDDP2=(aZI1kMtkr*Bh=o]5)R4s;8Lc4{M(]`]m,b$6{@');
define('SECURE_AUTH_KEY',  'O !OR]UEe7YyjdW_=~pW:xPgb.f&.=pFuwAR4g$bG4Q3b<{OKhIncrZC/?FRA4N(');
define('LOGGED_IN_KEY',    'k|`Y!ogp@w3k1.7<>a|Yx13gm|G<bGfLw_YZh^] Cv4,wOeYniXK7%J??uy3yYv_');
define('NONCE_KEY',        '[EJ!=?.2M;GCfy{%N.}P9n!E(B=xbcL@Wf.8-oz^nF9sTmgU-gpC{=/Y.0OHSeRy');
define('AUTH_SALT',        '~TMJK5?g.CX?$s(-5UxRDD~pm_B,b~=RwKcIZoAw`-];fv$HFlLA`VvD8D&5pi9s');
define('SECURE_AUTH_SALT', 'F`VxHkqI`K/VgDb7~.eEdH[G8+e~;:}Xmelb#dQ|B{PnM&n`.EMz%fWkE4sl= cI');
define('LOGGED_IN_SALT',   'twzf^8SI-S+;*Cjj/v7,Rqa+K)+-x>Rhh1,rL7]jV-?9`fyT7sZhE5`4@x$/Wt)F');
define('NONCE_SALT',       'e$jFUyxgX$X/{[&6y;S|1?q@h.Y14Kd}_ q&?>w8^kPy+%}UU8`&H1BL.Y&1PknE');

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
