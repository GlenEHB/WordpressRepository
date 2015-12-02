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
define('DB_NAME', 'wc3wordpress');

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
define('AUTH_KEY',         '/6L +{R%7Z+IeOvFy=@^Rs|5]r6C]ST_N+k$aeoc5Q=.v^P _n[Y9LHk*,`DE?]%');
define('SECURE_AUTH_KEY',  '_|}rL{^++i$V-5m5/xRN78qyA|-2P&^Cm=q$mNz/EY$5IU{8#SiIc#]N`o-`]HJ&');
define('LOGGED_IN_KEY',    '}JktdV{j50*=ksxiP,Q)k|Q)qzd|XB-MNq?*;DW(p+tTA{?hjg[E89+),LV}dz^E');
define('NONCE_KEY',        'Aq$>OZdq5+/al.#CA,g`i|&Wvd9=c:?Q#+KZ&D`oITI_U0*ytJ|f?FhHv9qH,(&>');
define('AUTH_SALT',        '7@p{_5UiW-JlW5`|^A}}4O:gcJZZ]nrc?t71}c+XPrNF3UDxmcHkfzE=yg9VRXqW');
define('SECURE_AUTH_SALT', '<3*it:?4mLo`5T]g]%D[`D)Zku0W1Ffb1/viV}-)z5?S((#.+kS|B7e%b[A*>S/3');
define('LOGGED_IN_SALT',   'A^|aUwS[5K@UmuhLL$T&l-84E{Q{K]oX)j#xm>X<B**/dpJBTG0s2VLaf/pr}nt}');
define('NONCE_SALT',       '+~~CZr3[l:l%o<9p=&7DN~m(t2mUoi+b E_(s@Zq3;1lJlm9|AXSf2Ul{Lt(B<.l');

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
