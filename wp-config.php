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
define('DB_NAME', 'verticalekstrem_v1');

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
define('AUTH_KEY',         '|HYe<#t(w{^PwyrkSmh|0yc.*pJ!!#ael?.Aa6_6#6OnSkq1])OAe:5-u%7alW5v');
define('SECURE_AUTH_KEY',  '-nS=NGwO3k]9$T3xE(-kT>`-YRD*47$dV3o{gn!B99E_VHtgv<)FpPf;/*,<2Xq_');
define('LOGGED_IN_KEY',    '#J)SFmOPD?d *_^y9k^1MeU<>e6{rfRY~.0tq:Ov7SWA3i&.: F;C[/=LuaC}Hu=');
define('NONCE_KEY',        'cdD5~1^ Yb%oWq#P?@}%L75i<7Tl~<s)kmq{@k0k=#rE;k]5HQbGNPH3fAE.=Sfo');
define('AUTH_SALT',        'O@0 SB&pPRnVO`QaQ@!u?T:u0mi&Z:|(gr9a^.&527n),s$ClB#,Ic#GF0gYk74m');
define('SECURE_AUTH_SALT', '--~eHq>Pc.j)bdv9I]F7tQKrN9?C6d/:;N1^q!|sC{mj7)1I[=(x&7?)FWP0s|l%');
define('LOGGED_IN_SALT',   'pV]~`OlTAt)1.QK_YwYb$6<e]YHL^dQRp Z(nbK/ds&r<%a4iL(t7lT*m-[XAp[K');
define('NONCE_SALT',       'OFveM8]|J5&H|q4tdq@eTOEXXxB[O=8Z/A`?rM`5cfCc}i yo*bL]!.(e-Gz-1ED');

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
