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
define('DB_NAME', 'wordpress-3230353831');

/** MySQL database username */
define('DB_USER', 'wordpress-3230353831');

/** MySQL database password */
define('DB_PASSWORD', '9ab2ad6e9b9d');

/** MySQL hostname */
define('DB_HOST', 'sdb-q.hosting.stackcp.net');

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
define('AUTH_KEY',         'ptg8t97kzZgPQrwnmWkNsAsZ7pJktpil');
define('SECURE_AUTH_KEY',  '6qTm1/TMBtgSW0E2VUYeb9oJjNgnUQP2');
define('LOGGED_IN_KEY',    'KzVv0hVLDM0fSuaGP7B4dtnWS7YR1mNj');
define('NONCE_KEY',        'WFPj5oGgmuSsdyiXV06r1ShWBkCGoQC8');
define('AUTH_SALT',        'eiB7B6hRvQ6QU/5cEO0XCCfmMhaJ75T/');
define('SECURE_AUTH_SALT', '4eHCwaI9pgu0Ile71sP89M1dxDjhLkVi');
define('LOGGED_IN_SALT',   'VsT7HZoAhjGDwSp72dap7POFxfvPLdYd');
define('NONCE_SALT',       'vStTuVUrP6jjLPCSMhHeYKLmnpkCcljN');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '56_';

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
