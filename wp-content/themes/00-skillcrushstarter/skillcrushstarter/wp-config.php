<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'attycool_wydt');

/** MySQL database username */
define('DB_USER', 'attycool_wydt');

/** MySQL database password */
define('DB_PASSWORD', '5lsqty3tyu8frf6f');

/** MySQL hostname */
define('DB_HOST', '10.169.0.46');

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
define('AUTH_KEY',         'wro08JNvSogcmttP0Rti3AP0Hjon0zUxpjhrOqY7SpQGRVhnac71tdKRd4y1kUTh');
define('SECURE_AUTH_KEY',  'EEjeGlkvqMNxUhFCE8vClxKVLcFVGVhDFFypIYVu8MKEgLFjihlEPykIms0oDpb1');
define('LOGGED_IN_KEY',    'RVDPeWDyb0WvKg70IX1SuAQNCy5NiJ29KkFcz94tKpxL8KEmAhHCvyFch7kFMtYz');
define('NONCE_KEY',        'u1pBmWqnw1XTp6QSSVqAWAc7dg1wLvaOutxv23sqedd94g9YwOCMRdxRYumbwf3S');
define('AUTH_SALT',        'MAg1g3S7IAA84wLAoDA67BARTizxzyhoqjj8nMZnURXzazlKtHpOak3GX7Kh1z2e');
define('SECURE_AUTH_SALT', 'mX9LWSamXdqbhiXOWPhNIbdv5PphP4G8jfnZVe8958FekIR6zeRRCdYR4KuaLhvU');
define('LOGGED_IN_SALT',   '365iIMHy04IKC06Uz5xZNxf2GC3C1McQPAeYI2wgFStvS5pNGa2bwx1vFhL2HfwO');
define('NONCE_SALT',       'JFPOrXN2P1Ok2YwJxWUaO0TLXKhlSfxwgXVURUedcq8WHwgeRiQHk2oERVZg5j5f');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wdhj_';

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
