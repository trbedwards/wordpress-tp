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

/** DBG: put this here to fix problem with css not loading */
define(‘CONCATENATE_SCRIPTS’, false );

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '`*O$Ib>z%<U+F-Y?##StD,%_$go PV+yC({zQJNv>6}|@UUrt[jq;FiMWl`]zkAI');
define('SECURE_AUTH_KEY',  'FY(Ri &OAd,x1e`Xy0>-*7AG]wQ-AQX?~b{qjV+|7F0f83{bRM?+o^dU]H~CG|>v');
define('LOGGED_IN_KEY',    'YHfXIF$Oe;BG`@C@<7moBfhPu%lePs{`|y~ 0GLFZf-kURcI--a%CYKNuq&>{~/|');
define('NONCE_KEY',        'l!4x<~wf|p$;}D:2t|}:!NYbMdUMO{(LB0zRrK7(yi.mo;;!Zp/n/kie[]wud+ #');
define('AUTH_SALT',        '9N+Z$_xc1)-[!/YvgH-&EmNrry.|`}.g;h<)2p8+q/hB!-tSotV<.FCSXe)5Pf^3');
define('SECURE_AUTH_SALT', '8%U.2HZr+F;(9ALkyYbIe>~i5/O# Fu2<T$W+CGxGKd<sK B>d|0j522?>+ZU&b1');
define('LOGGED_IN_SALT',   'kJ9AEV,O6UOGu&sP.D0lySm-|L]97@X,(z-?Dab&_mIP^>-n-M |8jm$9-EAO|S.');
define('NONCE_SALT',       'Qn&X.)u0fX2/ZSfQy=;,e|h4/ r5$rW_3h +QfyYHG(JuY j]<+I|I5?R *rh/qs');

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
