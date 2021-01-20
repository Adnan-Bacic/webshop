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
define('DB_NAME', 'phpwebshop');

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
define('AUTH_KEY',         'l. 4ag~1i9(]mazq;U:w*DU @OhycOC3=:^#?Hj[Sx>D(jF!2)[}T0DDe/DK|vA!');
define('SECURE_AUTH_KEY',  '.<Q/2k[Y,= vEMxDceX$|(Cjr*{^Np7[JEy}8prA/Os:k)V@3Q^)Hl|i?MIXnv|K');
define('LOGGED_IN_KEY',    '|h]sQ9=NBg~@[[#/)6 2T~KBijHB;_B<Slyu$MHZUE~}An[r&|d?S`a0]Ipq.VWl');
define('NONCE_KEY',        '>I?j|4vNy`Qth^9]BJ/8jRYj+;|eyBsvR3pZZwigDQH1o.=ow=cHIq4+0v(s^!KP');
define('AUTH_SALT',        'pWj3)ej:-/zjHXpUx$A$]<4NmZ/(i*pf>)W@/;<no|s4Mp$gLK*{q@a]=KF``yYA');
define('SECURE_AUTH_SALT', 'P9}SJ1RxNTFv^1,UE( P$j[n%] t|H[ai{8XhdLyzFRWB|JdW:% V@Xr2W4A/##m');
define('LOGGED_IN_SALT',   '[.CJMoQr765taLd1Z%F6X!k3sM=@bS-bKx/qj]9/:B$/}N%<sh4TDU$pT#((a(En');
define('NONCE_SALT',       '*>6r*,p:#x0h#7qufw<R Hu74n%tOX/<>kvJD~~=Ny5u[e{OA#Hh]EZRcE5u1q(v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'phpwebshop_';

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
