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
define('DB_NAME', 'bm-starter');

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
define('AUTH_KEY',         'XyJfy+-Y-M_i[4-=;5jM~(=7Z|jRtyBv->cv%Lw,;&9}sN+o2> Z*(5pwjoV]36$');
define('SECURE_AUTH_KEY',  '`>I<K-HyEprz#Q}x,!tuiiU:t[O9/a1mCRXM~u|{GuJxGE8Iy^&7l-IE {`=juI&');
define('LOGGED_IN_KEY',    'C6>M}&$l_R;qUg&,VDBSy~ayr,LH.?%a,EX1pp0Y[V (0q~1t^?J4e-/!4&yRI f');
define('NONCE_KEY',        '_kD} }+]6lR?i=dz 4#H&IZXWv[}PcyEd[o[6^,1^xfE{ ,%C_P7MUDz}L%S,7G0');
define('AUTH_SALT',        'M,%EONud-stH%Y`.,6LY,`nz3Ne1MUFHq#F;yDaA)ll1#szz#Gg#8;u:$7= !9q;');
define('SECURE_AUTH_SALT', '>bXP7gT,C[cK/z35_z75+l%qI4y)XSP(_3W?kZG{KVP%Fzx>Uv82~,^cN&LCfO;(');
define('LOGGED_IN_SALT',   '=nBReZB&._l8q[5n4Tb~?{/=gis-WC;juXYwf]G{@Gd0DZH:-~(*M}4{dE2|t)<Z');
define('NONCE_SALT',       '=BZQ7w9h`<x%2zSP#_ M^yfe8HOJ2@HXNvkX&!/A?6Gq3dJ)vEAjZS0GE[-^Ar$9');

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
