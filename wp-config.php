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
define('DB_NAME', 'printage');

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
define('AUTH_KEY',         'clDPxxF-s7k{X F _kruE#L,WJ{!;+1=udc{;vd|>z181K,fg+vZmV&Vk{WrNP.D');
define('SECURE_AUTH_KEY',  'ty,DJ^ ,xGJ:D?6jjq9~ruROM;-px*7*Xtm+3yj~cB1|+Ja3^@j<<BVp]2MxR~z9');
define('LOGGED_IN_KEY',    '|+T!Q=%HA+mAS. ,K4$+w+<KO`Tc{+R]#ir4fJ8Fc=7#J>(biMa5XW_<.lB{=Zh^');
define('NONCE_KEY',        'z^_84FGx84F]$p5YNCZu7ch-?(t@FD8+3+0)W0Q-X]<=-Kl|eC-zB%aPqyZ$+A!M');
define('AUTH_SALT',        'W7z:h*yt>1#T4t;J0`N-5/LS&./Xks3X+M[,P4!R73V}=ye2>t|rXp~)5F46+}.w');
define('SECURE_AUTH_SALT', 'qx{!-Pdg1+|$$9rjFMb]Z)PlF^Htm7Dl a9c||D~6BA+2YNHdK&p24gSTKfnFfa2');
define('LOGGED_IN_SALT',   'w#|#}$tPrN)Od%!OYj;@WEl-,d_|,.tOWs{bcI`p-WPSK-hRN8&*sA~(f&UFH|pD');
define('NONCE_SALT',       'Q5+mv,|.jVIpWSU3)!NL QBueZ7mP`MOp,Uq19.M_DIji7%~- 26SxrYsD5@~TV|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
