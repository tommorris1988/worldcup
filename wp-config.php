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
define('DB_NAME', 'worldcup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-QyUHACrLA#(OTZaMB:SxP2$8&/EUg~lFVoCV9+m^z]7k[dADg4L($Fj.[HA@.AW');
define('SECURE_AUTH_KEY',  'zc|F<?aUa~d9NrTj2WEN1ey8@Z*%0@3u(97,X8 Xc<D`|5 NQk=v8XKdeMii9M]0');
define('LOGGED_IN_KEY',    '!^4{vu*;i*>aDNPU[qoUFARd9ZCL&e9a_<BKEsdXw`0^v{*v3ZLQ%;%=FMN?$FP;');
define('NONCE_KEY',        '/ouytw36J3j)avG&g2Y}XHDJM2uUw3IueC]-vCIZ= +e<JO,fGU;7Z#I>8AF8Op0');
define('AUTH_SALT',        'jX+Do(wz-p .X#d&3?Fx5Yv^rM%t[q5o<G_cQx/vyO/[V#kOIuV@GRYqbfT{r%k^');
define('SECURE_AUTH_SALT', '-M|DOtU(9Lq&:?W=I]@;m@qCJ~O@/BrtWhmY5c.%I`7Kr%#0xZ5lIc/[{6lR[=%[');
define('LOGGED_IN_SALT',   'Rq!d^DNtmmPp*l>o*P^?!sw(!#00Q!O$dQ@Tgz$5iCRd`rg]hZiUn{$[F*QiS.[b');
define('NONCE_SALT',       'eDx2_C%?!c#KTkp?RT#5$8Sb_kv:AG;N LTr` QuP(Wtkz)DI7QG,k:Rp`iw*a|o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'worldcup_';

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
