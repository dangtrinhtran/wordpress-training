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
define('DB_NAME', 'wordpress-training-db');

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
define('AUTH_KEY',         'lb4Xt`^$@8)*$2O..ED/C<IqkV^nzVSE, C-hwq|oBfIwp=(|9|gXP@-,vao7St_');
define('SECURE_AUTH_KEY',  'g8`GKc_}by)Gogu7g tYj4yPowys{@T!shOcT#/zdv_;kiq>c2|H#_XF@HR[h7V!');
define('LOGGED_IN_KEY',    '_E(e9_&&Y34;saU6Y)qy&5u=7Sj,N/O[g8#i=lw(HPUo71lKCUi7+M>xe^bbFU8J');
define('NONCE_KEY',        'XJvU!P,/ovuq2+`Hm|:!|DMb%V7LM> o4l5w1<c6&jV--? 0`+c$HK_~846mUZtR');
define('AUTH_SALT',        '#o^&-u!@DhXGX--YAg:LNekK;#dnw#x}AknTnkJaRo,,@(zQ|rcmeOhFN7[2!x6?');
define('SECURE_AUTH_SALT', '~d3J)CM/1q1zvkNDk*2$H0U!zQ3O0}!pz>r+sg_O{J`5VZf+Qb@ziJ@>/[Jf`-J`');
define('LOGGED_IN_SALT',   'I|5fdO6W-D0Y&&uPg;=Zm|sa>l+Q)<RXfH[OK7}>&IT,8p*zdimcNUOhMFuw]F-3');
define('NONCE_SALT',       '|dmb{vYM6[EMiU|=Z.jfvJNP,DV[D97d3kW}+i3+[0G55^B<XOtC?e<[2tj7!sta');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nt_';

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