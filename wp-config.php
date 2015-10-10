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
define('DB_NAME', 'wordpress386');

/** MySQL database username */
define('DB_USER', 'wordpressuser386');

/** MySQL database password */
define('DB_PASSWORD', 'YEAptdXp&!&f');

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
define('AUTH_KEY',         '~O0m%2T+[|8U-ia^H;~%6GrY^K|I[@^v(H:9Q8s}}Vf#U9 -`w7fJDRw|eH_1NGU');
define('SECURE_AUTH_KEY',  '7ZnqE:a/l1,q cN@3r)_b+-S?_M}EKl[<^]0XT#f&HG1/xt[y|~Jdo>3=1^^#*[`');
define('LOGGED_IN_KEY',    '*H^+ax<|K<#>)cy0,C<euurc@1$[tIe] j|uiP9CEMs:IM.QwXUFR:?d~kTj~FjQ');
define('NONCE_KEY',        '%^QJAj&[ZS.;A24~A]MJf{w|y_l$DQdhH(I{_Q!D)vn@d]E~#YWcF/g?v}5@&moH');
define('AUTH_SALT',        '|dxvwLqSfGFa)Z#%<E*|X2Fi,l7^M+[nrJ8W{nF-^&d;ftQ9@o.WvTr/T=cxd?S:');
define('SECURE_AUTH_SALT', 'l8h>!8euDU[HPfT%Z&9m]zH 2u,<H)h}seP|K&t@b}b#l.EGD5}QtF7A{1d,n4Mz');
define('LOGGED_IN_SALT',   '|.!|$_#Q+V4N].uAOT.-UfuK<(5+iG5GvBH$C*Z_ vsq2x~-iTMU.rHvfvmCaleF');
define('NONCE_SALT',       'h+I-1mm6QPop<KdDk=D++4|JRzJFJ!$VZR7j`)|P, );V*leps~bz}gqq>r!qqkR');

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
