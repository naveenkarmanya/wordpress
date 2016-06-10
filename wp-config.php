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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'naveen');

/** MySQL database password */
define('DB_PASSWORD', 'naveen999');

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
define('AUTH_KEY',         'y$WjDDc%Me$~4AR=LOml [} GtSY^+(2kz,|m^mTcs9P^e+/ybh|u5s>?PbQV8ny');
define('SECURE_AUTH_KEY',  'MeO]l%NRrpH_8sg%AJ=/+|$n@]00TRh4&|[u.XzX_L,Q+hcSJsm|.;*gQ=M0SpO%');
define('LOGGED_IN_KEY',    'g,z({_be>rjZw5+[kFu>Km9hNe;tyhVXP^^#2fsI]].Sn(/GRNOW?BPy8zGJ,G]s');
define('NONCE_KEY',        '14+k@U|rt:kRtPtbmvmrGhhFOPU|$+rFu}X0_QWXQ`0=>SHHICG>pz-cLRGz7yy1');
define('AUTH_SALT',        '(G&->IO8260YrdPOfQZA(`SF!-m 6]zSh0H*vT(VeTp72ZK7+JEb&0Jqvd9B.z8F');
define('SECURE_AUTH_SALT', 'cHF%}>(K]Eo~,3DOlw:,||fmF*,=!+|p7T5pqOwR5;,L(k }%mra)}A2LRMx>^yR');
define('LOGGED_IN_SALT',   '|3 7a./-NN*!uQBM4P}l6757WG7}<a(SpiPk{?*^q)L541*?LA6.)*#Uf<Q?ZzZ-');
define('NONCE_SALT',       'L{^W}^5b92IrjK$S1{/c=JXsr)1No^q5aC:r#ag-M-2`t2ig[fnZ?6<edVO`F5s4');

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
